@extends('layouts.default_en')
@section('title', 'Home')

@section('content')
<div class="gdlr-content">

    <!-- Above Sidebar Section-->

    <!-- Sidebar With Content Section-->
    <div class="with-sidebar-wrapper">
        @if(count($silders)>0)
        <section id="content-section-1">
            <div class="gdlr-full-size-wrapper gdlr-show-all" id="div_d303_0">
                <div class="gdlr-master-slider-item gdlr-slider-item gdlr-item" id="div_d303_1">
                    <!-- MasterSlider -->
                    <div id="P_slider_1" class="master-slider-parent ms-parent-id-2">

                        <!-- MasterSlider Main -->
                        <div id="slider_1" class="master-slider ms-skin-default">
                            @foreach ($silders as $silder)
                            <div class="ms-slide" data-delay="7" data-fill-mode="fill">
                                <img src="{{url('/public/storage/'.$silder->image)}}" alt="" title="" data-src="upload/slider-1.jpg" />

                                <a href="{{ $silder->link }}" target="_blank" class="ms-layer ms-btn ms-btn-box ms-btn-n msp-preset-btn-160" data-duration="600" data-delay="1062" data-ease="easeOutQuint" data-type="button" data-offset-x="1035" data-offset-y="312" data-origin="tl" data-position="normal">Learn More</a>

                                <div class="ms-layer  msp-cn-2-3" style="width:500px;" data-effect="t(true,n,n,500,n,n,n,n,n,n,n,n,n,n,n)" data-duration="562" data-delay="525" data-ease="easeOutQuint" data-offset-x="626" data-offset-y="197" data-origin="tl" data-position="normal">
                                    {{ $silder->des }}</div>

                                <div class="ms-layer  msp-cn-2-2" style="" data-effect="t(true,150,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="525" data-ease="easeOutQuint" data-offset-x="703" data-offset-y="101" data-origin="tl" data-position="normal">
                                    {{ $silder->title }}</div>

                            </div>
                            @endforeach

                        </div>
                        <!-- END MasterSlider Main -->

                    </div>
                    <!-- END MasterSlider -->



                </div>
                <div class="clear"></div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </section>
        @endif
        <section id="content-section-3">
            <div class="gdlr-color-wrapper  gdlr-show-all no-skin" id="div_da39_0">
                <div class="container">
                    @foreach ($weights as $weight)
                    <div class="four columns">
                        <div class="gdlr-ux column-service-ux">
                            <div class="gdlr-item gdlr-column-service-item gdlr-type-1" id="div_da39_1">
                                <div class="column-service-image"><img src="{{url('/public/storage/'.$silder->image)}}" alt="" width="500" height="246" /></div>
                                <div class="column-service-content-wrapper">
                                    <h3 class="column-service-title">{{ $silder->title }}</h3>
                                    <div class="column-service-content gdlr-skin-content">
                                        <p>{{ $silder->des }}</p>
                                        <div class="column-service-link"><a href="{{ $silder->link }}">Learn More<i class="fa fa-angle-double-right icon-double-angle-right" ></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <section id="content-section-4">
            <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin" id="gdlr-parallax-wrapper-1" data-bgspeed="0.2" >
                <div class="container">
                    <div class="gdlr-title-item">
                        <div class="gdlr-item-title-wrapper gdlr-item pos-left ">
                            <div class="gdlr-item-title-head">
                                <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">We Have Story Of Us For You To Discover</h3>
                                <div class="clear"></div>
                            </div>
                            <div class="gdlr-item-title-divider"></div><a class="gdlr-item-title-link" href="#">Read More</a></div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <section id="content-section-5">
            <div class="gdlr-color-wrapper  gdlr-show-all no-skin" id="div_da39_4">
                <div class="container">
                    <div class="gdlr-item gdlr-tab-item vertical">
                        <div class="tab-title-wrapper">
                            <h4 class="tab-title active"><span>{{ $aboutParts['0']->title }}</span></h4>
                            <h4 class="tab-title"><span>{{ $aboutParts['1']->title }}</span></h4>
                            <h4 class="tab-title"><span>{{ $aboutParts['2']->title }}</span></h4>
                            <h4 class="tab-title"><span>{{ $aboutParts['3']->title }}</span></h4></div>
                        <div class="tab-content-wrapper">
                            @php $i=0; @endphp
                            @foreach ( $aboutParts as $part)
                            <div class="tab-content @if($i==0) active @endif">
                                <div class="gdlr-service-shortcode">
                                    <div class="gdlr-service-shortcode-image"><img src="{{url('/public/storage/'.$part->image)}}" alt="" /></div>
                                    <div class="gdlr-service-shortcode-content-wrapper">
                                        <h3 class="gdlr-service-shortcode-title">{{ $part->title }}</h3>
                                        <div class="gdlr-service-shortcode-content">{{ $part->des }}
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            @php $i++; @endphp
                            @endforeach

                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <section id="content-section-6">
            <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-homepage-project" id="gdlr-parallax-wrapper-2" data-bgspeed="0" >
                <div class="container">
                    <div class="portfolio-item-wrapper type-modern-portfolio" >
                        <div class="gdlr-ajax-info" data-num-fetch="8" data-num-excerpt="20" data-orderby="date" data-order="desc" data-pagination="disable" data-thumbnail-size="blog-grid" data-port-id="div_da39_5" data-port-size="4" data-port-layout="carousel" data-ajax="https://demo.goodlayers.com/megaproject/wp-admin/admin-ajax.php" data-category="all"></div>
                        <div class="gdlr-item-title-wrapper gdlr-item pos-left-bold gdlr-nav-container ">
                            <div class="gdlr-item-title-head">
                                <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Our Projects</h3>
                                <div class="clear"></div>
                            </div>

                        <div class="gdlr-item-title-right">
                            <i class="icon-angle-left gdlr-flex-prev"></i>
                            <i class="icon-angle-right gdlr-flex-next"></i>
                        </div>
                        </div>
                        <div class="portfolio-item-holder  gdlr-portfolio-column-4">
                            <div class="gdlr-portfolio-carousel-item gdlr-item">
                                <div class="flexslider" data-type="carousel" data-nav-container="portfolio-item-holder" data-columns="4">
                                    <ul class="slides">
                                        @foreach ($projects as $project)
                                        <li class="gdlr-item gdlr-portfolio-item gdlr-modern-portfolio">
                                            <div class="portfolio-thumbnail gdlr-modern-thumbnail gdlr-image"><img src="{{url('/public/storage/'.$project->image)}}" alt="" width="700" height="450" /><span class="portfolio-overlay">&nbsp;</span><a href="upload/photodune-1221793-office-m.jpg" data-rel="fancybox"><span class="portfolio-icon" ><i class="fa fa-search" ></i></span></a><a href="#"><h3 class="portfolio-title" >{{ $project->title }}</h3></a></div>
                                        </li>
                                        @endforeach



                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </section>

        <section id="content-section-8">
            <div class="gdlr-color-wrapper  gdlr-show-all gdlr-skin-light-grey" id="div_da39_7">
                <div class="container">
                    <div class="gdlr-banner-item-wrapper">
                        <div class="gdlr-item-title-wrapper gdlr-item pos-center gdlr-nav-container ">
                            <div class="gdlr-item-title-head">
                                <h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Our Clients</h3>
                                <div class="clear"></div>
                            </div>
                            <div class="gdlr-item-title-divider"></div>
                            <div class="gdlr-item-title-caption gdlr-skin-info">Many big companies trust in our quality</div>
                            <div class="gdlr-item-title-right"><i class="icon-angle-left gdlr-flex-prev"></i><i class="icon-angle-right gdlr-flex-next"></i></div>
                        </div>
                        <div class="gdlr-banner-images gdlr-item">
                            <div class="flexslider" data-pausetime="7000" data-slidespeed="600" data-effect="fade" data-columns="5" data-type="carousel" data-nav-container="gdlr-banner-images">
                                <ul class="slides">
                                    <li>
                                        <a href="#" data-rel="fancybox" target="_blank"><img src="upload/banner-1.jpg" alt="" width="230" height="117" /></a>
                                    </li>
                                    <li>
                                        <a href="#" data-rel="fancybox" target="_blank"><img src="upload/banner-2.jpg" alt="" width="230" height="117" /></a>
                                    </li>
                                    <li>
                                        <a href="#" data-rel="fancybox" target="_blank"><img src="upload/banner-3.jpg" alt="" width="230" height="117" /></a>
                                    </li>
                                    <li>
                                        <a href="#" data-rel="fancybox" target="_blank"><img src="upload/banner-4.jpg" alt="" width="230" height="117" /></a>
                                    </li>
                                    <li>
                                        <a href="#" data-rel="fancybox" target="_blank"><img src="upload/banner-5.jpg" alt="" width="230" height="117" /></a>
                                    </li>
                                    <li>
                                        <a href="#" data-rel="fancybox" target="_blank"><img src="upload/banner-6.jpg" alt="" width="230" height="117" /></a>
                                    </li>
                                    <li>
                                        <a href="#" data-rel="fancybox" target="_blank"><img src="upload/banner-7.jpg" alt="" width="230" height="117" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </section>
        <section id="content-section-2">
            <div class="gdlr-color-wrapper  gdlr-show-all no-skin" id="div_da39_8">
                <div class="container">
                    <div class="gdlr-stunning-text-ux gdlr-ux">
                        <div class="gdlr-item gdlr-stunning-text-item" id="div_da39_9">
                            <div class="gdlr-stunning-text-overlay"></div>
                            <h2 class="stunning-text-title">We provide fast and affordable service for your projects. Hire us!</h2><a class="stunning-text-button" href="#" target="_blank">Get the quote<i class="fa fa-angle-double-right icon-double-angle-right"></i></a></div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </section>
    </div>

    <!-- Below Sidebar Section-->

</div>

@stop
