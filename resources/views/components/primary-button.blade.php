<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700']) }}>
    {{ $slot }}
</button>
