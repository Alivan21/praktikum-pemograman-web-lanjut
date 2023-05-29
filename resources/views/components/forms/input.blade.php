<div>
  <label for="{{ $name }}" class="block mb-2 text-sm font-medium text-gray-900">
    {{ $label }}
  </label>
  <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
    class="bg-gray-50 border block w-full p-3 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500"
    placeholder="{{ $placeholder }}" value="{{ $value }}" required>
  @error($name)
    <div class="text-red-500 mt-2 text-sm">
      {{ $message }}
    </div>
  @enderror
</div>
