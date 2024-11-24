@props(['disabled' => false])
@props(['messages' => ''])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control' . ($messages ? ' is-invalid' : '')]) !!}>
