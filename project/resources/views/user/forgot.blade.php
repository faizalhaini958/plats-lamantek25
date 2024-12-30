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
                                <h4 class="m-0 ft-medium">@lang('Set Semula Kata Laluan')</h4>
                            </div>

                            <form class="account-form row gy-3 gx-4 align-items-center" id="forgotform" action="{{ route('user.forgot.submit') }}" method="POST">
                                @includeIf('includes.user.form-both')
                                @csrf

                                <div class="form-group">
                                    <label class="mb-1">@lang('Emel Anda')</label>
                                    <input type="email" name="email" class="form-control rounded" placeholder="@lang('Emel yang anda daftar')*">
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-md full-width theme-bg text-light rounded ft-medium">
                                        @lang('Hantar')
                                        <div class="spinner-border formSpin" role="status"></div>
                                    </button>
                                </div>
                                <!--
                                <div class="form-group text-center mt-4 mb-0">
                                    <p class="mb-0">@lang("Anda telah daftar akaun?")
                                        <a href="{{ route('user.login') }}" class="ft-medium text-success">@lang('Log Masuk')</a>
                                    </p>
                                </div>
                                -->
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
