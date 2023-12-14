@extends('layouts.main')

@section('container')

<!-- SearchBar -->
<form class="mt-20 mx-5">
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search something..." required>
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>


{{-- Produts --}}

<section class="mx-5 my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
    @if ($menus->count() > 0)
        @foreach ($menus as $menu)
        <div class="w-full max-w-[125%] bg-gray-50 border border-black rounded-lg shadow">
            <a href="/products/{{ $menu->slug }}">
                @if ($menu->image)
                    <div style="max-height: 350px; overflow: hidden">
                        <img src="{{ asset('storage/' . $menu->image) }}">
                    </div>
                @else
                    <div style="max-height: 350px; overflow: hidden">
                        <img src="https://source.unsplash.com/350x350?{{ 'bakery' }}" alt="Product Image">
                        {{-- <img src="{{ asset('storage/' . $menu->image) }}"> --}}
                    </div>
                @endif
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-sans hover:font-serif tracking-tight text-gray-900">{{ $menu->name }}</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                        {{ Str::ucfirst($menu->category) }}
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <small class="text-2xl font-bold text-gray-900">Rp.{{ $menu->price }}</small>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <p class="text-center text-gray-600 dark:text-gray-400">No menu found.</p>
    @endif
</section>
@endsection