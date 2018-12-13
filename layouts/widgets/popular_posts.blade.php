<div class='widget PopularPosts' data-version='1' id='PopularPosts1'>
			<h2>Popular Posts</h2>
			<div class='widget-content PopularPosts-sidebar'>
				<ul>
					@php
						$articles=$article->archive()->limit(5)->get(); //selezione da modificare in "più popolari"
					@endphp
					@foreach($articles as $p)
 							@include('pub_theme::layouts.partials.popular',['row'=>$p])
					@endforeach








			{{--
						<li>
						<div class='item-content'>
							<div class='item-thumbnail'>
								<a href='https://ampoceanfree.blogspot.com/2017/04/the-best-blogger-design-amp-html.html' target='_blank'>
									<amp-img alt='The best Blogger design Amp HTML' height='55' src='https://4.bp.blogspot.com/-92LTXN2a0Hs/WdugzrC2-BI/AAAAAAAARRs/5JQ6ZoIX7T4nCGuslPNX84PRQz14R_wfQCLcBGAs/w300/amp-1.jpg' title='The best Blogger design Amp HTML' width='72'></amp-img>
								</a>
							</div>
							<div class='item-title'><a href='https://ampoceanfree.blogspot.com/2017/04/the-best-blogger-design-amp-html.html'>The best Blogger design Amp HTML</a></div>
							<div class='item-snippet'> Un blog es un sitio web  que se actualiza periódicamente y que ofrece la lectura de información de uno o varios autores sobre temas de inte...</div>
						</div>
						<div class='clear'></div>
					</li>
					<li>
						<div class='item-content'>
							<div class='item-thumbnail'>
								<a href='https://ampoceanfree.blogspot.com/2017/02/how-to-style-choker-so-you-dont-look.html' target='_blank'>
									<amp-img alt='How To Style A Choker So You Don’t Look ' height='55' src='https://1.bp.blogspot.com/-fIvxT6vwVPQ/WX5-R2sE6PI/AAAAAAAABm0/FYoMsOv8oPwurq6b2ExMeKHKUv1DdGyRgCLcBGAs/w300/vogue-7-750x430-reducido.jpg' title='How To Style A Choker So You Don’t Look ' width='72'></amp-img>
								</a>
							</div>
							<div class='item-title'><a href='https://ampoceanfree.blogspot.com/2017/02/how-to-style-choker-so-you-dont-look.html'>How To Style A Choker So You Don&#8217;t Look </a></div>
							<div class='item-snippet'>Es mucho lo que se puede hablar acerca de los blogs, y doy por hecho que es un tema que despierta bastante interés, pero debemos centrarnos ...</div>
						</div>
						<div class='clear'></div>
					</li>
					<li>
						<div class='item-content'>
							<div class='item-thumbnail'>
								<a href='https://ampoceanfree.blogspot.com/2017/02/on-average-people-can-only-withstand-25.html' target='_blank'>
									<amp-img alt='On average people can only withstand 25 ' height='55' src='https://3.bp.blogspot.com/-MQu5VPoS60A/WX6AqTvCtlI/AAAAAAAABnE/-uwEfvRcYdAoT9DIbjQTYM5BqeCM-woAACLcBGAs/w300/tech-17-750x430-reducido.jpg' title='On average people can only withstand 25 ' width='72'></amp-img>
								</a>
							</div>
							<div class='item-title'><a href='https://ampoceanfree.blogspot.com/2017/02/on-average-people-can-only-withstand-25.html'>On average people can only withstand 25 </a></div>
							<div class='item-snippet'>Un blog, también llamado bitácoras o weblog, es un sitio web donde uno o varios autores (bloggers) publican regularmente artículos (llámense...</div>
						</div>
						<div class='clear'></div>
					</li>
				--}}




				</ul>
			</div>
		</div>
