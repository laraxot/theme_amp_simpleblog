{{ Theme::add('theme/pub/css/show.css', 2) }}
@extends('pub_theme::layouts.app')
@section('content')
<div class='main section' id='main'>
	<div class='widget Blog' data-version='1' id='Blog1'>
		@include('pub_theme::layouts.partials.breadcrumbs')
		<div class='blog-posts hfeed'>
			<!--Can't find substitution for tag [defaultAdStart]-->
			<div class='post-outer'>
				<article class='post hentry' itemprop='blogPost' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>
					<div itemType='https://schema.org/WebPage' itemprop='mainEntityOfPage' itemscope='itemscope'></div>
					<div itemprop='publisher' itemscope='itemscope' itemtype='https://schema.org/Organization'>
						<div itemprop='logo' itemscope='itemscope' itemtype='https://schema.org/ImageObject'>
							<meta content='{{ url('/').$row->image_src }}' itemprop='url'/>
							<meta content='260px' itemprop='width'/>
							<meta content='60px' itemprop='height'/>
						</div>
						<meta content='Amp Ocean Free' itemprop='name'/>
					</div>
					<div itemprop='image' itemscope='itemscope' itemtype='https://schema.org/ImageObject'>
						<meta content='{{ url('/').$row->image_src }}' itemprop='url'/>
						<meta content='700' itemprop='width'/>
						<meta content='700' itemprop='height'/>
					</div>
					<div class='post-head'>
						<h1 class='post-title entry-title' itemprop='name headline'>
							{{ $row->title }}
						</h1>
					</div>
					<amp-img alt='Your phone can see in dark and measure heat' height='300' layout='responsive' src='{{ url('/').$row->image_src }}' width='500'></amp-img>
					<div class='post-header'>
						<div class='post-meta'>
							<span class='post-timestamp'>
								<meta content='https://ampoceanfree.blogspot.com/2017/10/your-phone-can-see-in-dark-and-measure.html' itemprop='url mainEntityOfPage'/>
								<a class='timestamp-link' href='https://ampoceanfree.blogspot.com/2017/10/your-phone-can-see-in-dark-and-measure.html' rel='bookmark' title='permanent link'><span class='published' itemprop='datePublished dateModified' title='2017-10-09T09:42:00-07:00'>10/09/2017</span></a>
							</span>
							<span class='label-head'>
							<a href='https://ampoceanfree.blogspot.com/search/label/Amp%20HTML' rel='tag'>Amp HTML</a>
							</span>
						</div>
						{{-- @include('pub_theme::layouts.boxes.share') --}}
					</div>
					<article>
						<div class='post-body entry-content' id='post-body-3060405834758603387' itemprop='articleBody'>
							{{ $row->txt }}
						</div>
					</article>
					@include($view.'.footer')

				</article>
				<div class='comments' id='comments'>
					<a name='comments'></a>
					<div id='backlinks-container'>
						<div id='Blog1_backlinks-container'></div>
					</div>
				</div>
			</div>
			<!--Can't find substitution for tag [adEnd]-->
		</div>
	</div>
</div>

@endsection
