<nav x-data="{ open: false }" class="sticky top-0 z-40 bg-white border-b border-gray-100 shadow-sm">
  <!-- Primary Navigation Menu -->
  <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="flex justify-between h-16">
      <div class="flex">
        <!-- Logo -->
        <div class="flex items-center shrink-0">
          <a href="{{ route('home') }}">
            <x-jet-application-mark class="block w-auto h-9" />
          </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
          <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
            {{ __('Home') }}
          </x-jet-nav-link>
          <x-jet-nav-link href="{{ route('contact-us') }}" :active="request()->routeIs('contact-us')">
            {{ __('Contact Us') }}
          </x-jet-nav-link>
          <x-jet-nav-link href="{{ route('search') }}" :active="request()->routeIs('search')">
            {{ __('Search') }}
          </x-jet-nav-link>
        </div>
      </div>

      <div class="hidden sm:ml-6 sm:flex sm:items-center">
        <!-- Sarch Field -->
        <div>
          <fieldset class="text-gray-700">
            <label for="Search" class="hidden">Search</label>
            <div class="relative">
              <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                <button type="button" title="search" class="p-1 focus:outline-none focus:ring">
                  <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </span>
              <input type="search" name="Search" placeholder="Search..."
                class="block w-full p-2 py-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 focus:dark:border-violet-400">
            </div>
          </fieldset>
        </div>
        <!-- Sarch Field end -->


        <!-- Settings Dropdown -->
        @auth
          <div class="relative ml-3">
            <x-jet-dropdown align="right" width="48">
              <x-slot name="trigger">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                  <button
                    class="flex text-sm transition border-2 border-transparent rounded-full focus:border-gray-300 focus:outline-none">
                    <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                      alt="{{ Auth::user()->username }}" />
                  </button>
                @else
                  <span class="inline-flex rounded-md">
                    <button type="button"
                      class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
                      {{ Auth::user()->username }}

                      <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd" />
                      </svg>
                    </button>
                  </span>
                @endif
              </x-slot>

              <x-slot name="content">
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                  {{ __('Manage Account') }}
                </div>

                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                  {{ __('Profile') }}
                </x-jet-dropdown-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                  <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                    {{ __('API Tokens') }}
                  </x-jet-dropdown-link>
                @endif

                <div class="border-t border-gray-100"></div>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                  @csrf

                  <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                    {{ __('Log Out') }}
                  </x-jet-dropdown-link>
                </form>
              </x-slot>
            </x-jet-dropdown>
          </div>
        @else
          <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <a
              href="{{ route('login') }} "class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 transition hover:text-gray-700 focus:outline-none focus:text-gray-700">
              {{ __('Login') }}
            </a>
            <a
              href="{{ route('register') }} "class="inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-white text-gray-500 transition bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none">
              {{ __('Register') }}
            </a>
          </div>
        @endauth
      </div>
      <!-- Hamburger -->
      <div class="flex items-center -mr-2 sm:hidden">
        <button @click="open = ! open"
          class="inline-flex items-center justify-center p-2 text-gray-400 transition rounded-md hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none">
          <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
      <x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
        {{ __('Home') }}
      </x-jet-responsive-nav-link>
      <x-jet-responsive-nav-link href="{{ route('contact-us') }}" :active="request()->routeIs('contact-us')">
        {{ __('Contact Us') }}
      </x-jet-responsive-nav-link>
      <x-jet-responsive-nav-link href="{{ route('search') }}" :active="request()->routeIs('search')">
        {{ __('Search') }}
      </x-jet-responsive-nav-link>
    </div>

    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-gray-200">
      <div class="flex items-center px-4">
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
          <div class="mr-3 shrink-0">
            <img class="object-cover w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
              alt="{{ Auth::user()->username }}" />
          </div>
        @endif
        @auth

          <div>
            <div class="text-base font-medium text-gray-800">{{ Auth::user()->username }}</div>
            <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
          </div>
        @endauth
      </div>

      <div class="mt-3 space-y-1">
        <!-- Account Management -->
        <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
          {{ __('Profile') }}
        </x-jet-responsive-nav-link>

        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
          <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
            {{ __('API Tokens') }}
          </x-jet-responsive-nav-link>
        @endif

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}" x-data>
          @csrf

          <x-jet-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
            {{ __('Log Out') }}
          </x-jet-responsive-nav-link>
        </form>

        <!-- Team Management -->
        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
          <div class="border-t border-gray-200"></div>

          <div class="block px-4 py-2 text-xs text-gray-400">
            {{ __('Manage Team') }}
          </div>

          <!-- Team Settings -->
          <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
            :active="request()->routeIs('teams.show')">
            {{ __('Team Settings') }}
          </x-jet-responsive-nav-link>

          @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
            <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
              {{ __('Create New Team') }}
            </x-jet-responsive-nav-link>
          @endcan

          <div class="border-t border-gray-200"></div>

          <!-- Team Switcher -->
          <div class="block px-4 py-2 text-xs text-gray-400">
            {{ __('Switch Teams') }}
          </div>

          @foreach (Auth::user()->allTeams() as $team)
            <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
          @endforeach
        @endif
      </div>
    </div>
  </div>
</nav>
