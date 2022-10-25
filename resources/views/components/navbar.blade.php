  <!-- Navbar Start --}}
  <!-- This example requires Tailwind CSS v2.0+ -->
  <nav x-data="{ open: false }" class="sticky top-0 z-40 bg-white shadow-md dark:bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button"
            class="inline-flex transform items-center justify-center rounded-md p-2 text-gray-700 transition hover:bg-gray-200 hover:text-gray-800 hover:duration-300 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
            aria-controls="mobile-menu" aria-expanded="false" @click="open = ! open">
            <span class="sr-only">open main menu</span>
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex flex-shrink-0 items-center">
            <a class="flex" href="{% url 'home' %}">
              <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                alt="Workflow">
              <span
                class="hidden pl-2 text-xl font-semibold capitalize tracking-wider text-gray-700 dark:text-gray-300 lg:block">Workflow</span>
              <!-- <img class="hidden h-8 w-auto lg:block"
                src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
              -->
            </a>
          </div>
          <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#"
                class="transform rounded-md bg-gray-200 px-3 py-2 text-sm font-medium text-gray-700 transition hover:duration-300 dark:bg-gray-900 dark:text-white"
                aria-current="page">Home</a>
              <a href="#"
                class="transform rounded-md px-3 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:duration-300 dark:text-white dark:hover:bg-gray-900">Contact</a>

              <!-- Categories dropdown  -->
              <div class="relative z-50">
                <div>
                  <button type="button"
                    class="inline-flex transform justify-center rounded-md px-3 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:duration-300 dark:text-white dark:hover:bg-gray-900"
                    id="menu-button" aria-expanded="true" aria-haspopup="true"
                    onclick="toggleNavbar('menu-button-menu')">
                    Categories
                    <!-- Heroicon name: solid/chevron-down -->
                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                      fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>

                <div
                  class="absolute right-0 mt-2 hidden w-56 origin-top-right divide-y divide-gray-300 rounded-md bg-white shadow-lg ring-1 ring-gray-200 ring-opacity-50 focus:outline-none dark:divide-gray-500 dark:bg-gray-800 dark:ring-gray-700"
                  role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                  id="menu-button-menu">
                  <div class="py-1" role="none">
                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                    <a href="{% url 'category' %}"
                      class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                      role="menuitem" tabindex="-1" id="menu-item-0">HTML5</a>
                    <a href="#"
                      class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                      role="menuitem" tabindex="-1" id="menu-item-1">CSS3</a>
                    <a href="#"
                      class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                      role="menuitem" tabindex="-1" id="menu-item-1">Bootstrap4</a>
                    <a href="#"
                      class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                      role="menuitem" tabindex="-1" id="menu-item-1">Bootstrap5</a>
                    <a href="#"
                      class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                      role="menuitem" tabindex="-1" id="menu-item-1">TailwindCSS</a>
                    <a href="#"
                      class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                      role="menuitem" tabindex="-1" id="menu-item-1">JavaScript</a>
                    <a href="#"
                      class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                      role="menuitem" tabindex="-1" id="menu-item-1">Git</a>
                    <a href="#"
                      class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                      role="menuitem" tabindex="-1" id="menu-item-1">Github</a>
                    <a href="#"
                      class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                      role="menuitem" tabindex="-1" id="menu-item-1">Python</a>
                    <a href="#"
                      class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                      role="menuitem" tabindex="-1" id="menu-item-1">Django</a>
                  </div>
                </div>
              </div>
              <!-- Categories dropdown  end -->
            </div>
          </div>
        </div>
        <!-- Right Side of Navbar-->
        <div class="flex items-center justify-between md:flex-1">
          <!-- Sarch Field -->
          <fieldset class="dark:text-coolGray-100 hidden w-full text-gray-700 md:block">
            <label for="Search" class="hidden">Search</label>
            <div class="relative">
              <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <button type="button" title="search" class="p-1 focus:outline-none focus:ring">
                  <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </span>
              <input type="search" name="Search" placeholder="Search..."
                class="dark:bg-coolGray-800 dark:text-coolGray-100 focus:dark:bg-coolGray-900 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 py-2 pl-10 text-sm text-gray-900 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 focus:dark:border-violet-400 sm:text-sm">
            </div>
          </fieldset>
          <!-- Sarch Field end -->
          <!-- Sign up and sign in buttons -->
          <div
            class="absolute inset-y-0 right-0 flex flex-shrink-0 items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <div class="flex space-x-4">
              <a href="{% url 'signin' %}"
                class="transform rounded-md px-3 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:duration-300 dark:text-white dark:hover:bg-gray-900">Sign
                in</a>
              <a href="{% url 'signup' %}"
                class="hidden transform rounded-md bg-indigo-700 px-3 py-2 text-sm font-medium text-white transition ease-out hover:bg-indigo-800 hover:duration-300 md:block">Sign
                up</a>
            </div>
          </div>
          <!-- Sign up and sign in buttons end -->

          <!-- User Profile -->
          <div class="absolute inset-y-0 right-0 hidden items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <button type="button"
              class="transform rounded-full bg-gray-800 p-1 text-gray-400 transition hover:text-white hover:duration-300 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="sr-only">View notifications</span>
              <!-- Heroicon name: outline/bell -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button"
                  class="flex transform rounded-full bg-gray-800 text-sm transition hover:duration-300 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                  id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full"
                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="">
                </button>
              </div>

              <div
                class="absolute right-0 mt-2 w-48 origin-top-right transform rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 transition ease-out hover:duration-300 focus:outline-none"
                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                  id="user-menu-item-0">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                  id="user-menu-item-1">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                  id="user-menu-item-2">Sign out</a>
              </div>
            </div>
          </div>
          <!-- User Profile end -->
        </div>
        <!-- Right Side of Navbar End -->

      </div>

    </div>


    <!-- Mobile menu, show/hide based on menu state. -->
    <!-- TODO: Add a smooth transition effect to below menu. -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden shadow-md" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#"
          class="block rounded-md bg-gray-200 px-3 py-2 text-base font-medium text-gray-700 dark:bg-gray-900 dark:text-white"
          aria-current="page">Home</a>

        <a href="#"
          class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-900">Contact</a>
        <!-- Sarch Field -->
        <fieldset class="dark:text-coolGray-100 w-full text-gray-700">
          <label for="Search" class="hidden">Search</label>
          <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
              <button type="button" title="search" class="p-1 focus:outline-none focus:ring">
                <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd"></path>
                </svg>
              </button>
            </span>
            <input type="search" name="Search" placeholder="Search..."
              class="dark:bg-coolGray-800 dark:text-coolGray-100 focus:dark:bg-coolGray-900 block w-full rounded-lg border border-gray-300 bg-gray-50 px-2 py-3 pl-10 text-base text-gray-900 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 focus:dark:border-violet-400">
          </div>
        </fieldset>
        <!-- Sarch Field end -->
        <!-- categories dropdown -->
        <!-- FIXME -
          ==> categories dropdown button functionality
          ==> categories dropdown button style (make it full width)
         -->
        <div class="relative z-50">
          <div class="">
            <button type="button"
              class="inline-flex w-full transform justify-between rounded-md px-3 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:duration-300 dark:text-white dark:hover:bg-gray-900"
              id="menu-button" aria-expanded="true" aria-haspopup="true"
              onclick="toggleNavbar('categories-menu-button')">
              Categories
              <!-- Heroicon name: solid/chevron-down -->
              <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd" />
              </svg>
            </button>
          </div>

          <!--
                  categories dropdown menu, show/hide based on menu state.

                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
          <div
            class="mt-2 hidden w-full origin-bottom divide-y divide-gray-500 rounded-md bg-gray-50 shadow-inner ring-1 ring-gray-100 ring-opacity-50 focus:outline-none dark:bg-gray-700 dark:ring-gray-500"
            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
            id="categories-menu-button">
            <div class="py-1" role="none">
              <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
              <a href="{% url 'category' %}"
                class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                role="menuitem" tabindex="-1" id="menu-item-0">HTML5</a>
              <a href="#"
                class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                role="menuitem" tabindex="-1" id="menu-item-1">CSS3</a>
              <a href="#"
                class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                role="menuitem" tabindex="-1" id="menu-item-1">Bootstrap4</a>
              <a href="#"
                class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                role="menuitem" tabindex="-1" id="menu-item-1">Bootstrap5</a>
              <a href="#"
                class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                role="menuitem" tabindex="-1" id="menu-item-1">TailwindCSS</a>
              <a href="#"
                class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                role="menuitem" tabindex="-1" id="menu-item-1">JavaScript</a>
              <a href="#"
                class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                role="menuitem" tabindex="-1" id="menu-item-1">Git</a>
              <a href="#"
                class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                role="menuitem" tabindex="-1" id="menu-item-1">Github</a>
              <a href="#"
                class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                role="menuitem" tabindex="-1" id="menu-item-1">Python</a>
              <a href="#"
                class="block transform px-4 py-2 text-sm font-medium text-gray-700 transition hover:bg-gray-200 hover:text-gray-600 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white"
                role="menuitem" tabindex="-1" id="menu-item-1">Django</a>
            </div>
          </div>
        </div>
        <!-- categories dropdown end -->
      </div>
    </div>
  </nav>


  <!-- Navbar End -->
