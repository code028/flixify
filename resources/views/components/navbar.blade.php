<div class="text-black text-2xl w-full h-full flex justify-between items-center px-6">
    <div>
        Navbar
    </div>
    <div class="flex gap-2 justify-center items-center">
        <div class="text-[18px] font-semibold capitalize cursor-pointer">
            {{ Auth::user()->username }}
        </div>
        <form action="{{ route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="py-2 px-4 bg-red-500 rounded-md">
                <x-lucide-log-out class="w-5 h-5"/>
            </button>
        </form>
    </div>
</div>
