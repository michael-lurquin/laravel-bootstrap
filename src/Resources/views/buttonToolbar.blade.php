@if ( !empty($buttons) )
    <div class="btn-group" role="group" aria-label="{{ $ariaLabel }}">
        @foreach($buttons as $url => $label)
            @if ( $url === 'active' )
                <a href="#" type="button" class="btn btn-{{ $classActive }}">{{ $label }}</a>
            @else
                <a href="{{ $url }}" type="button" class="btn btn-{{ $classNotActive }}">{{ $label }}</a>
            @endif
        @endforeach
    </div>
@endif
