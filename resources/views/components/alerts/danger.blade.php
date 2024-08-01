@props(['error' => ''])

<div x-data="{ open: true }"
    class="fixed bottom-0 right-0 m-6 p-4 bg-red-500 text-white rounded-lg shadow-lg transition-opacity duration-300 ease-in-out opacity-100"
    role="alert">
    <button type="button" @click="open = false"
        class="absolute top-0 right-0 mt-4 mr-4 text-white opacity-75 hover:text-opacity-100">
        <span>&times;</span>
    </button>
    <strong>Oh snap!</strong> {{ $error }}
</div>
