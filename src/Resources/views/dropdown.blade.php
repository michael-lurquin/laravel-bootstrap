<div class="{{ $openBottom }}">
    <button class="btn btn-{{ $class }} dropdown-toggle" type="button" id="{{ $id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        {{ $title }}
        <span class="caret"></span>
    </button>
    @if ( !empty($links) )
        <ul class="dropdown-menu" aria-labelledby="{{ $id }}">
            @foreach($links as $key => $value)
                @if ( !in_array($key, ['divider', 'dropdown-header', 'disabled', 'active']) && !empty($value) )
                    <li>
                        <a href="{{ $key }}">{{ $value }}</a>
                    </li>
                @elseif ( ($key === 'disabled' || $key === 'active') )
                    <li class="{{ $key }}">
                        <a href="#">{{ $value }}</a>
                    </li>
                @elseif ( $key === 'divider' && empty($label) )
                    <li role="separator" class="divider"></li>
                @else
                    <li class="{{ $key }}">{{ $value }}</li>
                @endif
            @endforeach
        </ul>
    @endif
</div>
