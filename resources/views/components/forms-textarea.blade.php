@props(['name', 'id'])

<textarea 
    name="{{ $name }}" 
    id="{{ $id }}" 
    class="block w-full text-mainDark bg-white/40 dark:bg-mainLight py-2 px-3 my-2 rounded-xl ring-2 ring-red"
    rows="8"
    required
></textarea>
