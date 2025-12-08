@props(['type' => 'text', 'name', 'id'])

<input 
    type="{{ $type }}" 
    name="{{ $name }}"
    id="{{ $id }}"
    class="block w-full text-mainDark bg-white/40 dark:bg-mainLight py-2 px-3 mt-2 mb-6 rounded-xl ring-2 ring-red"
>