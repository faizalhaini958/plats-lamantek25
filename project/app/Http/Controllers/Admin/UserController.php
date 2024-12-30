<?php

namespace App\Http\Controllers\Admin;

use App\Classes\GeniusMailer;
use Datatables;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Follow;
use App\Models\Generalsetting;
use App\Models\Listing;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function datatables()
    {
            $datas = User::orderBy('id','desc');

            return Datatables::of($datas)
                            ->addColumn('action', function(User $data) {
                                return '<div class="btn-group mb-1">
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    '.'Actions' .'
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start">
                                    <a href="' . route('admin-user-show',$data->id) . '"  class="dropdown-item">'.__("Details").'</a>
                                    <a href="' . route('admin-user-edit',$data->id) . '" class="dropdown-item" >'.__("Edit").'</a>
                                    <a href="javascript:;" class="dropdown-item send" data-email="'. $data->email .'" data-toggle="modal" data-target="#vendorform">'.__("Send").'</a>
                                    <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="dropdown-item" data-href="'.  route('admin-user-delete',$data->id).'">'.__("Delete").'</a>
                                    </div>
                                </div>';
                            })

                            ->addColumn('status', function(User $data) {
                                $status      = $data->is_banned == 1 ? __('Block') : __('Unblock');
                                $status_sign = $data->is_banned == 1 ? 'danger'   : 'success';

                                    return '<div class="btn-group mb-1">
                                    <button type="button" class="btn btn-'.$status_sign.' btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        '.$status .'
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start">
                                        <a href="javascript:;" data-toggle="modal" data-target="#statusModal" class="dropdown-item" data-href="'. route('admin-user-ban',['id1' => $data->id, 'id2' => 0]).'">'.__("Unblock").'</a>
                                        <a href="javascript:;" data-toggle="modal" data-target="#statusModal" class="dropdown-item" data-href="'. route('admin-user-ban',['id1' => $data->id, 'id2' => 1]).'">'.__("Block").'</a>
                                    </div>
                                    </div>';
                            })
                            ->rawColumns(['action','status'])
                            ->toJson();
    }

    public function index()
    {
        return view('admin.user.index');
    }

    public function image()
    {
        return view('admin.generalsetting.user_image');
    }

    public function show($id)
    {
        $data = User::findOrFail($id);
        $data['listings'] = Listing::whereUserId($id)->orderBy('id','desc')->limit(5)->get();
        $data['data'] = $data;
        return view('admin.user.show',$data);
    }

    public function ban($id1,$id2)
    {
        $user = User::findOrFail($id1);
        $user->is_banned = $id2;
        $user->update();
        $msg = 'Data Updated Successfully.';
        return response()->json($msg);
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('admin.user.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
                'photo' => 'mimes:jpeg,jpg,png,svg',
                ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $user = User::findOrFail($id);
        $data = $request->all();
        if ($file = $request->file('photo'))
        {
            $name = Str::random(8).time().'.'.$file->getClientOriginalExtension();
            $file->move('assets/images',$name);
            if($user->photo != null)
            {
                if (file_exists(public_path().'/assets/images/'.$user->photo)) {
                    unlink(public_path().'/assets/images/'.$user->photo);
                }
            }
            $data['photo'] = $name;
        }
        $user->update($data);
        $msg = 'Customer Information Updated Successfully.';
        return response()->json($msg);
    }



    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if($user->transactions->count() > 0)
        {
            foreach ($user->transactions as $transaction) {
                $transaction->delete();
            }
        }

        if($user->listings->count() > 0)
        {
            foreach ($user->listings as $listing) {

                if($listing->galleries != NULL){
                    foreach($listing->galleries as $gallery){
                        @unlink('assets/images/'.$gallery->photo);
                        $gallery->delete();
                    }
                }

                if($listing->menus != NULL){
                    foreach($listing->menus as $menu){
                        @unlink('assets/images/'.$menu->menu_photo);
                        $menu->delete();
                    }
                }

                if($listing->services != NULL){
                    foreach($listing->services as $service){
                        @unlink('assets/images/'.$service->service_photo);
                        $service->delete();
                    }
                }

                if($listing->rooms != NULL){
                    foreach($listing->rooms as $room){
                        @unlink('assets/images/'.$room->room_photo);
                        $room->delete();
                    }
                }

                if($listing->faqs != NULL){
                    foreach($listing->faqs as $faq){
                        $faq->delete();
                    }
                }

                if($listing->wishlists != NULL){
                    foreach($listing->wishlists as $wishlist){
                        $wishlist->delete();
                    }
                }

                if($listing->recentviews != NULL){
                    foreach($listing->recentviews as $recentview){
                        $recentview->delete();
                    }
                }

                if($listing->bookings != NULL){
                    foreach($listing->bookings as $booking){
                        $booking->delete();
                    }
                }

                if($listing->enquiries != NULL){
                    foreach($listing->enquiries as $enquiry){
                        $enquiry->delete();
                    }
                }

                if($listing->reviews != NULL){
                    foreach($listing->reviews as $review){
                        $review->delete();
                    }
                }

                @unlink('assets/images/'.$listing->photo);
                $listing->delete();
            }
        }

        if($user->booking->count() > 0)
        {
            foreach ($user->booking as $booking) {
                $booking->delete();
            }
        }

        if($user->enquries->count() > 0)
        {
            foreach ($user->enquries as $enqury) {
                $enqury->delete();
            }
        }

        if($user->messages->count() > 0)
        {
            foreach ($user->messages as $message) {
                $message->delete();
            }
        }

        if($user->followers->count() > 0)
        {
            foreach ($user->followers as $follower) {
                $follower->delete();
            }
        }

        @unlink('assets/images/'.$listing->photo);
        $user->delete();

        $msg = 'Data Deleted Successfully.';
        return response()->json($msg);
    }

}
