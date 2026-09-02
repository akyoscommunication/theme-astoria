<article class="c-card" animation-stagger>
  @if(isset($url) && !empty($url['url']))
    <a href="{{ $url['url'] }}">
      @endif

      <x-media :media="$image"/>

      <div class="c-card-body">
        @if(isset($title) && $title['value'])
          <x-title :tag="$title['tag']">{!! $title['value'] !!}</x-title>
        @endif
        @if(isset($content))
          <div class="c-card-body__text">
            {!! $content !!}
          </div>
        @endif
          <div class="c-card-body__button">
            <a href="{!! get_permalink($post->ID) !!}" class="btn--post">
              @icon('arrow')
            </a>
          </div>
      </div>

      @if(isset($url))
    </a>
  @endif
</article>
