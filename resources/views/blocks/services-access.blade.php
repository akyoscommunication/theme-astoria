<section class="s-services bg-color-secondary" style="{{ $styles }}">

  <div class="container">
    <x-title_text name="s-services" :title="$title" :description="$description"/>

    <div class="s-services-list">
      @if(count($services) <= 3)
        <div class="s-services-list-wrapper s-services-list-wrapper--peek">
          @foreach($services as $service)
            <x-card
              :title="$service['title']"
              :content="$service['description']"
              :url="$service['link']"
              :image="$service['image']"
            />
          @endforeach
        </div>
      @else
        <x-slider
          name="services"
          :per="3"
          :perMd="3"
          :perSm="2"
          :perXs="1"
          :modules="['navigation']"
          :extra="['spaceBetween' => 20]"
          :peekMobile="true"
        >
          @foreach($services as $service)
            <div class="swiper-slide">
              <x-card
                :title="$service['title']"
                :content="$service['description']"
                :url="$service['link']"
                :image="$service['image']"
              />
            </div>
          @endforeach
        </x-slider>
      @endif

      @if(\Akyos\Access\Acf\Fields\ButtonAccess::hasLink($button))
        <x-button
          class="{{ count($services) > 3 ? 'btn--absolute': null }}"
          href="{{ $button['link']['url'] }}"
          target="{{ $button['link']['target'] }}"
          appearance="{{ $button['color'] }}"
        >
          {!! $button['link']['title'] !!}
        </x-button>
      @endif

    </div>
  </div>
</section>

