<div class="mb-3">
    <input type="{{$type ?? 'text'}}" value="{{$value ?? old($name)}}" placeholder="{{$label}} " name="{{$name}}" @if ($required) required @endif {{ $attributes->merge(['class' => 'mb-0'])}}>
    <x-validation-error field="{{$name}}" />
</div>
