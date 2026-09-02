<section class="s-text-image {{ $classes }}" style="{{ $styles }}">
  <div class="container {{ $position }}">
    <div class="s-text-image-1">
      <x-title_text name="s-text-image" :title="$title" :description="$content"/>
      @if($button && $button['link'])
        <x-button
          href="{{ $button['link']['url'] }}"
          target="{{ $button['link']['target'] }}"
          appearance="{{ $button['color'] }}"
        >
          {!! $button['link']['title'] !!}
        </x-button>
      @endif
    </div>
    <div class="s-text-image-2">
      @if($images)
        <x-slider
          name="content"
          :per="1"
          :perMd="1"
          :perSm="1"
          :perXs="1"
          :modules="['navigation']"
          :extra="['spaceBetween' => 0]"
        >
          @foreach($images as $image)
            <div class="swiper-slide">
              <x-media :media="$image" animation-zoom="out"/>
            </div>
          @endforeach
        </x-slider>
      @endif
    </div>
  </div>
</section>
