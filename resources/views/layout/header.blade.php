<header class="bg-blue-300 py-4">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between">
        <div class="text-white font-bold text-xl justify-item-center">ConnectFriend</div>

        <ul class="flex space-x-4 font-bold pb-2 text-black">
            @if(auth()->check())
                <li><a href="/home">Home</a></li>
                {{-- <li><a href="/profile" class="text-white">Profile</a></li> --}}
                <li><a href="/wishlist">Wishlist</a></li>
                <li><a href="/communicate">Communicate</a></li>
                <li><a href="/logout">Log Out</a></li>
            @else
                <li><a href="/register">Register</a></li>
                <li><a href="/login">Login</a></li>
            @endif
        </ul>
        </nav>
    </div>
</header>
