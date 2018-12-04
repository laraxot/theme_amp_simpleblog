<div class='widget Label' data-version='1' id='Label1'>
	<h2>Categories</h2>
	<div class='widget-content cloud-label-widget-content'>
		@foreach($articleCat->archive as $cat)
		<span class='label-size label-size-2'>
			<a dir='ltr' href='{{ $cat->url }}'>{{ $cat->title }}</a>
		</span>
		@endforeach
	</div>
</div>