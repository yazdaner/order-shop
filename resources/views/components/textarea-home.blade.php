<div class="single-input-item">
    <label for="address" class="required">آدرس</label>
    <textarea name="{{$name}}" id="{{$name}}" placeholder="{{$label}}"
        rows="4" {{ $attributes->merge(['class' => 'mb-0'])}}>{{ isset($value) ? $value : old($name) }}</textarea>
    <x-validation-error field="{{$name}}" />
</div>
