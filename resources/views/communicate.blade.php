@extends('layout.master')

@section('content')
    <div class="flex justify-center items-center h-screen pt-2">
        <div class=class="flex justify-center items-center h-screen pt-2">
            <h1 class="text-3xl text-center font-bold mb-6"> You can communicate with your friend &#x1F604;</h1>
            <h2 class="text-2xl text-center justify-center pt-4 font-bold mb-6">Choose Communication Method</h2>

            <div class="mb-4 p-5">
                <label class="block text-xl text-black-500 text-sm font-bold mb-2">
                    Your Friend name :
                </label>
                {{-- <p class="text-gray-900">{{ $id_userB }}</p> --}}
            </div>

            <div class="mb-6 p-4">
                <label class="text-xl block text-blue-500 text-sm font-bold mb-2 text-center">
                    Choose Communication Method
                </label>
                <div class="flex p-5">
                    <button class="flex-1 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mr-2" onclick="startVideoCall()">
                        Video Call
                    </button>
                    <button class="flex-1 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full" onclick="startVoiceCall()">
                        Voice Call
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function startVideoCall() {
            alert("Starting video call...");
        }

        function startVoiceCall() {
            alert("Starting voice call...");
        }
    </script>
@endsection
