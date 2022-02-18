<section class="slider_section">
<div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
<ol class="carousel-indicators">
<?php $s=0;?>
@if(Site::silders())
@foreach(Site::silders() as $silder)
<li data-target="#myCarousel" data-slide-to="{{$s}}" class="@if($s==0) active @endif"></li>
<?php $s++ ; ?>
@endforeach
@endif

</ol>
<div class="carousel-inner">
@php $i=0; @endphp
@foreach(Site::silders() as $silder)
<div class="carousel-item @if($i==0) active @endif " @if($i==1)preload="none" @endif>
<img src="{{url('/public/storage/'.$silder->company_home_slider_web)}}" class="d-block w-100" alt="{{$silder->id}}">
<div class="container">
<div class="carousel-caption relative">
<div class="row justify-content-center mb-4">
<div class="col-md-8 text-center">
<!--<h2 class="" data-aos="fade-up">مرحبا بك في <strong><img class="logo mr-auto" src="{{url('/public/assets/img/ZAGEL.png')}}" alt=""></strong ></h2>-->
<p class="p" style="font-weight:bold" preload="none" data-aos="fade-in" data-aos-delay="1">{{ \Illuminate\Support\Str::limit($silder->translate('ar')->des, 150, $end='...') }}</p>
</div>
</div>
<div class="form-search-wrap mb-3" preload="none" data-aos="fade-in" data-aos-delay="1">
<form method="get" action="{{ route('search-home') }}">
<div class="row align-items-center">
<div class="col-lg-12  col-xl-10">
<input type="text" preload="none" class="form-control rounded" placeholder=" ماذا تبحث عن؟">
</div>

<div class="col-lg-12 col-xl-2 ml-auto text-right">
<input type="submit" preload="none" class="btn btn-light btn-block rounded" value="بحث">
</div>

</div>
</form>
</div>-
</div>
</div>
</div>
@php $i++ @endphp
@endforeach
</div>

{{--        <div class="carousel-inner">--}}
{{--            @if(Site::silders())--}}
{{--                @php $i=1; @endphp--}}
{{--                @foreach(Site::silders() as $silder)--}}
{{--                    @if($silder->company_home_slider_web!='')--}}
{{--                    <div class="carousel-item @if($i==1) active @endif" @if($i==1) preload="none" @endif>--}}
{{--                        <img src="{{url('/public/storage/'.$silder->company_home_slider_web)}}" class="d-block w-100" alt="...">--}}
{{--                        <div class="container">--}}
{{--                            <div class="carousel-caption relative">--}}
{{--                                <div class="row justify-content-center mb-4">--}}
{{--                                    <div class="col-md-8 text-center">--}}
{{--                                        <h2 class="" data-aos="fade-up">Welcome To <strong><img class="logo mr-auto" src="{{url('/public/assets/img/ZAGEL.png')}}" alt=""></strong ></h2>--}}
{{--                                        <p class="p" preload="none" data-aos="fade-in" data-aos-delay="1">{{ \Illuminate\Support\Str::limit($silder->des, 150, $end='...') }}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-search-wrap mb-3" preload="none" data-aos="fade-in" data-aos-delay="1">--}}
{{--                                    <form method="post">--}}
{{--                                        <div class="row align-items-center">--}}
{{--                                            <div class="col-lg-12  col-xl-10">--}}
{{--                                                <input type="text" preload="none" class="form-control rounded" placeholder="What are you looking for?">--}}
{{--                                            </div>--}}

{{--                                            <div class="col-lg-12 col-xl-2 ml-auto text-right">--}}
{{--                                                <input type="submit" preload="none" class="btn btn-light btn-block rounded" value="Search">--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endif--}}
{{--                    @php $i++ @endphp--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--        </div>--}}


<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>

</section>
