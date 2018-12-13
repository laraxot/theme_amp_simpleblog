<li>
  <div class='item-content'>
    <div class='item-thumbnail'>
      <a href='{{ url("it/article/".$p->guid) }}' target='_blank'>
        <amp-img alt='Your phone can see in dark and measure heat' height='55' src='{{ url("/").$p->image_src }}' title='{{ $p->image_title }}' width='72'></amp-img>
      </a>
    </div>
    <div class='item-title'><a href='{{ url("it/article/".$p->guid) }}'>{{ $p->title }}</a></div>
    <div class='item-snippet'>{{ $p->subtitle }}</div>
  </div>
  <div class='clear'></div>
</li>
