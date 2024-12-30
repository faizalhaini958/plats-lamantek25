@extends('layouts.front')

@push('css')

@endpush

@section('content')
    <!-- =============================== Dashboard Header ========================== -->
    <!--@includeIf('partials.user.header')-->
    <!-- =============================== Dashboard Header ========================== -->

    <!-- ======================= dashboard Detail ======================== -->
    <div class="dashboard-wrap gray px-4 py-5">
        <a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false" aria-controls="MobNav">
            <i class="fas fa-bars me-2"></i>@lang('Listing')
        </a>
        <div class="collapse" id="MobNav">
            @includeIf('partials.user.sidebar')
        </div>

        <div class="dashboard-content">
            <div class="dashboard-tlbar d-block mb-5">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium">@lang('Selamat Datang'), {{ auth()->user()->name }}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-muted"><a href="{{ route('front.index') }}">@lang('Utama')</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}" class="theme-cl">@lang('Dashboard')</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="dsd-boxed-widget py-5 px-4 bg-danger rounded">
                            <h2 class="ft-medium mb-1 fs-xl text-light count">{{ $active_listings }}</h2>
                            <p class="p-0 m-0 text-light fs-md">@lang('Senarai Aktif')</p>
                            <i class="lni lni-empty-file"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="dsd-boxed-widget py-5 px-4 bg-success rounded">
                            <h2 class="ft-medium mb-1 fs-xl text-light count">{{ $view_listings }}</h2>
                            <p class="p-0 m-0 text-light fs-md">@lang('Lihat Senarai')</p>
                            <i class="lni lni-eye"></i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="dsd-boxed-widget py-5 px-4 bg-warning rounded">
                            <h2 class="ft-medium mb-1 fs-xl text-light count">{{ $total_reviews }}</h2>
                            <p class="p-0 m-0 text-light fs-md">@lang('Dalam Proses')</p>
                            <i class="lni lni-comments"></i>
                        </div>
                    </div>
                    
                </div>

                

            <!-- footer -->
            <div class="row">
                <div class="col-md-12">
                    <div class="py-3">
                        @php
                            echo $gs->copyright;
                        @endphp
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- ======================= dashboard Detail End ======================== -->

@endsection

@push('js')
    <!-- Morris.js charts -->
    <script src="{{ asset('assets/front/js/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('assets/front/js/plugins/morris.js/morris.min.js')}}"></script>

    <!-- Custom Chart JavaScript -->
    <script src="{{ asset('assets/front/js/plugins/dashboard-2.js')}}"></script>
    <!-- ============================================================== -->

    <script>
      'use strict';

      function myFunction() {
        var copyText = document.getElementById("cronjobURL");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
        $.notify("Referral url copied", "info");
    }
    </script>
@endpush
