@extends('layout')


@section('product_details')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/productviewgallery.css')}}" media="all" />
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/cloud-zoom.1.0.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.fancybox-buttons.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.fancybox-thumbs.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/productviewgallery.js')}}"></script>
<!-- start top_js_button -->
<script type="text/javascript" src="{{asset('assets/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/easing.js')}}"></script>

<div class="main_bg">
<div class="wrap">
  <div class="main">
  <!-- start content -->
  <div class="single">
      <!-- start span1_of_1 -->
      <div class="left_content">
      <div class="span1_of_1">
        <!-- start product_slider -->
        <div class="product-view">
            <div class="product-essential">
                <div class="product-img-box">
                <!-- Preview Thumbnails | NOT IMPLEMENTED -->
           <!--  <div class="more-views" style="float:left;">
                <div class="more-views-container">
                <ul>
                  <li>
                    <a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
                    <img src="" src_main=""  title="" alt="" /></a>
                  </li>
                </ul>
                </div>
            </div> -->
            <div class="product-image">
                <a class="cs-fancybox-thumbs cloud-zoom" rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5" data-fancybox-group="thumb" href="{{asset('images/uploads/products/')}}/{{$product->photo or 'noimage.jpg'}}" title="{{$product->title or 'Product Title'}}" alt="{{$product->title or 'Product Title'}}">
                    <img src="{{asset('images/uploads/products/')}}/{{$product->photo or 'noimage.jpg'}}" alt="{{$product->title or 'Product Title'}}" title="{{$product->title or 'Product Title'}}" />
                </a>
           </div>
        </div>
        </div>
        </div>
        <!-- end product_slider -->
      </div>
      <!-- start span1_of_1 -->
      <div class="span1_of_1_des">
          <div class="desc1">
          <h3>{{$product->title or 'Product Title'}}</h3>
          <p>{{$product->remark or ' '}}</p>
          <h5>BDT {{$product->price or '0'}}</h5>
          <div class="available">
            <h4>Available Options :</h4>
            <ul>
              <!-- <li>Color:
                <select>
                <option>Silver</option>
                <option>Black</option>
                <option>Dark Black</option>
                <option>Red</option>
              </select></li>
              <li>Size:
                <select>
                  <option>L</option>
                  <option>XL</option>
                  <option>S</option>
                  <option>M</option>
                </select>
              </li> -->
              <li>Quality:
                <select>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </li>
            </ul>
            <div class="btn_form">
              <form>
                <input type="submit" value="add to cart" title="" />
              </form>
            </div>
            &nbsp;&nbsp;<span class="span_right"><a href="#">login to add wishlist</a></span>
            <div class="clear"></div>
          </div>
          <!-- <div class="share-desc">
            <div class="share">
              <h4>Share Product :</h4>
              <ul class="share_nav">
                <li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
                <li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
                <li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
                <li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
                </ul>
            </div>
            <div class="clear"></div>
          </div> -->
           </div>
          </div>
          <div class="clear"></div>
          <!-- start tabs -->
            <section class="tabs">
              <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked">
              <label for="tab-1" class="tab-label-1">Overvew</label>

              <!--<input id="tab-2" type="radio" name="radio-set" class="tab-selector-2">-->
              <!--<label for="tab-2" class="tab-label-2">Tab 2</label>-->

              <!--<input id="tab-3" type="radio" name="radio-set" class="tab-selector-3">-->
              <!--<label for="tab-3" class="tab-label-3">Tab 3</label>-->

              <div class="clear-shadow"></div>

              <div class="content" style="min-height:200px;">
                <div class="content-1">
                  <p class="para">{{$product->remark or 'Description not available'}}</p>
                  <div class="clear"></div>
                </div>
                <div class="content-2">
                  <p class="para">Data</p>
                </div>
                <div class="content-3">
                  <p class="para">Data</p>
                  <div class="clear"></div>
                </div>
              </div>
            </section>
              <!-- end tabs -->
          </div>
          <!-- start sidebar -->
       <div class="left_sidebar">
          <div class="sellers">
            <h4>Best Sellers</h4>
            <div class="single-nav">
                      <ul>
                        <li><a href="#">Best Selling Item 1</a></li>
                        <li><a href="#">Best Selling Item 2</a></li>
                        <li><a href="#">Best Selling Item 3</a></li>
                      </ul>
                    </div>
              <div class="banner-wrap bottom_banner color_link">
                <a href="#" class="main_link">
                <figure><img src="{{asset('assets/images/delivery.png')}}" alt=""></figure>
                <h5><span>Free Shipping</span><br> on orders over 500BDT.</h5><p>This offer is valid on all our store items.</p></a>
             </div>
          </div>
        </div>
          <!-- end sidebar -->
                <div class="clear"></div>
         </div>
  <!-- end content -->
  </div>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function() {

    var defaults = {
        containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear'
    };


    $().UItoTop({ easingType: 'easeOutQuart' });

  });
</script>


@endsection
