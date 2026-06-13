@props([
    'name',
    'label',
    'type' => 'text',
    'as' => 'input',
    'required' => false,
    'value' => '',
    'autocomplete' => null,
    'rows' => 5,
])

@php($hasError = $errors->has($name))
@php($describedBy = $hasError ? $name.'-error' : null)

<div {{ $attributes->merge(['class' => 'flex flex-col gap-2']) }}>
    <label for="{{ $name }}" class="text-sm font-medium text-ink">
        {{ $label }}@if (! $required)<span class="font-normal text-faint"> (optional)</span>@endif
    </label>

    @php($base = 'w-full rounded-md border bg-surface px-3.5 py-2.5 text-text placeholder:text-faint transition-colors focus:border-blue '.($hasError ? 'border-error' : 'border-border'))

    @if ($as === 'textarea')
        <textarea id="{{ $name }}" name="{{ $name }}" rows="{{ $rows }}"
                  @if($required) required @endif
                  @if($describedBy) aria-describedby="{{ $describedBy }}" aria-invalid="true" @endif
                  class="{{ $base }}">{{ old($name, $value) }}</textarea>
    @else
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}"
               value="{{ old($name, $value) }}"
               @if($autocomplete) autocomplete="{{ $autocomplete }}" @endif
               @if($required) required @endif
               @if($describedBy) aria-describedby="{{ $describedBy }}" aria-invalid="true" @endif
               class="{{ $base }}">
    @endif

    @error($name)
        <p id="{{ $name }}-error" class="text-sm text-error">{{ $message }}</p>
    @enderror
</div>
