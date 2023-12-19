<div class="contact2-textarea text-center mb-3">
    <textarea placeholder="{{$label}}" name="{{$name}}" {{ $attributes->merge(['class' => 'form-control2 mb-0'])}}>{!! isset($value) ? $value : old($name) !!}</textarea>
    <x-validation-error field="{{$name}}" />
</div>
