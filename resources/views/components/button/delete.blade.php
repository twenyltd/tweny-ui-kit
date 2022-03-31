<form method="POST" action="{{$action}}" class="form-horizontal" role="form" autocomplete="off">
    @csrf
    @method('DELETE')
    <button {{$attributes->merge(['class'=>'form-button btn btn-sm'])}}  onclick="return confirm('Do you want to delete this Item?')" >
        <i class="fa fa-times"></i>
    </button>
</form>

