@props(['value'])

<label {{ $attributes->merge(['class' => 'form-label fw-bold']) }}>
    {{ $value ?? $slot }}
</label>
