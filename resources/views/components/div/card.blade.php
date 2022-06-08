    <div {{ $attributes->merge(['class' => 'card']) }} >

        @if(!is_null($cardTitle))
            <div class="card-header">
                <div class="card-title">
                    {!!  $cardTitle !!}
                </div>
            </div>
        @endif

        <div class="card-body">
            @if(!is_null($cardButtons))
                <div class="row mb-3">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-end">
                        {!!$cardButtons !!}
                    </div>
                </div>
            @endif

            {{$slot}}

        </div>

    </div>
