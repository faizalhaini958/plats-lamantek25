<footer class="light-footer skin-light-footer style-2">
    <div class="footer-middle">
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="footer_widget">
                        <img src="{{ asset('assets/images/'.$gs->footer_logo)}}" class="img-footer large mb-2" alt="" />
                        <!--    
                        <div class="address mt-2">
                            {{ $ps->street }}
                        </div>
                        <div class="address mt-3">
                            {{ $ps->phone }}<br>{{ $ps->contact_email }}
                        </div>
                        <div class="address mt-2">
                            <ul class="list-inline">
                                @if ($sociallinks)
                                    @foreach ($sociallinks as $key => $social)
                                        @if($social->status)
                                            <li class="list-inline-item">
                                                <a href="{{ $social->link }}" class="theme-cl">
                                                    <i class="{{ $social->icon }}"></i>
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                              
                        </div>--> 
                    </div> 
                </div>

                <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">@lang('Capaian Pantas')</h4>
                        <ul class="footer-menu">
                            <li><a href="{{ route('front.listing') }}">@lang('Tentang PLATS')</a></li>
                            <li><a href="{{ route('front.plans') }}">@lang('Media')</a></li>
                            <li><a href="{{ route('front.blog') }}">@lang('Hubungi')</a></li>
                        
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12">
                    <div class="footer_widget">
                        <h4 class="widget_title">@lang('Panduan')</h4>
                        <ul class="footer-menu">
                            <li><a href="{{ route('front.listing') }}">@lang('FAQ')</a></li>
                            <li><a href="{{ route('front.plans') }}">@lang('Bagaimana Daftar')</a></li>
                            <li><a href="{{ route('front.blog') }}">@lang('Set Semula Kata Laluan')</a></li>
                        
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom br-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <p class="mb-0">
                        @php
                            echo $gs->copyright;
                        @endphp
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
