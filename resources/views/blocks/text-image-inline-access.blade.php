<section class="s-text-image-inline {{ $classes }}" style="{{ $styles }}">
  <div class="container">
    <div class="s-text-image-inline-row {{ $position }}">
      <div class="s-text-image-inline-text" animation-stagger>
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
      @if($images && isset($images[0]))
        @foreach($images as $key => $image)
          <div class="s-text-image-inline-image s-text-image-inline-image-{{$key}}">
            <div class="clone"></div>
            <x-media :media="$image" animation-stagger/>
          </div>
        @endforeach
      @endif
    </div>
  </div>
</section>
