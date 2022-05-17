@error($field,$bag)
    <span {{$attributes->merge(['class'=>'text-danger'])}} role="alert" id="{{$id}}_error">
        @if ($slot->isEmpty())
            {{ $message }}
        @else
            {{ $slot }}
        @endif
    </span>
@enderror

<span {{$attributes->merge(['class'=>'text-danger'])}} role="alert" id="{{$id}}_error"></span>
