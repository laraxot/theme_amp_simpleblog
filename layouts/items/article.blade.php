<div class='post-outer'>
	<article class='post hentry' itemprop='blogPost' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'>
		<div itemType='https://schema.org/WebPage' itemprop='mainEntityOfPage' itemscope='itemscope'></div>
		<div itemprop='publisher' itemscope='itemscope' itemtype='https://schema.org/Organization'>
			<div itemprop='logo' itemscope='itemscope' itemtype='https://schema.org/ImageObject'>
				<meta content='{{ $row->image_src }}' itemprop='url'/>
				<meta content='260px' itemprop='width'/>
				<meta content='60px' itemprop='height'/>
			</div>
			<meta content='Amp Ocean Free' itemprop='name'/>
		</div>
		<div itemprop='image' itemscope='itemscope' itemtype='https://schema.org/ImageObject'>
			<meta content='{{ $row->image_src }}' itemprop='url'/>
			<meta content='700' itemprop='width'/>
			<meta content='700' itemprop='height'/>
		</div>
		<div class='block-image'>
			<div class='thumb'>
				<amp-img alt='Your phone can see in dark and measure heat' height='300' layout='responsive' src='{{ url("/").$row->image_src }}' width='500'></amp-img>
			</div>
			<div class='postags'>
				<a class='Amp HTML' href='https://ampoceanfree.blogspot.com/search/label/Amp%20HTML' rel='tag'>Amp HTML</a>
			</div>
		</div>
		<div class='post-header'></div>
		<article>
			<div class='retitle'>
				<h2 class='post-title entry-title' itemprop='name headline'>
					<a href='{{ $row->url }}'>
					{{ $row->title }}
					</a>
				</h2>
			</div>
			<div class='date-header'>
				<div id='meta-post'>
					<a class='timestamp-link' href='{{ $row->url }}' rel='bookmark' title='permanent link'>
						<span class='published' itemprop='datePublished dateModified' title='2017-10-09T09:42:00-07:00'>10/09/2017</span>
					</a>
				</div>
				<div class='small-articulo'>
					<span> {{ $row->subtitle }}...</span>
					<a class='read-more' href='{{ $row->url }}'>Read More</a>
				</div>
			</div>
		</article>
		<div class='post-footer'></div>
	</article>
</div>
