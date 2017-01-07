@if ( empty($glyph) )
    <a href="{{ $url }}" class="{{ $class }}"{!! $attributes !!}>{!! $label !!}</a>
@else
    <a href="{{ $url }}" class="{{ $class }}"{!! $attributes !!}>
        <i class="glyphicon glyphicon-{{ $glyph }}"></i>{!! $label !!}
    </a>
@endif
