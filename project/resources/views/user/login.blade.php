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
                                <h4 class="m-0 ft-medium">@lang('Log Masuk Peniaga')</h4>
                            </div>

                            <form class="submit-form" id="loginform" action="{{ route('user.login.submit') }}" method="POST">
                                @includeIf('includes.user.form-both')
                                @csrf

                                <div class="form-group">
                                    <label class="mb-1">@lang('Emel Anda')</label>
                                    <input type="email" name="email" class="form-control rounded" placeholder="@lang('Email')*">
                                </div>

                                <div class="form-group">
                                    <label class="mb-1">@lang('Kata Laluan')</label>
                                    <input type="password" name="password" class="form-control rounded" placeholder="@lang('Password')*">
                                </div>

                                <div class="form-group">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="flex-1">
                                            <input id="dd" class="checkbox-custom" name="remember" type="checkbox" checked>
                                            <label for="dd" class="checkbox-custom-label">@lang('Set untuk ingat')</label>
                                        </div>
                                        <div class="eltio_k2">
                                            <a href="{{route('user.forgot')}}" class="theme-cl">@lang('Terlupa Kata Laluan?')</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-md full-width theme-bg text-light rounded ft-medium">
                                        @lang('Log Masuk')
                                        <div class="spinner-border formSpin" role="status"></div>
                                    </button>
                                </div>
                                <!--
                                @if (addon("otp"))
                                <div class="form-group text-center mt-4 mb-0">
                                    <p class="mb-0"><a href="{{ route('user.otp.login') }}" class="ft-medium text-success">@lang('Login With Phone Number')</a></p>
                                    </div>
                                @endif
                                -->          
                                <div class="form-group text-center mt-4 mb-0">
                                    <p class="mb-0">@lang("Tiada akaun?") <a href="{{ route('user.register') }}" class="ft-medium text-success">@lang('Daftar Akaun')</a></p>
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
