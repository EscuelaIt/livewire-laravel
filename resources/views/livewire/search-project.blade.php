<div class="flex-1 flex justify-center lg:justify-end">
    <div class="w-full px-2 lg:px-6">
      <label for="search" class="sr-only">Search projects</label>
      <div class="relative text-indigo-300 focus-within:text-gray-400">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
          </svg>
        </div>
        <input wire:model="search" id="search" class="block w-full pl-10 pr-3 py-2 border border-transparent rounded-md leading-5 bg-indigo-400 bg-opacity-25 text-indigo-300 placeholder-indigo-300 focus:outline-none focus:bg-white focus:placeholder-gray-400 focus:text-gray-900 sm:text-sm transition duration-150 ease-in-out" placeholder="Search projects" type="search">
      </div>
    </div>
  </div>