<div class="flex items-center">
    <div x-data="{ open: false }" class="relative inline-block text-left">
        <div class="flex justify-center items-center">
            <button x-on @click="open = ! open" type="button" class="flex justify-center items-center w-10 h-10" id="menu-button" aria-expanded="true" aria-haspopup="true">
                <x-lucide-gantt-chart class="w-8 h-8" />
            </button>
        </div>
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden absolute right-0 z-10 mt-2 w-52 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black dark:ring-white ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="py-1 px-3" role="none">
                <x-nav.profile :active="request()->routeIs('index')" href="{{ route('index') }}" class="text-gray-700 px-4 py-2 my-1 text-[13px] rounded flex items-center gap-3 hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-1">
                    <x-lucide-chevron-right class="w-5 h-5 " />
                    <p class="font-semibold line-clamp-1 capitalize cursor-pointer">
                        Home
                    </p>
                </x-nav.profile>
                <x-nav.profile :active="request()->routeIs('page.service')" href="{{ route('page.service') }}" class="text-gray-700 px-4 py-2 my-1 text-[13px] rounded flex items-center gap-3 hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-1">
                    <x-lucide-chevron-right class="w-5 h-5 " />
                    <p class="font-semibold line-clamp-1 capitalize cursor-pointer">
                        Service
                    </p>
                </x-nav.profile>
                <x-nav.profile :active="request()->routeIs('page.about')" href="{{ route('page.about') }}" class="text-gray-700 px-4 py-2 my-1 text-[13px] rounded flex items-center gap-3 hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-1">
                    <x-lucide-chevron-right class="w-5 h-5 " />
                    <p class="font-semibold line-clamp-1 capitalize cursor-pointer">
                        About
                    </p>
                </x-nav.profile>
                <x-nav.profile :active="request()->routeIs('page.contact')" href="{{ route('page.contact') }}" class="text-gray-700 px-4 py-2 my-1 text-[13px] rounded flex items-center gap-3 hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-1">
                    <x-lucide-chevron-right class="w-5 h-5 " />
                    <p class="font-semibold line-clamp-1 capitalize cursor-pointer">
                        Contact
                    </p>
                </x-nav.profile>
            </div>
            <div class="py-1 px-3" role="none" x-data="{ theme: false }">
                <x-nav.profile :active="request()->routeIs('profile')" href="{{ route('profile', ['id' => Auth::user()->username]) }}" class="my-1 hover:bg-gray-100 rounded text-gray-700 px-4 py-2 text-sm flex gap-3" role="menuitem" tabindex="-1" id="menu-item-0">
                    <x-lucide-user-round class="w-5 h-5" />
                    @if (Auth::user()->role == 'user')
                    <p>Profile</p>
                    @endif
                    @if (Auth::user()->role == 'admin' || Auth::user()->role == 'moderator')
                    <p class="capitalize">{{ Auth::user()->role }}</p>
                    @endif
                </x-nav.profile>
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
                <x-nav.profile :active="request()->routeIs('settings')" href="{{ route('settings', ['id' => Auth::user()->username]) }}" class="-mt-2 text-gray-700 px-4 py-2 text-sm hover:bg-gray-100 rounded flex gap-3" role="menuitem" tabindex="-1" id="menu-item-5">
                    <x-lucide-settings-2 class="w-5 h-5" />
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
