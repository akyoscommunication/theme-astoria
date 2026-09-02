<section class="s-last-news bg-color-secondary {{$classes}}" style="{{ $styles }}">
  <div class="container">

    <div class="text-center">
      <x-title_text name="s-last-news" :title="$title" :description="$description"/>
    </div>

    <div class="c-articles">
      @foreach($getPosts(3) as $key => $post)
        @if($key === 0)
          <x-post :post="$post"/>
        @else
          <x-post animation-stagger :post="$post"/>
        @endif
      @endforeach
    </div>

    @if($button && $button['link'])
      <div class="text-center">
        <x-button
          class="s-last-news-btn"
          href="{{ $button['link']['url'] }}"
          :target="$button['link']['target']"
          :appearance="$button['color']"
        >
          {!! $button['link']['title'] !!}
        </x-button>
      </div>
    @endif
  </div>
</section>
