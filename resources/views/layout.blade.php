<!DOCTYPE HTML>
<html>
<head>
<title>Knock | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- start slider -->
<link href="{{asset('assets/css/slider.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('assets/js/modernizr.custom.28468.js')}}"></script>
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
</head>

<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href=" "><img src="{{asset('assets/images/logo.png')}}" alt=""/> </a>
		</div>
		<div class="h_icon">
		<ul class="icon1 sub-icon1">
			<li><a class="active-icon c1" href="#"><i>0.0</i></a>
				<ul class="sub-icon1 list">
					<li><h3>shopping cart empty</h3><a href=""></a></li>
					<li><p>if items in your wishlit are missing, <a href="contact">contact us</a> to view them</p></li>
				</ul>
			</li>
		</ul>
		</div>
		<div class="h_search"  style="margin-left:auto;margin-right:auto;margin-top: 22px;">
    		<form>
    			<input type="text" value="">
    			<input type="submit" value="">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li><a href="{{url('/home')}}">Home</a></li> |
				<li><a href="#">Categories</a></li> |
        <li><a href="{{url('/featured')}}">Featured Items</a></li> |
        <li><a href="{{url('/upcoming')}}">Upcoming Items</a></li> |
				<li><a href="#">Services</a></li> |
				<li><a href="{{url('/contact')}}">Contact</a></li>
			</ul>
		</div>
		<div class="top-nav">
        <nav class="nav">
  	    <a href="#" id="w3-menu-trigger"> </a>
            <ul class="nav-list" style="">
      	        <li class="nav-item"><a href="{{url('/home')}}">Home</a></li>
    						<li class="nav-item"><a href="#">Categories</a></li>
                <li class="nav-item"><a href="{{url('/featured')}}">Featured Items</a></li>
                <li class="nav-item"><a href="{{url('/upcoming')}}">Upcoming Items</a></li>
    						<li class="nav-item"><a href="#">Services</a></li>
    						<li class="nav-item"><a href="{{url('/contact')}}">Contact</a></li>
            </ul>
        </nav>
        <div class="search_box">
  				<form>
  			     <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
  		    </form>
  			</div>
        <div class="clear"> </div>
        <script src="{{asset('assets/js/responsive.menu.js')}}"></script>
    </div>
    <div class="clear"></div>
</div>
</div>
</div>


<!-- start dynamic sections -->
@yield('slider')
@yield('slider_small')
@yield('featured')
@yield('upcoming')
@yield('contact')
@yield('register')
@yield('product_details')
<!-- end dynamic sections -->


<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<!-- start grids_of_4 -->
		<div class="grids_of_4" style="text-align:center;">
			<div class="grid1_of_4">
				<h4>Spotlight</h4>
				<ul class="f_nav">
					<li><a href="">Offers</a></li>
					<li><a href="">Promotions</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>Terms</h4>
				<ul class="f_nav">
					<li><a href="">Terms and Conditions</a></li>
					<li><a href="">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>Partners</h4>
				<ul class="f_nav">
					<li><a href="">Backslash 471</a></li>
					<li><a href="">Knock Team</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>quick links</h4>
				<ul class="f_nav">
					<li><a target="_blank" href="http://www.facebook.com/knockbd">Facebook</a></li>
					<li><a target="_blank" href="http://www.twitter.com/knockbd">Twitter</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<!-- start footer -->
<div class="footer_bg1">
<div class="wrap">
	<div class="footer">
		<!-- scroll_top_btn -->
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
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="copy">
			<p class="link">Knock &copy;  All rights reserved | 2016</p>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</body>
</html>
