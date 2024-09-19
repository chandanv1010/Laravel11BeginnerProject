@props(['label', 'name', 'value', 'require', 'type'])
<div class="form-row">
    <label for="{{ $name }}" class="control-label text-left">{{ $label }} {!! (isset($require) && $require) ? '<span class="text-danger">*</span>' : '' !!} </label>
    <input 
        type="{{ $type ?? 'text' }}"
        name="{{ $name }}"
        class="form-control"
        autocomplete="off"
        placeholder=""
        value="{{ old($name, $value ?? '') }}"
        id="{{ $name }}"
    >
</div>

@if($errors->has($name))
    <div class="error">{{ $errors->first($name) }}</div>
@endif