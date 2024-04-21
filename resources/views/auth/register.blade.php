@extends('layouts.guest')

@section('content')
    {{-- action="{{route('register')}}" --}}
	<form method="POST" class="w-full mx-4 sm:mx-0 sm:w-1/2 md:w-1/2 lg:w-1/4 h-auto flex flex-col gap-y-3 justify-center items-center bg-slate-50">
		@csrf
		<div class="w-full flex justify-center">
			<div class="w-full flex flex-col justify-center items-center ">
				<h1 class="font-semibold text-3xl py-4">
					Create Account
				</h1>
				<h1 class="text-sm italic py-2">
					Please enter valid information
				</h1>
			</div>
		</div>
        <div class="w-full flex flex-col justify-center">
			<label for="name" class="px-4 py-2">Your name</label>
			<input type="text" name="name" required class="w-full py-2 px-5 border-b-2 border-black/15 outline-none rounded" placeholder="John Smith">
		</div>
		<div class="w-full flex flex-col justify-center">
			<label for="username" class="px-4 py-2">Username</label>
			<input type="text" name="username" required class="w-full py-2 px-5 border-b-2 border-black/15 outline-none rounded" placeholder="john.smith.{{date("y")}}">
		</div>
		<div class="w-full flex flex-col justify-center">
			<label for="email" class="px-4 py-2">Email</label>
			<input type="email" name="email" required class="w-full py-2 px-5 border-b-2 border-black/15 outline-none rounded" placeholder="john.doe@company.com">
		</div>
		<div class="w-full flex flex-col justify-center">
			<label for="password" class="px-4 py-2">Password</label>
			<input type="password" name="password" required class="w-full py-2 px-5 border-b-2 border-black/15 outline-none rounded" placeholder="********">
		</div>
		<div class="w-full flex flex-col gap-2 items-end py-5">
			<button type="submit" required class="w-1/2 py-2 bg-blue-500 hover:bg-blue-600 transition duration-200 text-white outline-none rounded font-semibold">
				Register
			</button>
			<div class="w-full flex justify-start">
				<a class="bottom-0 left-0 text-sm italic text-black/50 hover:text-black transition duration-200" href="{{route('auth.login')}}">Already have account? Login</a>
			</div>
		</div>
	</form>
@endsection
