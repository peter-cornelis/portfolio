@props(['for', 'required => false'])

<label 
    for="{{ $for }}" 
    class="my-2"
>
    {{ $slot }}
    <span class="text-red">*</span>
</label>