@extends('layouts.front')

@push('css')
@endpush

@section('content')
    <!-- ======================= Login Detail ======================== -->
    <section class="gray">
        <div class="container">
            <div class="row align-items-start justify-content-center">
                <div class="col-xl-5 col-lg-8 col-md-12">

                    <div class="signup-screen-wrap">
                        <div class="signup-screen-single">
                            <div class="text-center mb-4">
                                <h4 class="m-0 ft-medium">@lang('Login With Phone Number')</h4>
                            </div>

                            <form class="account-form row gy-3 gx-4 align-items-center" id=""
                                action="{{ route('user.otp.login.submit') }}" method="POST">
                                @includeIf('includes.flash')
                                @csrf

                                <div class="form-group">
                                    <label class="mb-1">@lang('Your Phone Number')
                                        <small class="text-danger">@lang('Please enter your phone number with country code')</small>
                                    </label>
                                    <input type="text" name="phone" class="form-control rounded"
                                        placeholder="@lang('Enter Phone Number')">
                                </div>


                                <div class="form-group">
                                    <button type="submit"
                                        class="btn btn-md full-width theme-bg text-light rounded ft-medium">
                                            @lang('Submit')
                                    </button>
                                </div>

                                <div class="form-group text-center mt-4 mb-0">
                                    <p class="mb-0">@lang("Don't have an account?")
                                        <a href="{{ route('user.register') }}"
                                            class="ft-medium text-success">@lang('Sign Up')</a>
                                    </p>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Login End ======================== -->

    <!-- ======================= Newsletter Start ============================ -->
    @include('partials.front.cta')
    <!-- ======================= Newsletter Start ============================ -->

    <!-- ============================ Footer Start ================================== -->
    @include('partials.front.footer')
    <!-- ============================ Footer End ================================== -->
@endsection

@push('js')
@endpush
