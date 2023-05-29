<form class="flex-1 max-w-lg" action="{{ route('mahasiswa.search') }}" method="GET">
  <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">
    Search
  </label>
  <div class="relative">
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
      <ion-icon name="search-outline" class="w-5 h-5 text-gray-500"></ion-icon>
    </div>
    <input type="search" id="default-search" name="search"
      class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
      placeholder="Search Mahasiswa">
    <button type="submit"
      class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
      Search
    </button>
  </div>
</form>
