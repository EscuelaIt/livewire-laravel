<form wire:submit.prevent="submit" id="modal-project">

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
          <section class="absolute inset-y-0 pl-16 max-w-full right-0 flex">
            <div class="w-screen max-w-md">
              <div class="h-full divide-y divide-gray-200 flex flex-col bg-white shadow-xl">
                <div class="flex-1 h-0 overflow-y-auto">
                  <header class="space-y-1 py-6 px-4 bg-indigo-700 sm:px-6">
                    <div class="flex items-center justify-between space-x-3">
                      <h2 class="text-lg leading-7 font-medium text-white">
                        New Project
                      </h2>
                      <div class="h-7 flex items-center">
                        <a href="#" wire:click="closeModal" aria-label="Close panel" class="text-indigo-200 hover:text-white transition ease-in-out duration-150">
                          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                        </a>
                      </div>
                    </div>
                    <div>
                      <p class="text-sm leading-5 text-indigo-300">
                        Get started by filling in the information below to create your new project.
                      </p>
                    </div>
                  </header>
                  <div class="flex-1 flex flex-col justify-between">
                    <div class="px-4 divide-y divide-gray-200 sm:px-6">
                      <div class="space-y-6 pt-6 pb-5">
                        <div class="space-y-1">
                          <label for="project_name" class="block text-sm font-medium leading-5 text-gray-900">
                            Project name
                          </label>
                          <div class="relative rounded-md shadow-sm">
                            <input wire:model="name" class="form-input block w-full sm:text-sm sm:leading-5 transition ease-in-out duration-150">
                            @error('name') <span class="text-red-400">{{ $message }}</span> @enderror
                          </div>
                        </div>
                        <div class="space-y-1">
                            <label for="project_name" class="block text-sm font-medium leading-5 text-gray-900">
                              Category
                            </label>
                            <div class="relative rounded-md shadow-sm">
                              <input  wire:model="category"  class="form-input block w-full sm:text-sm sm:leading-5 transition ease-in-out duration-150">
                              @error('category') <span class="text-red-400">{{ $message }}</span> @enderror
                            </div>
                          </div>
                          <div class="space-y-1">
                            <label for="project_name" class="block text-sm font-medium leading-5 text-gray-900">
                              Repo
                            </label>
                            <div class="relative rounded-md shadow-sm">
                              <input  wire:model="repo"  class="form-input block w-full sm:text-sm sm:leading-5 transition ease-in-out duration-150">
                              @error('repo') <span class="text-red-400">{{ $message }}</span> @enderror
                            </div>
                          </div>
                          <div class="space-y-1">
                            <label for="project_name" class="block text-sm font-medium leading-5 text-gray-900">
                              Uri
                            </label>
                            <div class="relative rounded-md shadow-sm">
                              <input  wire:model="uri"  class="form-input block w-full sm:text-sm sm:leading-5 transition ease-in-out duration-150">
                              @error('uri') <span class="text-red-400">{{ $message }}</span> @enderror
                            </div>
                          </div>
                          <div class="space-y-1">
                            <label for="project_name" class="block text-sm font-medium leading-5 text-gray-900">
                              Country
                            </label>
                            <div class="relative rounded-md shadow-sm">
                              <input  wire:model="country"  class="form-input block w-full sm:text-sm sm:leading-5 transition ease-in-out duration-150">
                              @error('country') <span class="text-red-400">{{ $message }}</span> @enderror
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex-shrink-0 px-4 py-4 space-x-4 flex justify-end">
                  <span class="inline-flex rounded-md shadow-sm">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                      Save
                    </button>
                  </span>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </form>
    