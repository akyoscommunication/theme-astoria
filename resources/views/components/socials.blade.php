<ul class="c-socials">
  @if($options['linkedin'])
    <li class="c-socials__item">
      <a class="btn btn--social" href="{{ $options['linkedin'] }}" target="_blank">
        <span>@icon('linkedin')</span>
        <span>@icon('linkedin')</span>
      </a>
    </li>
  @endif
  @if($options['instagram'])
    <li class="c-socials__item">
      <a class="btn btn--social" href="{{ $options['instagram'] }}" target="_blank">
        <span>@icon('instagram')</span>
        <span>@icon('instagram')</span>
      </a>
    </li>
  @endif
  @if($options['facebook'])
    <li class="c-socials__item">
      <a class="btn btn--social" href="{{ $options['facebook'] }}" target="_blank">
        <span>@icon('facebook')</span>
        <span>@icon('facebook')</span>
      </a>
    </li>
  @endif
  @if($options['twitter'])
    <li class="c-socials__item">
      <a class="btn btn--social" href="{{ $options['twitter'] }}" target="_blank">
        <span>@icon('x-twitter')</span>
        <span>@icon('x-twitter')</span>
      </a>
    </li>
  @endif
  @if($options['youtube'])
    <li class="c-socials__item">
      <a class="btn btn--social" href="{{ $options['youtube'] }}" target="_blank">
        <span>@icon('youtube')</span>
        <span>@icon('youtube')</span>
      </a>
    </li>
  @endif
</ul>
