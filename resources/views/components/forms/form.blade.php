<form method="{{ $method !== 'GET' ? 'POST' : 'GET' }}" action="{{ $action }}" {!! $hasFiles ? 'enctype="multipart/form-data"' : '' !!}
{{ $attributes }} role="form" autocomplete="off">
    @csrf
    @method($method)

    {{ $slot }}
</form>
