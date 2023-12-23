@extends('layouts.main')

@section('container')
<section class="mt-16">
    <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="max-w-4xl mx-auto">
            @if (Auth()->user()->image != null)
            <div class="rounded-full bg-gray-100 mx-auto h-40 w-40 flex items-center justify-center">
                <img class="rounded-full h-40 w-40" src="{{ asset('storage/' . Auth()->user()->image) }}" alt="">
            </div>
            @else
            <div class="rounded-full bg-gray-100 mx-auto h-40 w-40 flex items-center justify-center">
                <img class="rounded-full h-40 w-40" src="/img/nophoto.png" alt="">
            </div>
            @endif
            <div class="mt-8 text-center">
                <div class="text-2xl font-semibold">Profile Information</div>
                <div class="mt-4 space-y-4">
                    <div class="text-gray-500">
                        <span class="font-semibold">Full Name :</span> {{ auth()->user()->name }}
                    </div>
                    <div class="text-gray-500">
                        <span class="font-semibold">Userame :</span> {{ auth()->user()->username }}
                    </div>
                    <div class="text-gray-500">
                        <span class="font-semibold">Email :</span> {{ auth()->user()->email }}
                    </div>
                    <div class="text-gray-500">
                        <span class="font-semibold">Phone :</span> {{ auth()->user()->phone_number }}
                    </div>
                </div>
            </div>
            <div class="mt-8 text-center">
                <div class="text-2xl font-semibold">Personal Information</div>
                <div class="mt-4 space-y-4">
                    <div class="text-gray-500">
                        <span class="font-semibold">Birthdate :</span> {{ auth()->user()->date_of_birth }}
                    </div>
                    <div class="text-gray-500">
                        <span class="font-semibold">Adress :</span> {{ auth()->user()->address }}
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="/ubahprofile">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Edit Profile
                    </button>
                </a>
            </div>
</section>

@endsection