<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <livewire:styles />


</head>
<body>

  <!-- Background color split screen for large screens -->
<div class="fixed top-0 left-0 w-1/2 h-full bg-white"></div>
<div class="fixed top-0 right-0 w-1/2 h-full bg-gray-50"></div>
<div class="relative min-h-screen flex flex-col">
  <!-- Navbar -->
  <nav class="flex-shrink-0 bg-indigo-700">
    <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <!-- Logo section -->
        <div class="flex items-center px-2 lg:px-0 xl:w-64">
          <div class="flex-shrink-0">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-on-brand.svg" alt="Workflow logo">
          </div>
        </div>

        <!-- Search section -->
        <livewire:search-project>
        <div class="flex lg:hidden">
          <!-- Mobile menu button -->
          <button class="inline-flex items-center justify-center p-2 rounded-md text-indigo-400 hover:text-white hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 focus:text-white transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
            <!-- Icon when menu is closed. -->
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
            <!-- Icon when menu is open. -->
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <!-- Links section -->
        <div class="hidden lg:block lg:w-80">
          <div class="flex items-center justify-end">
            <div class="flex">
              <a href="{{ URL::to('/') }}" class="px-3 py-2 rounded-md text-sm leading-5 font-medium text-indigo-200 hover:text-white focus:outline-none focus:text-white focus:bg-indigo-600 transition duration-150 ease-in-out">Home</a>
              <a href="{{ URL::to('documentation') }}" class="px-3 py-2 rounded-md text-sm leading-5 font-medium text-indigo-200 hover:text-white focus:outline-none focus:text-white focus:bg-indigo-600 transition duration-150 ease-in-out">Documentation</a>
              <a href="{{ URL::to('support') }}" class="px-3 py-2 rounded-md text-sm leading-5 font-medium text-indigo-200 hover:text-white focus:outline-none focus:text-white focus:bg-indigo-600 transition duration-150 ease-in-out">Support</a>
            </div>
            <!-- Profile dropdown -->
            <div class="ml-4 relative flex-shrink-0">
              <div>
                <button class="flex text-sm rounded-full text-white focus:outline-none focus:shadow-solid transition duration-150 ease-in-out" id="user-menu" aria-label="User menu" aria-haspopup="true">
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80" alt="">
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--
      Mobile menu, toggle classes based on menu state.

      Menu open: "block", Menu closed: "hidden"
    -->
    <div class="hidden lg:hidden">
      <div class="px-2 pt-2 pb-3">
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-indigo-800 focus:outline-none focus:text-indigo-100 focus:bg-indigo-600 transition duration-150 ease-in-out">Dashboard</a>
        <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-indigo-100 hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600 transition duration-150 ease-in-out">Support</a>
      </div>
      <div class="pt-4 pb-3 border-t border-indigo-800">
        <div class="px-2">
          <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-indigo-100 hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600 transition duration-150 ease-in-out">Your Profile</a>
          <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-indigo-100 hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600 transition duration-150 ease-in-out">Settings</a>
          <a href="#" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-indigo-200 hover:text-indigo-100 hover:bg-indigo-600 focus:outline-none focus:text-white focus:bg-indigo-600 transition duration-150 ease-in-out">Sign out</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- 3 column wrapper -->
  <div class="flex-grow w-full max-w-7xl mx-auto xl:px-8 lg:flex">
    <!-- Left sidebar & main wrapper -->
    <div class="flex-1 min-w-0 bg-white xl:flex">
      <!-- Account profile -->
      <div class="xl:flex-shrink-0 xl:w-64 xl:border-r xl:border-gray-200 bg-white">
        <div class="pl-4 pr-6 py-6 sm:pl-6 lg:pl-8 xl:pl-0">
          <div class="flex items-center justify-between">
            <div class="flex-1 space-y-8">
              <div class="space-y-8 sm:space-y-0 sm:flex sm:justify-between sm:items-center xl:block xl:space-y-8">
                <!-- Profile -->
                <div class="flex items-center space-x-3">
                  <div class="flex-shrink-0 h-12 w-12">
                    <img class="h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80" alt="">
                  </div>
                  <div class="space-y-1">
                    <div class="text-sm leading-5 font-medium text-gray-900">Debbie Lewis</div>
                    <a href="#" class="group flex items-center space-x-2.5">
                      <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-500" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99917 0C4.02996 0 0 4.02545 0 8.99143C0 12.9639 2.57853 16.3336 6.15489 17.5225C6.60518 17.6053 6.76927 17.3277 6.76927 17.0892C6.76927 16.8762 6.76153 16.3104 6.75711 15.5603C4.25372 16.1034 3.72553 14.3548 3.72553 14.3548C3.31612 13.316 2.72605 13.0395 2.72605 13.0395C1.9089 12.482 2.78793 12.4931 2.78793 12.4931C3.69127 12.5565 4.16643 13.4198 4.16643 13.4198C4.96921 14.7936 6.27312 14.3968 6.78584 14.1666C6.86761 13.5859 7.10022 13.1896 7.35713 12.965C5.35873 12.7381 3.25756 11.9665 3.25756 8.52116C3.25756 7.53978 3.6084 6.73667 4.18411 6.10854C4.09129 5.88114 3.78244 4.96654 4.27251 3.72904C4.27251 3.72904 5.02778 3.48728 6.74717 4.65082C7.46487 4.45101 8.23506 4.35165 9.00028 4.34779C9.76494 4.35165 10.5346 4.45101 11.2534 4.65082C12.9717 3.48728 13.7258 3.72904 13.7258 3.72904C14.217 4.96654 13.9082 5.88114 13.8159 6.10854C14.3927 6.73667 14.7408 7.53978 14.7408 8.52116C14.7408 11.9753 12.6363 12.7354 10.6318 12.9578C10.9545 13.2355 11.2423 13.7841 11.2423 14.6231C11.2423 15.8247 11.2313 16.7945 11.2313 17.0892C11.2313 17.3299 11.3937 17.6097 11.8501 17.522C15.4237 16.3303 18 12.9628 18 8.99143C18 4.02545 13.97 0 8.99917 0Z" fill="currentcolor" />
                      </svg>
                      <div class="text-sm leading-5 text-gray-500 group-hover:text-gray-900 font-medium">debbielewis</div>
                    </a>
                  </div>
                </div>
                <!-- Action buttons -->
                <div class="flex flex-col space-y-3 sm:space-y-0 sm:space-x-3 sm:flex-row xl:flex-col xl:space-x-0 xl:space-y-3">
                  <span class="inline-flex rounded-md shadow-sm">
                  <a href="#" class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                      New Project
                    </a>
                  </span>
                  <span class="inline-flex rounded-md shadow-sm">
                    <button type="button" class="w-full inline-flex items-center justify-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150">
                      Invite Team
                    </button>
                  </span>
                </div>
              </div>
              <!-- Meta info -->
              <div class="flex flex-col space-y-6 sm:flex-row sm:space-y-0 sm:space-x-8 xl:flex-col xl:space-x-0 xl:space-y-6">
                <div class="flex items-center space-x-2">
                  <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                  <span class="text-sm text-gray-500 leading-5 font-medium">Pro Member</span>
                </div>
                <livewire:counter>
              </div>
            </div>
          </div>
        </div>
      </div>

      @yield('content')

    </div>
    <!-- Activity feed -->
    <div class="bg-gray-50 pr-4 sm:pr-6 lg:pr-8 lg:flex-shrink-0 lg:border-l lg:border-gray-200 xl:pr-0">
      <div class="pl-6 lg:w-80">
        <div class="pt-6 pb-2">
          <h2 class="text-sm leading-5 font-semibold">Activity</h2>
        </div>
        <div>
          <ul class="divide-y divide-gray-200">
            <li class="py-4">
              <div class="flex space-x-3">
                <img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&h=256&q=80" alt="">
                <div class="flex-1 space-y-1">
                  <div class="flex items-center justify-between">
                    <h3 class="text-sm font-medium leading-5">You</h3>
                    <p class="text-sm leading-5 text-gray-500">1h</p>
                  </div>
                  <p class="text-sm leading-5 text-gray-500">Deployed Workcation (2d89f0c8 in master) to production</p>
                </div>
              </div>
            </li>

            <!-- More items... -->
          </ul>
          <div class="py-4 text-sm leading-5 border-t border-gray-200">
            <a href="#" class="text-indigo-600 font-semibold hover:text-indigo-900">View all activity &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- <livewire:create-project> --}}


<livewire:scripts />
</body>
</html>
