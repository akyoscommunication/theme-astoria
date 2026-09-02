@extends('layouts.app')

@section('content')

  @php
    $obj = get_queried_object();

     if ($obj instanceof WP_Term) {
      $image = get_field('image_background', 'category_'.$obj->term_id);
      $title = [
          'tag' => 'h1',
          'value' => $obj->name,
          'position' => 'center'
       ];
      $description = $obj->description;
    } else {
      $image = get_post_thumbnail_id($obj->ID);
      $title = [
          'tag' => 'h1',
          'value' => $obj->post_title,
          'position' => 'center'
       ];
      $description = get_field('content', $obj->ID);
    }

    $category = get_query_var('cat') ?: '';

    $args = [
      'post_type' => 'post',
      'posts_per_page' => 10,
      'paged' => get_query_var('paged', 1),
      'cat' => $category,
    ];

    $query = new WP_Query($args);

  @endphp

  <section class="archive-header container">
    <x-image :lg="$image"/>
    <div>
      <x-title_text name="single-header" :title="$title" :description="$description"/>
    </div>
  </section>

  <article class="s-archive">
    <div class="container--sm">

      <div class="c-filter">
        <div class="c-filter-buttons">
          <a href="{{ get_post_type_archive_link('post') }}"
             class="btn btn--outlined-square c-filter-button {{ empty(get_query_var('cat')) ? 'btn--active' : '' }}">
            <span>Voir tout ({{ count($getPosts()) }})</span>
          </a>

          @foreach(get_categories() as $cat)
            <a href="{{ get_term_link($cat) }}"
               class="btn btn--outlined-square c-filter-button {{ get_query_var('cat') === $cat->term_id ? 'btn--active' : '' }}">
              <span>{{ $cat->name }} ({{ count($getPostsTerm($cat->slug)) }})</span>
            </a>
          @endforeach
        </div>
      </div>

      @if($query->posts)
        <div class="c-articles">
          @foreach($query->posts as $post)
            <x-post :post="$post" animation-stagger/>
          @endforeach
        </div>

        @if($query->max_num_pages > 1)
          <div class="c-pagination">
            {{ the_posts_pagination([
              'prev_text' => '',
              'next_text' => '',
             ]) }}
          </div>
        @endif
      @else
        <p>Aucun article trouvé.</p>
      @endif
    </div>
  </article>
  @php
    wp_reset_postdata();
  @endphp
@endsection
