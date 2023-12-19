<div class="mb-3">
    <label>{{$placeholder}}</label>
    <input type="{{$type}}" name="{{$name}}" autocomplete="{{$name}}" placeholder="{{$placeholder}}" {{
        $attributes->merge(['class' => 'text']) }}
    value="{{old($name)}}">
    <x-validation-error field="{{$name}}" />
</div>
