@error($field,$bag)
    <span {{$attributes->merge(['class'=>'text-danger'])}} role="alert" >
        @if ($slot->isEmpty())
            {{ $message }}
        @else
            {{ $slot }}
        @endif
    </span>
@enderror

<span {{$attributes->merge(['class'=>'text-danger','id'=>$id.'_error'])}} role="alert" ></span>
