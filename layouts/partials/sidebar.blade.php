<div id='sidebar-wrapper'>
	<div id='search-box'>
		<div id='cse-search-box'>
			<div itemprop='mainEntity' itemscope='itemscope' itemtype='http://schema.org/WebSite'>
				<form action='/search' method='GET' target='_top'>
					<input class='data-input search-form' name='q' placeholder='Search...' type='search'/>
					<button class='search-button' title='Buscar..' type='submit'><i class='material-icons'>&#59574;</i></button>
				</form>
			</div>
		</div>
	</div>
	<div class='sidebar ready-widget section' id='sidebar2'>
		{{-- quandro avremo video   
		@include('pub_theme::layouts.widgets.youtube')
		--}}
		@include('pub_theme::layouts.widgets.profile')
		@include('pub_theme::layouts.widgets.newsletter')
		@include('pub_theme::layouts.widgets.follow_us')
		@include('pub_theme::layouts.widgets.facebook')
		@include('pub_theme::layouts.widgets.twitter')
		@include('pub_theme::layouts.widgets.popular_posts')	
		@include('pub_theme::layouts.widgets.categories')	
		@include('pub_theme::layouts.widgets.archive_month_year')	
		@include('pub_theme::layouts.widgets.slider')	
	</div>
</div>