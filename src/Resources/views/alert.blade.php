<div class="alert alert-{{ $class }} alert-dismissible" role="alert">

    @if ( $close )
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    @endif

    @if ( !empty($glyph) && !empty($title) )
        <strong>
            <i class="glyphicon glyphicon-{{ $glyph }}"></i>{{ $title }}
        </strong>
    @elseif ( !empty($glyph) )
        <i class="glyphicon glyphicon-{{ $glyph }}">
    @else
        <strong>
            {{ $title }}
        </strong>
    @endif

    {!! $message !!}
</div>
