@error($field,$bag)
    <span {{$attributes->merge(['class'=>'field-error -danger'])}} role="alert" >
        @if ($slot->isEmpty())
            {{ $message }}
        @else
            {{ $slot }}
        @endif
    </span>
@enderror

