<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-teal-100 hover:bg-teal-300 text-black font-bold py-2 px-4 rounded']) }}>
    {{ $slot }}
</button>