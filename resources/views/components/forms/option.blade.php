<option {{ $isSelected($value) ? 'selected' : '' }} value="{{ $value }}">
    {{ $slot }}
</option>