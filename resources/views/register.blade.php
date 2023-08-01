    @extends('layout.master')

    @section('content')
<section class="bg-blue-100 flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md max-w-md w-full m-5">
        <h2 class="text-2xl font-bold mb-6">Register</h2>
        <form action="/register" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" placeholder="Fanny Angelia" name="name" class="text-center border border-gray-400 rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="linkedin" class="block text-gray-700 text-sm font-bold mb-2">LinkedIn</label>
                <input type="text" id="linkedin" placeholder="https://www.linkedin.com/in/<username>." name="linkedin" class="text-center border border-gray-400 rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" placeholder="********" name="password" class="text-center border border-gray-400 rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number</label>
                <input type="tel" id="phone" placeholder="08123456789" name="phone" class="text-center border border-gray-400 rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Gender</label>
                <div class="my-4">
                    <input type="radio" name="gender" id="L" value="L" required>
                    <label for="L">Male</label>
                    <input type="radio" name="gender" id="P" value="P" required>
                    <label for="P">Female</label>
                </div>
            </div>
            <div class="mb-4">
                <label for="job" class="block text-gray-700 text-sm font-bold mb-2">Job</label>
                <input type="text" id="job" placeholder="Singer" name="job" class="text-center border border-gray-400 rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="profile_photo" class="block text-gray-700 text-sm font-bold mb-2">Upload Photo Profile</label>
                <input type="file" id="profile_photo" name="profile_photo" class="border border-gray-400 rounded w-full py-2 px-3 focus:outline-none focus:border-blue-500" accept="image/*" required>
            </div>
            <div class="mb-4">
                <h1>Price: {{ $price }}</h1>
                <input type="hidden" value="{{ $price }}" name="wallet">
              </div>

              <div class="mb-4">
                <label class="block text-gray-500 text-sm font-bold mb-2" for="money">
                    Nominal :
                </label>
                <div class="relative rounded-md shadow-sm">
                    <input type="number" id="money" name="money"
                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
            </div>

            <div class="flex items-center justify-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register</button>
            </div>
        </form>
    </div>
</section>
@endsection
