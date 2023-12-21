<div class="single-input-item mb-3">
    <label for="{{$name}}" class="required">{{$label}}</label>
    <input type="{{$type ?? 'text'}}" id="{{$name}}" name="{{$name}}" placeholder="{{$label}}"
        value="{{$value ?? old($name)}}" {{ $attributes->merge(['class' => 'mb-0'])}}/>
    <x-validation-error field="{{$name}}" />
</div>
