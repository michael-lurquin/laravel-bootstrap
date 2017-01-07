@if ( !empty($buttons) )
    <div class="btn-group" role="group" aria-label="{{ $ariaLabel }}">
        @foreach($buttons as $url => $label)
            @if ( $url === 'active' )
                <a href="#" type="button" class="btn btn-{{ $classActive }} {{ $sizeButton }}">{{ $label }}</a>
            @else
                <a href="{{ $url }}" type="button" class="btn btn-{{ $classNotActive }} {{ $sizeButton }}">{{ $label }}</a>
            @endif
        @endforeach
    </div>
@endif
