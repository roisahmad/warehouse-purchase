    <button {{ $attributes->merge(['type' => 'reset', 'class' => 'inline-flex items-center px-4 py-2 border-1 border-gray-800 border rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest bg-white hover:bg-blue-500 hover:text-white focus:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
        {{ $slot }}
    </button>