@extends('layout')

@section('slider')
<script type="text/javascript" src="{{asset('assets/js/jquery.cslider.js')}}"></script>
<script type="text/javascript">
  $(function() {
    $('#da-slider').cslider();
  });
</script>

<div id="da-slider" class="da-slider">

  @foreach ($ms_list as $ms_item)
  	<div class="da-slide">
  		<h2>{{$ms_item->title or 'Product Title'}}</h2>
  		<p>{{$ms_item->remark or 'Description not available'}}</p>
  		<a href="details/{{$ms_item->id or '0'}}" class="da-link">shop now</a>
  		<div class="da-img" ><img style="max-height: 320px;" src="{{asset('images/uploads/products/')}}/{{$ms_item->photo or 'noimage.jpg'}}" alt="Photo" /></div>
  	</div>
  @endforeach

	<nav class="da-arrows">
		<span class="da-arrows-prev"></span>
		<span class="da-arrows-next"></span>
	</nav>
</div>

@endsection



@section('slider_small')

<!-- Owl Carousel Assets -->
<link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
<!-- Owl Carousel Assets -->
<!-- Prettify -->
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script>
$(document).ready(function() {

  $("#owl-demo").owlCarousel({
    items : 4,
    lazyLoad : true,
    autoPlay : true,
    navigation : true,
    navigationText : ["",""],
    rewindNav : false,
    scrollPerPage : false,
    pagination : false,
    paginationNumbers: false,
  });

});
</script>
<!-- //Owl Carousel Assets -->
<!-- start top_js_button -->
<script type="text/javascript" src="{{asset('assets/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/easing.js')}}"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
  $(".scroll").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
  });
});
</script>

<div class="wrap">

	<div id="owl-demo" class="owl-carousel">

    @foreach ($ss_list as $ss_item)
        <div class="item" onclick="location.href='details/{{$ss_item->id}}';">
          <div class="cau_left" style="text-align:center;padding-top:4px;" >
            <img class="lazyOwl" data-src="{{asset('images/uploads/products/')}}/{{$ss_item->photo or 'noimage.jpg'}}" alt="Lazy Owl Image">
          </div>
          <div class="cau_left">
            <!--<a href="details/{{$ss_item->id or '0'}}" class="btn">shop</a>-->
            <h4><a style="padding:0px;" href="details/{{$ss_item->id or '0'}}">{{$ss_item->title or 'Product Title'}}</a></h4>
          </div>
        </div>
    @endforeach

	</div>
	<!----//End-img-cursual---->
</div>
@endsection



@section('featured')

<div class="main_bg1">
<div class="wrap">
  <div class="main1">
    <h2>featured products</h2>
  </div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
  <div class="main">
    <!-- start grids_of_3 -->
    @for ($i = 0; $i < count($product_list); $i+=3)
      <div class="grids_of_3">
        @for ($j = 0; $j < 3; $j++)
          @if ( $i + $j >= count($product_list) )
            <?php break; ?>
          @endif
            <div class="grid1_of_3">
              <a href="details/{{$product_list[$i+$j]->id}}">
                <img src="{{asset('images/uploads/products/')}}/{{$product_list[$i+$j]->photo or 'noimage.jpg'}}" alt="Photo" style="height:220px;"/>
                <h3>{{ $product_list[$i+$j]->title or 'N/A' }}</h3>
                <div class="price">
                  <h4>BDT {{ $product_list[$i+$j]->price or '0' }}<span>View</span></h4>
                </div>
                <span class="b_btm"></span>
              </a>
            </div>
        @endfor
        <div class="clear"></div>
      </div>
    @endfor
    <!-- end grids_of_3 -->
  </div>
</div>
</div>

@endsection
