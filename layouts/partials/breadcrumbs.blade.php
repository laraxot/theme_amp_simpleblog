<div class='breadcrumbs'>
	<span itemscope='' itemtype='http://data-vocabulary.org/Breadcrumb'>
		<a href='{{ url($lang) }}' itemprop='url'>
			<span itemprop='title'>
				<i class='fa fa-home'></i>Home
			</span>
		</a>
	</span>
	@foreach($params as $p)
	@if(is_object($p))
	/
	<span itemscope='' itemtype='http://data-vocabulary.org/Breadcrumb'>
		<a href='{{ $p->url }}' itemprop='url'>
			<span itemprop='title'>{{ $p->title }}</span>
		</a>
	</span>
	@endif
	@endforeach
</div>