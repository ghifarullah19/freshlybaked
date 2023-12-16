@extends('layouts.main')

@section('container')

<!-- SearchBar -->
<form class="mt-20 mx-5">
    <label for="default-search" class="mb-2 text-sm font-medium text-white sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-white dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search something..." required>
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>

<div class="text-center text-black mt-4">
    <h1 class="text-2xl font-bold text-black">Cake</h1>
</div>


{{-- Produts --}}

<section class="mx-5 my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
     @if ($menus->count() > 0)
        @foreach ($menus as $menu)
            {{-- Border --}}
            <div class="bg-white rounded-lg overflow-hidden shadow-lg ring-4 ring-yellow-700 ring-opacity-40 w-full max-w-[125%]">
                <a href="/products/{{ $menu->slug }}">
                    {{-- Image --}}
                    <div class="relative">
                        <img class="w-full" src="https://source.unsplash.com/350x350?{{ 'bakery' }}" alt="Product Image">
                        <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">IN STOCK
                        </div>
                    </div>
                </a>
                
                {{-- Menu's name --}}
                <div class="p-4">
                    <a href="/products/{{ $menu->slug }}">
                        <h3 class="text-lg font-medium mb-2 text-black">{{ $menu->name }}</h3>
                    </a>
                    
                    {{-- Menu's desc --}}
                    <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae ante
                        vel eros fermentum faucibus sit amet euismod lorem.</p>
                    <div class="flex items-center justify-between">
                        {{-- Menu's price --}}
                        <span class="font-bold text-lg">Rp.{{ $menu->price }}</span>
                        {{-- Button Cart --}}
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-center text-gray-600 dark:text-gray-400">No menu found.</p>
    @endif

</section>

{{-- Version 3 --}}
<section class="mx-5 my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
    @if ($menus->count() > 0)
        @foreach ($menus as $menu)
        {{-- Image --}}
            <div class="w-full max-w-[125%] bg-white shadow rounded">
                <div
                class="h-72 w-full bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center"
                style="background-image: url('https://source.unsplash.com/350x350?{{ 'bakery' }}')"
                >
                <div>
                    <span
                    class="uppercase text-xs bg-green-50 p-0.5 border-green-500 border rounded text-green-700 font-medium select-none"
                    >
                    In Stock
                    </span>
                </div>
                </div>
                {{-- Menu's Category --}}
                <div class="p-4 flex flex-col items-center">
                <p class="text-gray-400 font-light text-xs text-center">Bakery</p>
                {{-- Menu's name --}}
                <h1 class="text-gray-800 text-center mt-1">{{ $menu->name }}</h1>
                <p class="text-center text-gray-800 mt-1 font-bold text-xl">Rp. {{ $menu->price }}</p>

                {{-- Button Quantity --}}
                <div class="inline-flex items-center mt-2">
                    {{-- Button Decrease --}}
                    <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 dark:bg-white   hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-2 focus:outline-none">
                        <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                        </svg>
                    </button>
                    {{-- Input Counter --}}
                    <input type="text" id="quantity-input" data-input-counter class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-white dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="1" data-input-counter-min="1" data-input-counter-max="10" required>
                    {{-- Button Increase --}}
                    <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 dark:bg-white   hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-2 focus:outline-none">
                        <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                    </button>
                </div>
                
                {{-- Button Cart --}}
                <button
                    class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50 mt-4 w-full flex items-center justify-center"
                >
                    Add to Cart
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 ml-2"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                    />
                    </svg>
                </button>
                </div>
            </div>
        @endforeach
    @endif
</section>

@endsection