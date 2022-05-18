@error($field,$bag)
    <span {{$attributes->merge(['class'=>'field-error text-danger'])}} role="alert" >
        @if ($slot->isEmpty())
            {{ $message }}
        @else
            {{ $slot }}
        @endif
    </span>
@enderror

