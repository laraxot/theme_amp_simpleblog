@extends('pub_theme::layouts.app')
@section('content')
<div id='gadget-horizontal'>
	<div class='Gadget-presentacion no-items section' id='Gadget-presentacion'></div>
</div>
<div id='gadget-horizontal'>
	@include('pub_theme::layouts.widgets.adsense')
</div>
<div class='posts-title'>
	<h2 class='title'>
		<a href='#'>Recent Articles</a>
	</h2>
</div>
<div class='main section' id='main'>
	<div class='widget Blog' data-version='1' id='Blog1'>
		<div class='blog-posts hfeed'>
			@php
				$articles=$article->archive()->paginate(5);
			@endphp
			@foreach($articles as $p)
				@include('pub_theme::layouts.items.article',['row'=>$p])
			@endforeach
			
		</div>
		<div class='blog-pager' id='blog-pager'>
			<span id='blog-pager-older-link'>
				<a class='blog-pager-older-link btn-floating btn-large waves-effect waves-light red' href='https://ampoceanfree.blogspot.com/search?updated-max=2017-01-20T15:50:00-08:00&amp;max-results=11' id='Blog1_blog-pager-older-link' title='Entradas antiguas'>
					<i class='material-icons'>&#58828;</i>
				</a>
			</span>
			<a class='home-link btn-floating btn-large waves-effect waves-light red' href='{{ url($lang) }}'>
				<i class='material-icons'>home</i>
			</a>
		</div>
	</div>
</div>
@endsection