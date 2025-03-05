@props(['name', 'label', 'multiple' => false])

<div class="col-span-1 lg:col-span-2">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <input
        type="file"
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $multiple ? 'multiple' : '' }}
        class="mt-1 block w-full text-sm text-gray-500 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded-lg file:text-sm file:bg-gray-100 file:text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
    >
    @error($name)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
