<div {{ $attributes->merge(['class' => 'card']) }} >

    @if(!is_null($cardTitle))
        <div class="card-header d-flex justify-content-between  ">
            <div class="card-title">
                {!!  $cardTitle !!}
            </div>
            <div class="card-button">
                @if(!is_null($cardButtons))
                    {!!$cardButtons !!}
                @endif
            </div>
        </div>
    @endif

    <div class="card-body">
        {{$slot}}
    </div>

</div>
