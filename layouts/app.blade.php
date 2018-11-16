@extends('pub_theme::layouts.plane')
@section('body')
	{{-- da parametrizzare.. o meglio mettere i dati in metatags  
	@include('pub_theme::layouts.google_amps.google_analytics')
	--}}
	<div id='top'></div>
	<div id='outer-wrapper'>
		@include('pub_theme::layouts.partials.mainheader')
		<div id='gadget-horizontal'>
			<div class='Gadgets-wiget no-items section' id='Gadgets-wiget'></div>
		</div>
		<div class='clear'></div>
		<div class='row' id='content-wrapper'>
			<div class='clear'></div>
			<div id='main-wrapper' role='main'>
				@yield('content')
			</div>
			@include('pub_theme::layouts.partials.sidebar')
			<div class='clear'></div>
		</div>
		<!-- end content-wrapper -->
		<div class='clear'></div>
		@include('pub_theme::layouts.partials.footer')
	</div>
	</div>
	<amp-user-notification id='amp-user-notification1' layout='nodisplay'>
		This is an amp-user-notification. It uses local storage to store the dismissed state.
		<button on='tap:amp-user-notification1.dismiss'>Aceptar</button>
	</amp-user-notification>
@endsection