@php $shortcode = "[forminator_form id=".$form."]" @endphp

<section class="s-form {{ $classes }}" style="{{ $styles }}">
  <div class="container {{ $content_position }}">
    <div class="s-form-wrapper">
      <div class="s-form-infos">
          {!! $options['address'] !!}
          <a href="tel:+33{{ $options['phone'] }}">@icon('phone') +33 {!! $options['phone'] !!}</a>
          <a href="mailto:{{ $options['email'] }}">@icon('mail') {!! $options['email'] !!}</a>
      </div>
      <x-socials/>
    </div>
    <div class="s-form-wrapper">
      <x-title tag="h1">{!! get_the_title() !!}</x-title>
      {!! $shortcode !!}
    </div>
  </div>
</section>
