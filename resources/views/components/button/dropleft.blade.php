<div class="btn-group dropstart">

    <button type="button" {{$attributes->merge(['class'=>'btn'])}} style=".btn:hover{border:0;}" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="{{$icon}}"></i>
    </button>

    <div class="dropdown-menu">

        {{$slot}}

    </div>

</div>
