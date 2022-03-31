    <div {{ $attributes->merge(['class' => 'card']) }} >

        @if(is_null($cardTitle))

        @else
            <div class="card-header bg-primary">
                <div class="card-title">
                    {{$cardTitle}}
                </div>
            </div>
        @endif

        <div class="card-body">

            <div class="row">
                <div class="col-md-12 text-end">
                    {{$cardButtons}}
                </div>
            </div>

            {{$slot}}

        </div>

    </div>
