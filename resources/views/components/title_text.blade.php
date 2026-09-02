  @if(isset($title) && $title['value'])
    <x-title :tag="$title['tag']"
             animation-overflow-title
    >
      {!! $title['value'] !!}
    </x-title>
  @endif

  @if(isset($description))
    <div class="{{ $name }}__text" animation-stagger-single>
      {!! $description !!}
    </div>
  @endif
