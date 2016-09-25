@extends('layout')


@section('contact')

<div class="main_bg">
<div class="wrap">
<div class="main">
     <div class="contact">
          <div class="contact_info">
            <h2>get in touch</h2>
                <div class="map">
                  <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:250px;width:100%;'><div id='gmap_canvas' style='height:250px;width:100%;'></div><div><small><a href="http://embedgooglemaps.com"> embed google map </a></small></div><div><small><a href="http://freedirectorysubmissionsites.com">directory submission sites</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(23.732306, 90.385228),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(23.732306, 90.385228)});infowindow = new google.maps.InfoWindow({content:'<strong>Knock</strong><br>Nilkhet, Dhaka, Bangladesh<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                </div>
              </div>
          <div class="contact-form">
              <h2>Contact Us</h2>
              <form method="post" action="?">
                <div>
                  <span><label>Name</label></span>
                  <span><input name="userName" type="text" class="textbox"></span>
                </div>
                <div>
                  <span><label>E-mail</label></span>
                  <span><input name="userEmail" type="text" class="textbox"></span>
                </div>
                <div>
                  <span><label>Mobile</label></span>
                  <span><input name="userPhone" type="text" class="textbox"></span>
                </div>
                <div>
                  <span><label>Subject</label></span>
                  <span><textarea name="userMsg"> </textarea></span>
                </div>
               <div>
                  <span><input type="submit" class="" value="Submit us"></span>
              </div>
              </form>
            </div>
          <div class="clear"></div>
        </div>
    </div>
</div>
</div>

@endsection
