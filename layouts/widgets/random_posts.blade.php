{{-- originale
<div class='widget HTML' data-version='1' id='HTML16'>
		<h2 class='title'>Random Posts</h2>
		<div class='widget-content'>
				<amp-iframe frameborder='0' height='350' layout='fixed-height' sandbox='allow-scripts allow-same-origin allow-modals allow-popups' src='https://cdn.rawgit.com/grupodelecluse/amp-ocean-free/86464d40/random-post-caja.html?url=ampoceanfree.blogspot.com&color=222'></amp-iframe>
		</div>
</div>
--}}


{{-- per ora uguale a popular posts	--}}
<div class='widget PopularPosts' data-version='1' id='PopularPosts1'>
	<h2>Popular Posts</h2>
	<div class='widget-content PopularPosts-sidebar'>
		<ul>
			@php
				$articles=$article->archive()->inRandomOrder()->limit(5)->get();
			@endphp
			@foreach($articles as $p)
				@include('pub_theme::layouts.partials.popular',['row'=>$p])
			@endforeach
		</ul>
	</div>
</div>
