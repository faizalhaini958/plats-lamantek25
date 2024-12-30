@extends('layouts.front')

@push('css')

@endpush

@section('content')
    <!-- ======================= Login Detail ======================== -->
    <section class="gray">
        <div class="container">
            <div class="row align-items-start justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-12">

                    <div class="signup-screen-wrap">
                        <div class="signup-screen-single light">
                            <div class="text-center mb-4">
                                <h4 class="m-0 ft-medium">@lang('Daftar Akaun PLATS')</h4>
                            </div>

                            <form id="registerform" class="row gy-3" action="{{ route('user.register.submit') }}" method="POST">
                                @includeIf('includes.user.form-both')
                                @csrf

                                <!--
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="mb-1">@lang('Nama Penuh Anda')</label>
                                            <input type="text" name="name" class="form-control rounded" placeholder="@lang('Seperti dalam MYKAD')">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                        <label class="mb-1">@lang('Emel')</label>
                                        <input type="text" name="email" class="form-control rounded" placeholder="@lang('Emel')">
                                    </div>
                                    </div>
                                </div>
                                -->

                                <div class="form-group">
                                    <label class="mb-1">@lang('Nama Penuh Anda')</label>
                                    <input type="text" name="name" class="form-control rounded" placeholder="@lang('Seperti dalam MYKAD')">
                                </div>

                                <div class="form-group">
                                    <label class="mb-1">@lang('Emel')</label>
                                    <input type="text" name="email" class="form-control rounded" placeholder="@lang('e.g abc@gmail.com')">
                                </div>

                                <div class="form-group">
                                    <label class="mb-1">@lang('Nama Pengguna')</label>
                                    <input type="text" name="username" class="form-control rounded" placeholder="@lang('Nama Unik e.g Ahmad12')">
                                </div>

                                <div class="form-group">
                                    <label class="mb-1">@lang('Nombor Telefon Bimbit')
                                        <small class="text-danger">@lang('Masukkan nombor telefon anda bermula dengan kod 6')</small>
                                    </label>
                                    <input type="text" name="phone" class="form-control rounded" placeholder="@lang('e.g 601122334455')">
                                </div>

                                <div class="form-group">
                                    <label class="mb-1">@lang('Kata Laluan')</label>
                                    <input type="password" name="password" class="form-control rounded" placeholder="@lang('Kata laluan untuk log masuk')*">
                                </div>

                                <div class="form-group">
                                    <label class="mb-1">@lang('Sah Kata Laluan')</label>
                                    <input type="password" name="password_confirmation" class="form-control rounded" placeholder="@lang('Isi semula kata laluan untuk pengesahan')*">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-md full-width theme-bg text-light rounded ft-medium">
                                        @lang('Daftar Akaun')
                                        <div class="spinner-border formSpin" role="status"></div>
                                    </button>
                                </div>

                                <div class="form-group text-center mt-4 mb-0">
                                    <p class="mb-0">@lang('Anda telah daftar akaun')? <a href="{{ route('user.login') }}" class="ft-medium text-success">@lang('Log Masuk')</a></p>
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
