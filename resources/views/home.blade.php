@extends('layout.master')

@section('content')
<div class="justify-content-left m-3">
    <div class="max-w-3xl w-full mx-auto w-full bg-white shadow-lg rounded-lg ">
        <div class="grid grid-cols-2 gap-4">
            {{-- @foreach($randomUser as $user) --}}
            <div class="bg-white rounded-lg shadow-md p-4">
                <a href="/info">
                    <h1>image</h1>
                    {{-- <img src="{{ asset('storage/'.$user->photo)}}" alt="{{ $user->name }}" class="w-full h-40 object-cover mb-4"> --}}
                </a>
                {{-- <p class="font-semibold">{{ $user->name }}</p>
                <p>Job: {{ $user->job }}</p> --}}
                <form action="/thumb" method="post">
                    @csrf
                    {{-- <input type="hidden" name="randomID" value="{{$user->id}}"> --}}
                    <button class="mt-5 bg-blue-500 hover:bg-blue-600 text-white rounded-full p-2 shadow-lg">
                        Thumb Up
                    </button>
                </form>
            </div>
            {{-- @endforeach --}}
        </div>
    </div>
</div>
@endsection
