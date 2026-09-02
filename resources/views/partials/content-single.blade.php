@php
  use Akyos\Access\Support\SinglePostHelper;

  $terms = get_the_terms(get_the_ID(), 'category');
  $term = array_shift($terms);
  $singleEnhanced = SinglePostHelper::isEnabled();
@endphp

<article @if($singleEnhanced) class="single--enhanced" @endif>

  <section class="single-header container">
    <x-image :lg="get_post_thumbnail_id(get_the_ID())"/>
    <div>
      <x-title position="center" tag="h1">{{ get_the_title() }}</x-title>
    </div>
  </section>

  <section class="single-content">
    @include('akyos-access::partials.single-article-content', [
      'showDate' => !$singleEnhanced,
      'enhanced' => $singleEnhanced,
    ])

    @if($term && $getPostsTerm($term->slug, 2, 'category', [get_the_ID()]))
      <div class="single-content__other-posts">
        <div class="container--sm">
          <div class="single-content__other-posts-header">
            <x-title tag="h2" position="left">Voir plus d'articles</x-title>
          </div>
          <div class="c-articles">
            @foreach($getPostsTerm($term->slug, 2, 'category', [get_the_ID()]) as $post)
              <x-post :post="$post" animation-stagger/>
            @endforeach
          </div>
          <x-button href="/nos-actualites" appearance="primary">Voir les articles</x-button>
        </div>
      </div>
    @endif
  </section>
</article>
