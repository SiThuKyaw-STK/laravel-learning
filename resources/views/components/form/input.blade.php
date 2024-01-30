@props(['placeholder' => 'something'])

<div>
    <label class="block font-bold text-white mb-2" for="{{$name}}">{{$label}}</label>
    <input
        placeholder="{{$placeholder}}"
        type="{{$name}}" 
        id="{{$name}}" 
        {{$attributes->merge(['class' => '
            bg-info 
            focus:outline-none 
            w-60 
            p-2 
            rounded 
            focus:ring 
            ring-secondary 
            text-white
        '])}}
    />
</div>