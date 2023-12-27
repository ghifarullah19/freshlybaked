@extends('layouts.main')

@section('container')
<section class="mt-16">
    <div class="container mx-auto p-4 sm:p-8 flex flex-col sm:flex-row my-12">

        <!-- Personal Information-->
        <div class="sm:w-1/3 pr-0 sm:pr-8 mb-4 sm:mb-0">
            <img class="rounded-full h-60 w-60 object-cover mb-2" src="/img/nophoto.png" alt="Profile Image">
                <span class="font-bold text-xl">{{ auth()->user()->name }}</span>
            <div class="mt-2">
                <a href="/ubahprofile">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 rounded h-8 w-full">
                        Edit Profile
                    </button>
                </a>
            </div>
            <div class="mt-4 space-y-2">
                <div class="text-gray-500">
                    <span class="font-semibold">Username :</span> {{ auth()->user()->username }}
                </div>
                <div class="text-gray-500">
                    <span class="font-semibold">Email :</span> {{ auth()->user()->email }}
                </div>
                <div class="text-gray-500">
                    <span class="font-semibold">Phone :</span> {{ auth()->user()->phone_number }}
                </div>
                <div class="text-gray-500">
                    <span class="font-semibold">Birthdate :</span> {{ auth()->user()->date_of_birth }}
                </div>
                <div class="text-gray-500">
                    <span class="font-semibold">Address :</span> {{ auth()->user()->address }}
                </div>

            </div>

        </div>

        <!-- Product List -->
        <div class="w-full h-full sm:w-2/3 pl-0">
            <h2 class="text-2xl font-bold mb-4">Products Bought</h2>
                
            <div class="flex flex-col flex-wrap justify-between">
                @foreach ($cart_details as $detail)
                    <!-- Product Card -->
                    <div class="bg-white flex flex-row justify-between w-full rounded overflow-hidden shadow-md mb-4">
                        <div class="p-4 flex flex-col">
                            <a href="#" class="font-bold text-xl mb-2 text-blue-500 hover:underline">
                                {{ $detail->menu->name }}
                            </a>
                            <div class="flex items-center">
                                <p class="text-gray-700 text-base">Total quantity :</p>
                                <span class="text-gray-700 text-base ml-1">{{ $detail->quantity }}</span>
                            </div>
                            <div class="flex items-center">
                                <p class="text-gray-700 text-base">Date :</p>
                                <span class="text-gray-700 text-base ml-1">{{ $detail->cart->date }}</span>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col bg-slate-600">
                            <div class="flex flex-row justify-end">
                                {{-- {{ dd($detail->menu->category->name) }} --}}
                                @if ($detail->menu->category->id == 1)
                                    <div class="bg-yellow-300 rounded-full w-[10px] h-[10px]"></div>
                                @endif
                                @if ($detail->menu->category->id == 2)
                                    <div class="bg-amber-700 rounded-full w-[10px] h-[10px]"></div>
                                @endif
                                @if ($detail->menu->category->id == 3)
                                    <div class="bg-orange-600 rounded-full w-[10px] h-[10px]"></div>
                                @endif
                            </div>
                            <img class="rounded-full h-20 w-20 object-cover mb-2" src="/img/nophoto.png" alt="Profile Image">
                        </div>
                    </div>
                @endforeach
            </div>
                
        </div>
    </div>
</section>

@endsection