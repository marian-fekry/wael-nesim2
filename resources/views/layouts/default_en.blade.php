<html>
<head>
 @include('inculdes.head_en')

</head>
<body data-rsssl=1 class="home page-template-default page page-id-3733 _masterslider _msp_version_3.2.7 woocommerce-no-js header-style-1">
    <div class="body-wrapper  float-menu" data-home="index.html">

@include('inculdes.header_en')


<!---start our content --->
<div class="content-wrapper">
  @yield('content')
  <div class="clear"></div>
</div>
<!-- start footer--->
@include('inculdes.footer_en')

    </div>
    @include('inculdes.foot_en')
</body>

</html>
