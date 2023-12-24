@extends('layouts.main')

@section('container')
<section class="mt-16">
    <div class="container mx-auto p-4 sm:p-8 flex flex-col sm:flex-row my-12">

        <!-- Personal Information-->
        <div class="w-full sm:w-1/2 pr-0 sm:pr-8 mb-4 sm:mb-0">
            <img class="rounded-full h-72 w-72 object-cover mb-2" src="https://via.placeholder.com/150" alt="Profile Image">
                <span class="font-bold text-xl">Udin Petot Supetot</span>

            <div class="mt-4 space-y-4">
                <div class="text-gray-500">
                    <span class="font-semibold">Username :</span> {{ auth()->user()->username }}
                </div>
                <div class="text-gray-500">
                    <span class="font-semibold">Email :</span> {{ auth()->user()->email }}
                </div>
                <div class="text-gray-500">
                    <span class="font-semibold">Phone :</span> {{ auth()->user()->email }}
                </div>
                <div class="text-gray-500">
                    <span class="font-semibold">Birthdate :</span> {{ auth()->user()->email }}
                </div>
                <div class="text-gray-500">
                    <span class="font-semibold">Address :</span> {{ auth()->user()->email }}
                </div>

                <div class="mt-8">
                    <a href="/ubahprofile">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit Profile
                        </button>
                    </a>
                </div>
            </div>

        </div>

        <!-- Product List -->
        <div class="w-full sm:w-1/2 pl-0 sm:pl-8">
            <h2 class="text-2xl font-bold mb-4">Products Bought</h2>

            <!-- Product Card -->
            <div class="bg-white max-w-md rounded overflow-hidden shadow-lg mb-4">
                <div class="p-4">
                    <a href="#" class="font-bold text-xl mb-2 text-blue-500 hover:underline">Product A</a>
                    <div class="flex items-center">
                        <p class="text-gray-700 text-base">Total quantity :</p>
                        <span class="text-gray-700 text-base ml-1">1</span>
                      </div>
                </div>
            </div>

            <div class="bg-white max-w-md rounded overflow-hidden shadow-lg mb-4">
                <div class="p-4">
                    <a href="#" class="font-bold text-xl mb-2 text-blue-500 hover:underline">Product B</a>
                    <div class="flex items-center">
                        <p class="text-gray-700 text-base">Total quantity :</p>
                        <span class="text-gray-700 text-base ml-1">1</span>
                      </div>
                </div>
            </div>

            <div class="bg-white max-w-md rounded overflow-hidden shadow-lg mb-4">
                <div class="p-4">
                    <a href="#" class="font-bold text-xl mb-2 text-blue-500 hover:underline">Product C</a>
                    <div class="flex items-center">
                        <p class="text-gray-700 text-base">Total quantity :</p>
                        <span class="text-gray-700 text-base ml-1">1</span>
                      </div>
                </div>
            </div>

            <div class="bg-white max-w-md rounded overflow-hidden shadow-lg mb-4">
                <div class="p-4">
                    <a href="#" class="font-bold text-xl mb-2 text-blue-500 hover:underline">Product D</a>
                    <div class="flex items-center">
                        <p class="text-gray-700 text-base">Total quantity :</p>
                        <span class="text-gray-700 text-base ml-1">1</span>
                      </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection