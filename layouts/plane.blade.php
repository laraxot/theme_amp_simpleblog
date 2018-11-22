<!DOCTYPE html>
<html amp='amp' lang="{{ \App::getLocale() }}">
@section('htmlheader')
	@include('pub_theme::layouts.partials.htmlheader')
@show
<body>

	@yield('body')

@section('scripts')
	@include('pub_theme::layouts.partials.scripts')
@show
</body>
</html>
