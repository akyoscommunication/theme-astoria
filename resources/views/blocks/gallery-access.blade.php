<section class="s-gallery bg-color-secondary" style="{{ $styles }}">
  <div class="container">
    <x-title_text name="s-gallery" :title="$title" :description="$description"/>
    <div class="s-gallery-row">
      @foreach($gallery as $item)
        @include('akyos-access::partials.gallery-media', ['media' => $item])
      @endforeach
    </div>
  </div>
</section>
