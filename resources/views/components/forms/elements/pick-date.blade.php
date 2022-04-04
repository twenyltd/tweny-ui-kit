<input  name="{{ $name }}" type="date"    id="{{ $id }}"
        {{ $attributes->merge(['class' => 'form-control']) }}
        @if($value)value="{{ $value }}"@endif />
