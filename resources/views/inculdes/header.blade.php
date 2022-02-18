<?php
$action = Route::getCurrentRoute()->getName();
$uri = request()->path();
$pathUrl = config('app.url');
$pathUrl =    str_replace('public/', '', $pathUrl);
?>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
<div class="container  align-items-center">  <!-------d-flex-------->


<img class="logo mr-auto" style="margin-top: -2%;" src="{{url('/public/storage/settings/June2021/7IyxiqLRr9owLpQuWm9W.jpg')}}" alt=""><a href="index.html"> </a>


<nav class="main-nav d-none d-lg-block" style="float: right;" >
<ul>
<li class="active"><a href="{{url('/')}}?lang=ar">الصفحة الرئيسية</a></li>
@if($action == 'home')
<li class="ADS"><a href="{{url('/')}}?lang=ar#Sections">الاعلانات المبوبة</a></li>
@else
<li class="ADS"><a href="{{url('/')}}?lang=ar#Ads">الاعلانات المبوبة</a></li>
@endif
<li class=""><a href="{{url('/')}}?lang=ar#Sections">الاقسام</a>
<!--- <ul>
<li><a href="#">Cars</a></li>
<li><a href="#">Air conditioning</a></li>
<li><a href="#">Spare Parts</a></li>
<li><a href="#">Services</a></li>


</li>
</ul>-->
</li>

@if($action == 'home')
<li><a href="#Companies">شركات للبيع</a></li>
@else
<li><a href="{{url('/')}}?lang=ar#Companies">شركات للبيع</a></li>
@endif

@if(!Auth::user())
<li class="ml-xl-3 login"><a href="{{url('/login')}}?lang=ar"><span class=" pl-xl-4"></span>تسجيل دخول</a></li>
<li class="ml-xl-3 login"><a href="{{url('/register')}}?lang=ar"><span class=" pl-xl-4"></span>تسجيل كمستخدم</a></li>
<li class="ml-xl-3 login"><a href="{{url('/register-company')}}?lang=ar"><span class=" pl-xl-4"></span>تسجيل كشركة</a></li>

@else
<li><a href="{{url('/user-profile')}}?lang=ar">حسابي</a></li>
 
<li><a href="{{url('/user-profile')}}?lang=ar">تعديل بياناتى</a></li>
<li><a href="{{url('user-ads')}}?lang=ar">اعلاناتى</a></li>
<li><a href="{{url('/add-ad')}}?lang=ar">اضافة اعلان </a></li>
<li><a href="{{url('logout')}}?lang=ar">خروج</a></li>
@endif
@if($uri=='/')
<li ><a href="{{url('/').$uri}}" ><span class=" ">En</span></a></li>
@else
<li ><a href="{{url('/').'/'.$uri}}" ><span class=" ">En</span></a></li>
@endif
</ul>
</nav><!-- .main-nav-->

</div>

</header><!-- End Header -->
