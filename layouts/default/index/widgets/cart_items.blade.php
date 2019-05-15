<div class="widget widget-cart">
	<div class="widget-heading">
		<h3 class="widget-title text-dark">
			Your Shopping Cart
		</h3>
		<div class="clearfix"></div>
	</div>
	{{--
	@foreach($cart_items as $k=>$cart_item)
	<div class="row order-row {{ $k%2?'bg-white':'' }} ">
		<div class="widget-body">
			<div class="title-row">{{ $cart_item->pivot->related->title }}
				<a href="#">
					<i class="fa fa-trash pull-right"></i>
				</a>
			</div>
			<div class="form-group row no-gutter">
				<div class="col-xs-8">
					<!--
					<select class="form-control b-r-0" id="exampleSelect1">
						<option>Size SM</option>
						<option>Size LG</option>
						<option>Size XL</option>
					</select>
					-->
					&euro; {{ money_format($cart_item->pivot->price,2) }}
				</div>
				<div class="col-xs-4">
					<input class="form-control col-md-5" type="number" value="2" id="example-number-input"> 
				</div>
			</div>
		</div>
	</div>
	@endforeach
	--}}
	<table class="table">
		
	@foreach($cart_items as $k=>$cart_item)
	<tr>
		<td>{{ $cart_item->pivot->related->title }} <a href="#"><i class="fa fa-trash pull-right"></i></a></td>
		<td> &euro;{{ money_format($cart_item->pivot->price,2) }}</td>
		<td>{{-- <input class="form-control" type="number" value="" id="example-number-input"> --}}
			{{ $cart_item->qty}}
		</td>
		
	</tr>
	@endforeach
	</table>
	{{--
	<div class="widget-delivery clearfix">
		<form>
			<div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
				<label class="custom-control custom-radio">
				<input id="radio4" name="radio" type="radio" class="custom-control-input" checked=""> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
			</div>
			<div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
				<label class="custom-control custom-radio">
				<input id="radio3" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
			</div>
		</form>
	</div>
	--}}
	<div class="widget-body">
		<div class="price-wrap text-xs-center">
			<p>TOTAL</p>
			{{--
			<h3 class="value"><strong>$ 25,49</strong></h3>
			<p>Free Shipping</p>
			<button onclick="location.href='checkout.html'" type="button" class="btn theme-btn btn-lg">Checkout</button>
			--}}
		</div>
	</div>
</div>