<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Generalsetting;
use App\Models\User;
use Auth;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'userLogout']]);
    }

    public function showLoginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

            if (Auth::guard('web')->user()->is_banned == 1) {
                Auth::guard('web')->logout();
                return response()->json(array('errors' => [0 => 'You are Banned From this system!']));
            }

            if (Auth::guard('web')->user()->email_verified == 'No') {
                Auth::guard('web')->logout();
                return response()->json(array('errors' => [0 => 'Your Email is not Verified!']));
            }

            if (session()->get('setredirectroute') != null) {
                return response()->json(session()->get('setredirectroute'));
            }
            $gs = Generalsetting::first();
            $user = auth()->user();
            if ($gs->two_factor && $user->twofa) {
                return response()->json(route('user.otp'));
            } else {
                $user->update(['verified' => 1]);
                return response()->json(route('user.dashboard'));
            }
        }

        return response()->json(array('errors' => [0 => 'Credentials Doesn\'t Match !']));
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        session()->forget('setredirectroute');
        session()->forget('affilate');
        return redirect('/');
    }

    public function showOtpLoginForm()
    {
        if (!addon("otp")) {
            return redirect()->back()->with("error", "Otp addon is not enabled");
        }

        return view('user.otp_login');
    }

    public function showOtpLoginFormSubmit(Request $request)
    {

        $request->validate([
            "phone" => "required",
        ]);

        $user = User::wherePhone($request->phone)->exists();
        if (!$user) {
            return back()->with("unsuccess", "User Not Found");
        }

        $user = User::wherePhone($request->phone)->first();
        $otp = rand(pow(10, 6 - 1), pow(10, 6) - 1);
        $user->otp = $otp;
        $user->save();
        return redirect(route("user.otp.login.view"));
        $gs = Generalsetting::first();

        try {

            try {

                $vonageKey = $gs->nexmo_key;
                $vonageSecret = $gs->nexmo_secret;
                $basic = new \Vonage\Client\Credentials\Basic($vonageKey, $vonageSecret);
                $client = new \Vonage\Client($basic);
                $message = new \Vonage\SMS\Message\SMS($user->phone, $gs->nexmo_default_number, 'Your OTP : ' . $otp);
                $client->sms()->send($message);
            } catch (\Throwable $th) {
                return back()->with("unsuccess", $th->getMessage());
            }

            return redirect(route("user.otp.login.view"));
        } catch (Exception $e) {
            return redirect(route("user.otp.login.view"));
            return back()->with("unsuccess", $e->getMessage());
        }
    }

    public function showOtpLoginFormView()
    {
        return view("user.otp_view");
    }

    public function showOtpLoginFormViewSubmit(Request $request)
    {
        $request->validate([
            "otp" => "required|max:6",
        ]);

        $user = User::whereOtp($request->otp)->exists();
        if (!$user) {
            return back()->with("unsuccess", "Otp not match");
        }

        $user = User::whereOtp($request->otp)->first();
        auth()->guard('web')->login($user);
        return redirect(route("user.dashboard"));

    }

}
