@extends('layout')


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
