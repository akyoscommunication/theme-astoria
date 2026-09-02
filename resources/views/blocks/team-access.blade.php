<section class="s-team bg-color-secondary" style="{{ $styles }}">
  <div class="container">

    <div class="s-team-grid">

      <div>
        <x-title_text name="s-team" :title="$title" :description="$description"/>
      </div>

      <div class="s-team-list">
        @if(count($teams) <= 4)
          <div class="s-team-list-wrapper">
            @foreach($teams as $team)
              <div class="c-team">
                <x-media :media="$team['image']"/>
                <div class="c-team__content">
                  <h3>{{ $team['name'] }}</h3>
                  <p>{{ $team['job'] }}</p>
                </div>
              </div>
            @endforeach
          </div>
        @else
          <x-slider
            name="team"
            :per="2"
            :perMd="2"
            :perSm="2"
            :perXs="1"
            :modules="['navigation']"
            :extra="['spaceBetween' => 20]"
          >
            @foreach($teams as $team)
              <div class="swiper-slide">
                <div class="c-team">
                  <x-media :media="$team['image']"/>
                  <div class="c-team__content">
                    <h3>{{ $team['name'] }}</h3>
                    <p>{{ $team['job'] }}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </x-slider>
        @endif
      </div>

    </div>

  </div>
</section>
