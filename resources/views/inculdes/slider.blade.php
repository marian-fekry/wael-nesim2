<!-----start carousel --->
<div class="relative arabic">
<div id="carouselExampleIndicators" class="carousel slide carousel-fade d-sm-block  d-none" data-ride="carousel">
<div class="carousel-inner">
@foreach (Site::slider() as $i=>$silde)
@if(count(Site::slider()) >= 1)
<div class="carousel-item {{($i==0)?'active':''}} h">
<img class="d-block w-100 " src="{{url('/public/uploads/')}}/{{ $silde->image}}" alt="1 slide">
</div>
@endif
@endforeach
</div>
</div>
<h1  class="wow fadeInUp top abs-h1 d-sm-block  d-none" > 
<img src="{{url('/public/img/logo.png')}}" width="200" height="200px"><br>
أسهل طريقة للحجز

</h1>
<div class="abs w-100  ">
<div class="container bg-w ">
<div  class="pad-10">
<h1 class="col-12 c-b">إحجز الأن </h1> 

<form class="row" action="{{ route('search') }}">
<select class="col-md-3 col-sm-6 col-12" name="category_id" style="background:#fff !important">
<option value="">إختر التخصص</option>
@foreach(Site::category() as $row_cat)
<option value="{{$row_cat->id}}" <?= (isset($_GET['category_id']) and $_GET['category_id'] == $row_cat->id) ? 'selected' : '' ?> >{{$row_cat->name_ar}}</option>
@endforeach
</select>

<select id="city_id" name="city_id" class="col-md-2 col-sm-6 col-12" style="background:#fff !important">
<option value="">إختر المحافظة</option>
@foreach(Site::city() as $row_city)
<option value="{{$row_city->id}}"  <?= (isset($_GET['city_id']) and $_GET['city_id'] == $row_city->id) ? 'selected' : '' ?> >{{$row_city->name}}</option>
@endforeach
</select>
 <select class="col-md-2 col-sm-6 col-12" id="region_id" name="region_id"  style="background:#fff !important">
<option value=""> إختر المنطقة </option>
<option value=""> إختر المحافظة أولا </option>
</select>
<input type="text"  name="keyword" value="<?= (isset($_GET['keyword']) and $_GET['keyword'] ) ? $_GET['keyword'] : '' ?>"   placeholder="أكتب أسم المكان" class="col-md-2 col-sm-6 col-12">
<button type="submit" class="btn  col-md-3 col-sm-6 col-12  pad-10" style="font-size: 18;"><span class="pad-10" style="background: inherit"> <i class="fas fa-search "></i> </span>     إبحث </button>
</form>


</div>
</div>

</div>
</div>
<!--- ---->