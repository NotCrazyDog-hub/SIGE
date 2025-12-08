@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'w-full border rounded-md p-2 focus:border-blue-500']) }}>
