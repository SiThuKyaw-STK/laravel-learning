@props(['placeholder' => 'something','class' => ''])

<div>
    <label class="block font-bold text-white mb-2" for="{{$name}}">{{$label}}</label>
    <input
        placeholder="{{$placeholder}}"
        type="{{$name}}" 
        id="{{$name}}"
        class="
            bg-info
            focus:outline-none
            w-60
            p-2
            rounded
            focus:ring
            ring-secondary
            {{$class}}"
    />
</div>