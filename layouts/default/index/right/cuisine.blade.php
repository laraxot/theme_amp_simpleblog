@php
	$restaurant_curr=collect($params)->where('type','restaurant')->last();
	//$openingHours=$restaurant_curr->openingHours;
@endphp
@if(isset($restaurant_curr))
	@include($view_default.'.widgets.cart_items',['cart_items'=>$restaurant_curr->cartItems])
	@include($view_default.'.right.restaurant_opening_hours',['restaurant_curr'=>$restaurant_curr])
@endif
{{--
@include($view_default.'.widgets.opening_hours',['openingHours'=>$openingHours])
--}}