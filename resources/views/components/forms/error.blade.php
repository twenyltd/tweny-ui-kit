@error($field,$bag)
    <span {{$attributes->merge(['class'=>'text-danger'])}} role="alert" >
        @if ($slot->isEmpty())
            {{ $message }}
        @else
            {{ $slot }}
        @endif
    </span>
@enderror

