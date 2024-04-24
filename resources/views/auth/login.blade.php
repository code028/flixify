@extends('layouts.guest')

@section('content')
	<form  method="POST" action="{{route('login')}}" class="w-full px-3 mx-4 sm:mx-0 sm:w-1/2 md:w-1/2 lg:w-1/4 h-auto flex flex-col gap-y-3 justify-center items-center ">
		@csrf
		<div class="w-full flex justify-center">
			<div class="w-full flex flex-col justify-center items-center ">
				<h1 class="font-semibold text-3xl py-4">
					Welcome back
				</h1>
				<h1 class="text-sm italic py-2">
					Sign in to your account
				</h1>
			</div>
		</div>
		<div class="w-full flex flex-col justify-center">
			<label for="login" class="px-4 py-2">Username</label>
			<input type="text" name="login" required class="w-full py-2 px-5 border-b-2 border-black/15 outline-none rounded" placeholder="john.smith">
		</div>
		<div class="w-full flex flex-col justify-center">
			<label for="password" class="px-4 py-2">Password</label>
			<input type="password" name="password" required class="w-full py-2 px-5 border-b-2 border-black/15 outline-none rounded" placeholder="********">
		</div>
		<div class="w-full flex flex-col gap-2 items-end py-5">
			<button type="submit" required class="w-1/2 py-2 bg-blue-500 hover:bg-blue-600 transition duration-200 text-white outline-none rounded font-semibold">
				Login
			</button>
			<div class="w-full flex justify-start">
				<a class="bottom-0 left-0 text-sm italic text-black/50 hover:text-black transition duration-200" href="{{route('auth.register')}}">New member? Create account</a>
			</div>
		</div>
	</form>
@endsection
