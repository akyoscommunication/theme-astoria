<section class="s-hero {{ $classes }}" style="{{ $styles }}">

  <div class="container">

    <div class="s-hero-content">
      <x-title_text name="s-hero-content__text" :title="$title" :description="$description"/>
    </div>

    <div class="s-hero-image">
      <x-media :media="$image_background" cover rounded animation-zoom="out"/>
      @if($button && $button['link'])
        <div class="btn-container">
          <x-button
            class="test"
            href="{{ $button['link']['url'] }}"
            target="{{ $button['link']['target'] }}"
            appearance="{!! $button['color'] !!}">
            {!! $button['link']['title'] !!}
          </x-button>
        </div>
      @endif
    </div>

  </div>

</section>

