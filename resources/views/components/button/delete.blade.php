<form method="POST" action="{{$action}}" class="form-inline form-delete" role="form" autocomplete="off">
    @csrf
    @method('DELETE')
    <button {{$attributes->merge(['class'=>'btn-form btn btn-sm'])}}  onclick="return confirm('Do you want to delete this Item?')" >
        delete
    </button>
</form>

