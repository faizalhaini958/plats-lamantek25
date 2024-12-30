@extends('layouts.front')

@push('css')

@endpush

@section('content')
    @if (in_array('Banner', $home_modules))
        <!-- ======================= Home Banner ======================== -->
        <div class="home-banner margin-bottom-0" style="background:#fff url({{ asset('assets/images/'.$ps->hero_photo) }}) no-repeat;" data-overlay="0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="banner_caption text-center mb-5">
                            <h1 class="banner_title ft-bold mb-1">{{ $ps->hero_title }}</h1>
                            <p class="fs-md ft-medium">{{ $ps->hero_subtitle }}</p>
                        </div>

                        <div class="Rego-top-cates">
                            <ul>
                                @foreach ($categories as $key=>$data)
                                    <li>
                                        <a href="{{ route('front.listing',['category' => $data->slug]) }}" class="Rego-top-cat-box">
                                            <div class="Rego-tp-ico">
                                                <i class="{{ $data->icon }}"></i>
                                            </div>
                                            <div class="Rego-tp-title">
                                                <h5>{{ $data->name }}</h5>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ======================= Home Banner ======================== -->

        <!-- ======================= Home Search ======================== -->
        <section class="p-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-12 col-md-12 col-12">

                        <div class="Rego-search-shadow">

                            <form class="main-search-wrap fl-wrap" action="{{ route('front.listing') }}" method="GET">
                                <div class="main-search-item">
                                    <span class="search-tag"><i class="lni lni-keyboard"></i></span>
                                    <input type="text" class="form-control radius"name="title"  placeholder="@lang('Apa yang anda ingin cari')? " />
                                </div>
                                    <div class="main-search-button">
                                    <button class="btn full-width theme-bg text-white" type="submit">@lang('Cari')</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Home Search End ======================== -->
    @endif

    @if (in_array('Category', $home_modules))
        <!-- =========================== Listing Category ======================= -->
            <section class="gray middle min">
                <div class="container">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="sec_title position-relative text-center mb-5">
                                <h6 class="text-muted mb-0">{{ $ps->category_title }}</h6>
                                <h2 class="ft-bold">{{ $ps->category_subtitle }}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        @foreach ($categories as $key=>$data)
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="Rego-img-catg-wrap">
                                    <div class="Rego-catg-city">{{ $data->listings->where('status',1)->count()}} @lang('senarai')</div>
                                    <div class="Rego-img-catg-thumb"><a href="{{ route('front.listing',['category' => [$data->slug]]) }}"><img src="{{ asset('assets/images/'.$data->photo) }}" class="img-fluid" alt=""></a></div>
                                    <div class="Rego-img-catg-caption">
                                        <h4 class="fs-md mb-0 ft-medium m-catrio">{{ $data->title }}</h4>
                                        <a href="{{ route('front.listing',['category' => [$data->slug]]) }}" class="Rego-cat-arrow"><i class="lni lni-arrow-right-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
        <!-- =========================== Listing Category End ===================== -->
    @endif

    @if (in_array('Feature Directory', $home_modules))
        <!-- ===========================  Featured Listing ======================= -->
            <section class="space min">
                <div class="container">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="sec_title position-relative text-center mb-5">
                                <h2 class="ft-bold theme-cl">{{ $ps->directory_title }}</h2>
                            </div>
                        </div>
                    </div>

                    <!-- row -->
                    <div class="row justify-content-center">
                        @foreach ($featured_listing as $key=>$listing)
                            <!-- Single -->
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                <div class="Rego-grid-wrap">
                                    <div class="Rego-grid-upper">
                                        <div class="Rego-bookmark-btn">
                                            <button type="button" class="wishList" data-listing="{{ $listing->id }}" data-user={{ auth()->id() }}>
                                                <i class="lni lni-heart{{ $listing->userFavourite(auth()->id(),$listing->id) ? '-filled' : ''}} position-absolute"></i>
                                            </button>
                                        </div>
                                        <div class="Rego-pos ab-left">
                                            <div class="Rego-status open me-2">{{ $listing->openClose($listing->id) }}</div>
                                            @if ($listing->is_feature)
                                                <div class="Rego-featured-tag">@lang('Lokasi Tumpuan')</div>
                                            @endif
                                        </div>
                                        <div class="Rego-grid-thumb">
                                            <a href="{{ route('front.listing.details',$listing->slug) }}" class="d-block text-center m-auto">
                                                <img src="{{ asset('assets/images/'.$listing->photo)}}" class="img-fluid" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="Rego-grid-fl-wrap">
                                        <div class="Rego-caption px-3 py-2">
                                            @if ($listing->user_id == NULL && $listing->admin_id == NULL)
                                                <div class="Rego-author">
                                                    <a href="{{ route('front.author.details','admin') }}">
                                                        <img src="{{ asset('assets/images/'.getAdmin()->photo)}}" class="img-fluid circle" alt="" />
                                                    </a>
                                                </div>
                                            @else
                                                <div class="Rego-author">
                                                    <a href="{{ route('front.author.details',$listing->user->username) }}">
                                                        <img src="{{ asset('assets/images/'.$listing->user->photo)}}" class="img-fluid circle" alt="" />
                                                    </a>
                                                </div>
                                            @endif

                                            <div class="Rego-cates">
                                                <a href="{{ route('front.listing',['category' => $listing->category->slug]) }}">{{ $listing->category->title }}</a>
                                            </div>

                                            <h4 class="mb-0 ft-medium medium">
                                                <a href="{{ route('front.listing.details',$listing->slug) }}" class="text-dark fs-md">
                                                    {{ $listing->name }}
                                                    <span class="verified-badge">
                                                        <i class="fas fa-check-circle"></i>
                                                    </span>
                                                </a>
                                            </h4>
                                            <div class="Rego-middle-caption mt-3">
                                                <div class="Rego-location"><i class="fas fa-map-marker-alt"></i>{{ $listing->real_address }}</div>
                                                <div class="Rego-call"><i class="fas fa-phone-alt"></i>{{ $listing->phone_number }}</div>
                                            </div>
                                        </div>
                                        <div class="Rego-grid-footer py-3 px-3">
                                            @if (count($listing->reviews)>0)
                                                <div class="Rego-ft-first">
                                                    <div class="Rego-rating">
                                                        <div class="Rego-pr-average high">{{ $listing->directoryRatting($listing->id) }}</div>
                                                        <div class="Rego-rates">
                                                            @php
                                                                $rate = ceil($listing->directoryRatting($listing->id));
                                                            @endphp

                                                            @for($i=1; $i<=$rate; $i++)
                                                                <i class="fas fa-star active"></i>
                                                            @endfor

                                                            @for($i=1; $i<=(5-$rate); $i++)
                                                                <i class="fas fa-star"></i>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="Rego-ft-last">
                                                <span class="small">{{ $data->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!-- /row -->

                </div>
            </section>
        <!-- =========================== Featured Listing End ===================== -->
    @endif

 
    

    @if (in_array('Faq', $home_modules))
        <!-- =========================== FAQ Start ======================= -->
            <section>
                <div class="container">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="sec_title position-relative text-center mb-5">
                                <h6 class="text-muted mb-0">FAQ</h6>
                                <h2 class="ft-bold">Soalan Lazim</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-11 col-md-12 col-12">
                            <div id="accordion2" class="accordion">
                                @foreach ($faqs as $key=>$data)
                                    <div class="card">
                                        <div class="card-header" id="h{{$key}}">
                                            <h5 class="mb-0">
                                            <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#ord{{$key}}" aria-expanded="true" aria-controls="ord{{$key}}">
                                            {{ $data->title }}
                                            </button>
                                            </h5>
                                        </div>

                                        <div id="ord{{$key}}" class="collapse {{ $loop->first ? 'show' : ''}}" aria-labelledby="h{{$key}}" data-parent="#accordion2">
                                            <div class="card-body">
                                                {{ $data->details }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        <!-- =========================== FAQ End ===================== -->
    @endif

    @if (in_array('CTAs', $home_modules))
        <!-- ======================= Newsletter Start ============================ -->
        @include('partials.front.cta')
        <!-- ======================= Newsletter Start ============================ -->
    @endif

    <!-- ============================ Footer Start ================================== -->
    @include('partials.front.footer')
    <!-- ============================ Footer End ================================== -->
@endsection

@push('js')
    <script>
        'use strict';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click','.wishList',function(){
            let $this = $(this);
            let listingId = $(this).data('listing');
            let userId = $(this).data('user');
            if(userId == ''){
                window.location.href = mainurl+'/user/login'
            }

            $.ajax({
                method:"POST",
                url: mainurl+'/listing/wishlist',
                data: {
                    listing_id : listingId,
                    user_id : userId
                },
                success:function(data)
                {
                    if(data.success){
                        $this.children().prop('class','');
                        $this.children().prop('class','lni lni-heart-filled  position-absolute');
                        toastr.success(data.success);
                    }else{
                        $this.children().prop('class','');
                        $this.children().prop('class','lni lni-heart  position-absolute');
                        toastr.error(data.error);
                    }
                }

            });

        })

    </script>
@endpush
