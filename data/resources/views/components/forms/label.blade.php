@props(['for', 'required => false'])

<label 
    for="{{ $for }}" 
    class="my-2 text-sm"
>
    {{ $slot }}
    <span class="text-sm text-red">*</span>
</label>