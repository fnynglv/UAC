@extends('layout.master')

@section('content')
<section class="bg-blue-100 flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full m-5">
        @if(session()->has('loginError'))
            <h3 class="text-red-300 text-xl">{{session()->get('loginError')}}</h3>
        @endif
        <h2 class="text-2xl font-bold mb-6">Register</h2>
        <form action="/register" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" class="border border-gray-400 rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="border border-gray-400 rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
                <div class="flex items-center justify-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register</button>
            </div>
        </form>
    </div>
</section>
@endsection
