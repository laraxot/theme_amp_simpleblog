<div id='menu-ayudadeblogger'>
	<div class='adb-head row'>
		<div class='start-menu'>
			<div class='Gadget-menu-1 section' id='Gadget-menu-1'>
				<div class='widget LinkList' data-version='1' id='LinkList100'>
					<div class='widget-content'>
						<ul id='nav1'>
							<li><a href="{{ url('/') }}">Home</a></li>
							@foreach($page->archive()->get() as $p)
							<li class="ampstart-nav-item "><a href="{{ $p->url }}" class="text-decoration-none block">{{$p->title}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Top Social -->
		<div class='social-area'>
			<div class='Gadget-social section' id='Gadget-social'>
				<div class='widget LinkList' data-version='1' id='LinkList120'>
					<div class='widget-content'>
						<ul>
							<li><a class='facebook' href="{{ url('frames/facebook.html?page='.Theme::metatag('facebook_pagename')) }}" target='_blank' title='facebook'></a></li>
							<li><a class='twitter' href='https://www.twitter.com/' target='_blank' title='twitter'></a></li>
							<li><a class='gplus' href='https://www.google.com/' target='_blank' title='gplus'></a></li>
							<li><a class='instagram' href='https://www.instagram.com/' target='_blank' title='instagram'></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id='header-blog'>
	<div class='header-content row'>
		<div class='header-logo'>
			<div class='section' id='header'>
				<div class='widget Header' data-version='1' id='Header1'>
					<div id='header-inner'>
						<a href='{{ url('/') }}'>
							<amp-img alt='Amp Ocean Free' class='no-cover' height='90' id='Header1_headerimg' layout='responsive' src="{{	Theme::url('theme/pub/img/hfashion_logo.png')	}}" width='296'></amp-img>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class='header-AdSense'>
			<div class='section' id='AdSense'>
				@include('pub_theme::layouts.widgets.adsense')
			</div>
		</div>
	</div>
</div>
<!-- Main Menu -->
{{--
<div id='menu-ayudadeblogger'>
	<div class='adb-head row'>
		<div class='start-menu'>
			<div class='Gadegt-menu-2 section' id='Gadget-menu-2'>
				<div class='widget LinkList' data-version='1' id='LinkList220'>
					<div class='widget-content'>
						<ul>
							<li><a href='/'>Inicio</a></li>
							<li><a href='/'>Entretenimiento</a></li>
							<li><a href='/'>Fashion</a></li>
							<li><a href='/'>Deportes</a></li>
							<li><a href='/'>Música</a></li>
							<li><a href='/'>Videos</a></li>
							<li><a href='/'>Noticias</a></li>
							<li><a href='/'>Blogger</a></li>
							<li><a href='/'>Negocios</a></li>
							<li><a href='/'>Contactos</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
--}}
<div class='clear'></div>
