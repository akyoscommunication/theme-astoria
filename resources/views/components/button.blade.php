<a {{ $attributes->merge(['class' => 'btn'.($appearance ? " btn--$appearance" : null)]) }}>
  <div class="btn-title">
    <div class="btn-title__item">{!! $slot !!}</div>
    <div class="btn-title__item">{!! $slot !!}</div>
  </div>
  @icon('arrow')
</a>
