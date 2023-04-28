@php
  $color = $color ?? 'blue';
  $classColor = [
      'blue' => 'bg-blue-700 hover:bg-blue-800 focus:ring-blue-300',
      'green' => 'bg-green-700 hover:bg-green-800 focus:ring-green-300',
      'red' => 'bg-red-700 hover:bg-red-800 focus:ring-red-300',
      'yellow' => 'bg-yellow-700 hover:bg-yellow-800 focus:ring-yellow-300',
      'indigo' => 'bg-indigo-700 hover:bg-indigo-800 focus:ring-indigo-300',
      'purple' => 'bg-purple-700 hover:bg-purple-800 focus:ring-purple-300',
      'pink' => 'bg-pink-700 hover:bg-pink-800 focus:ring-pink-300',
      'gray' => 'bg-gray-700 hover:bg-gray-800 focus:ring-gray-300',
  ];
@endphp

<button type="submit"
  class="font-medium rounded-lg text-sm px-6 py-2.5 text-center text-white focus:ring-4 focus:outline-none {{ $classColor[$color] }}">
  {{ $text }}
</button>
