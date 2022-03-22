<div    class="modal fade"  id="{{$id}}"    role="dialog"   aria-hidden="true">
    <div {{ $attributes->merge(['class' => 'modal-dialog']) }}  role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{$modalTitle}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{$slot}}
            </div>

            @if(!is_null($modalFooter))
                <div class="modal-footer">
                    {{$modalFooter}}
                </div>
            @endif
        </div>
    </div>
</div>
