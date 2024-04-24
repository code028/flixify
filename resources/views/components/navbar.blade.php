
<div class="text-black dark:text-white text-2xl w-full h-full flex justify-around items-center px-8 sm:px-16 md:px-6">
    <div class="w-full md:w-fit flex justify-between items-center md:gap-x-20">
        <a href="{{ route('index') }}" class="text-xl stroke-slate-950 hover:stroke-2 italic text-black dark:text-white font-extrabold">
            Flixify
        </a>
        <div class="hidden md:flex gap-5 justify-start items-center">
            <div class="flex gap-3 items-center justify-center">
                <x-nav.link href="{{ route('index') }}" class="text-[16px] font-medium" :active="request()->routeIs('index')">Home</x-nav.link>
                <x-nav.link href="{{ route('page.service') }}" class="text-[16px] font-medium" :active="request()->routeIs('page.service')">Service</x-nav.link>
                <x-nav.link href="{{ route('page.contact') }}" class="text-[16px] font-medium" :active="request()->routeIs('page.contact')">Contact</x-nav.link>
                <x-nav.link href="{{ route('page.about') }}" class="text-[16px] font-medium" :active="request()->routeIs('page.about')">About</x-nav.link>
            </div>
        </div>
        {{-- No need to hamburg icon when it is solved with icon menu
            <button class="hidden justify-center items-center">
                <x-lucide-align-right class="w-8 h-8" />
            </button>
        --}}
    </div>
    <div class="flex gap-3">
        <div class="md:hidden flex">
            @include('components.nav.dropdown-links')
        </div>
        <div class="hidden md:flex">
            @include('components.dropdown')
        </div>
    </div>
</div>
