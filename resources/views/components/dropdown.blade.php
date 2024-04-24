<div class="flex items-center md:gap-5">
  <div class="hidden md:flex text-[16px] font-semibold">
    {{ Auth::user()->name }}
  </div>
  <div x-data="{ open: false }" class="relative inline-block text-left">
    <div class="flex justify-center items-center">
      <button x-on @click="open = ! open" type="button" class="flex justify-center items-center rounded-full ring-2 hover:ring-3 hover:ring-offset-1 ring-slate-600 dark:ring-white transition duration-300 w-10 h-10" id="menu-button" aria-expanded="true" aria-haspopup="true">
        <img src="{{ Auth::user()->image ? Auth::user()->image : 'https://images.unsplash.com/photo-1474552226712-ac0f0961a954?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" class="w-12 h-10 rounded-full" />
      </button>
    </div>
    <div :class="{ 'block': open, 'hidden': !open }" class="select-none hidden absolute right-0 z-10 mt-2 w-52 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
      <div class="py-1 px-3" role="none">
        @if(Auth::user()->role == "user")
        <span class="text-gray-700 px-4 py-2 text-[13px] rounded flex items-center gap-3 cursor-default" role="menuitem" tabindex="-1" id="menu-item-1">
          <x-lucide-at-sign class="w-5 h-5 " />
          <p class="font-semibold line-clamp-1 cursor-default capitalize">
            {{ Auth::user()->username }}
          </p>
        </span>
        @endif
        @if(Auth::user()->role == "admin" || Auth::user()->role == "moderator")
          <x-nav.profile :active="request()->routeIs('dashboard')" href="{{ route('dashboard') }}" class="text-gray-700 hover:bg-gray-100 px-4 py-2 mb-1 mt-1 text-sm rounded flex items-center gap-3 cursor-pointer " role="menuitem" tabindex="-1" id="menu-item-1">
            <x-lucide-layout-dashboard class="w-5 h-5 " />
            <p class="line-clamp-1">
              Dashboard
            </p>
          </x-nav.profile>
        @endif
        <x-nav.profile :active="request()->routeIs('profile')" href="{{ route('profile', ['id' => Auth::user()->username]) }}" class="hover:bg-gray-100 rounded text-gray-700 px-4 py-2 text-sm flex gap-3" role="menuitem" tabindex="-1" id="menu-item-0">
          <x-lucide-user-round class="w-5 h-5" />
          @if(Auth::user()->role == "user")
            <p>Profile</p>
          @endif
          @if(Auth::user()->role == "admin" || Auth::user()->role == "moderator")
            <p class="capitalize">{{ Auth::user()->role }}</p>
          @endif
        </x-nav.profile>
      </div>
      <div class="py-1 px-3" role="none">
        <a href="#" class="text-gray-700 px-4 py-2 text-sm hover:bg-gray-100 rounded flex gap-3" role="menuitem" tabindex="-1" id="menu-item-2">
          <x-lucide-star class="w-5 h-5" />
          <p>Favorites</p>
        </a>
        <a href="#" class="text-gray-700 px-4 py-2 text-sm hover:bg-gray-100 rounded flex gap-3" role="menuitem" tabindex="-1" id="menu-item-3">
          <x-lucide-clapperboard class="w-5 h-5" />
          <p>Watched</p>
        </a>
        <a href="#" class="text-gray-700 px-4 py-2 text-sm hover:bg-gray-100 rounded flex gap-3" role="menuitem" tabindex="-1" id="menu-item-3">
          <x-lucide-bell-dot class="w-5 h-5" />
          <p>Notifications</p>
        </a>
      </div>
      <div class="py-1 px-3" role="none">
        {{-- <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 rounded " role="menuitem" tabindex="-1" id="menu-item-4">Share</a> --}}
        <form method="POST" action="{{ route('theme') }}" class="w-full text-gray-700 text-sm flex gap-3 cursor-pointer" role="menuitem" tabindex="-1" id="menu-item-3">
            @csrf
            <button type="submit" class="w-full mx-0 flex items-center gap-3 hover:bg-gray-100 rounded px-4 py-2">
                <div :class="{ 'hidden': {{  Auth::user()->theme }}, 'block': !{{  Auth::user()->theme }} }" class="w-full flex items-center gap-3">
                    <x-lucide-sun-moon class="w-5 h-5" />
                    <p>Light theme </p>
                  </div>
                  <div :class="{ 'block': {{ Auth::user()->theme }}, 'hidden': !{{ Auth::user()->theme }} }" class="w-full flex items-center gap-3">
                    <x-lucide-moon class="w-5 h-5" />
                    <p>Dark theme</p>
                </div>
            </button>
        </form>
        <x-nav.profile :active="request()->routeIs('settings')" href="{{ route('settings', ['id' => Auth::user()->username]) }}" class="text-gray-700 px-4 py-2 -mt-2 text-sm hover:bg-gray-100 rounded flex gap-3" role="menuitem" tabindex="-1" id="menu-item-5">
          <x-lucide-settings-2 class="w-5 h-5"/>
          <p>Settings</p>
        </x-nav.profile>
      </div>
      <form method="POST" action="{{ route('logout') }}"  class="py-1 px-3 w-full -mb-[1px] pb-2" role="none">
        <button type="submit" class="w-full hover:bg-black/20 rounded text-gray-700 px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-6">
          @csrf
          <div class="flex gap-3">
            <x-lucide-log-out class="w-5 h-5" />
            <p>Logout</p>
          </div>
        </button>
      </form>
    </div>
  </div>
</div>
