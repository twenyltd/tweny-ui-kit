<div class="btn-group dropleft">

    <button {{$attributes->merge(['class'=>''])}} style=".btn:hover{border:0;}" data-toggle="dropdown">
        <i class="{{$icon}}"></i>
    </button>

    <div class="dropdown-menu">

        {{$slot}}

    </div>

</div>
