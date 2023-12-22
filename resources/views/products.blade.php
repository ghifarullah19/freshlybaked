@extends('layouts.main')

@section('container')

<!-- SearchBar -->
<form class="mt-20 mx-5">
    <label for="default-search" class="mb-2 text-sm font-medium text-white sr-only dark:text-white">Search</label>
    <div class="relative">
        {{-- Search --}}
        <form action="/products" method="get">
            {{-- Container Search --}}
            <div class="flex flex-row gap-3 h-[40px]">
                {{-- Filter --}}
                <div class="flex flex-col">
                    {{-- Label Filter --}}
                    <span>Filter</span>
                    {{-- Dropdown --}}
                    <select name="filter" id="filter" class="rounded-lg p-1">
                        <option value="name">Name</option>
                        <option value="category">Category</option>
                    </select>
                </div>

                {{-- Search Input --}}
                <div class="flex flex-col w-full">
                    <div class="flex flex-row">
                        <input type="search" id="search" class="block w-full p-4 ps-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-white dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search something..." name="search" value="{{ request("search") }}">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ml-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                    {{-- Button Search --}}
                    <div class="flex flex-row">
                        <div class="ps-4" id="search_list"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</form>

<!-- SearchBar New Version Not Responding -->
<form class="flex flex-col md:flex-row gap-3 mt-28 mx-2 md:mx-5 lg:mx-10 justify-end">
    <div class="flex">
        {{-- Search Input --}}
        <input type="text" placeholder="Search someone"
            class="w-full md:w-80 px-3 h-10 rounded-l border-2 border-gray-500 focus:outline-none focus:border-sky-500">
        <button type="submit" class="bg-blue-500 text-white rounded-r px-2 md:px-3 py-0 md:py-1">Search</button>
    </div>
    {{-- Dropdown --}}
    <select id="filter" name="filter"
        class="w-full h-10 border-2 border-gray-500 focus:outline-none focus:border-sky-500 text-black rounded mt-3 md:mt-0 md:w-32 px-2 md:px-3 py-0 md:py-1 tracking-wider">
        <option value="name" selected>Name</option>
        <option value="category">Category</option>
    </select>
</form>


<div class="text-center text-black mt-4">
    <h1 class="text-2xl font-bold text-black">Menu</h1>
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
                        <img class="w-full" src="https://source.unsplash.com/350x350?{{ $menu->category->name }}" alt="Product Image">
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
                    <a href="/products?category={{ $menu->category->slug }}">
                        <p class="text-gray-600 text-sm mb-4">{{ $menu->category->name }}</p>
                    </a>
                    <div class="flex items-center justify-between">
                        {{-- Menu's price --}}
                        <span class="font-bold text-lg">Rp.{{ $menu->price }}</span>
                        {{-- Button Cart --}}
                        <button onclick="window.location.href='/products/{{ $menu->slug }}'" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
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

{{-- Products --}}
<section class="mx-5 my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
    @if ($menus->count() > 0)
        @foreach ($menus as $menu)
            <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                {{-- Image --}}
                <div class="relative mx-4 mt-4 h-96 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
                    <a href="/products/{{ $menu->slug }}">
                        <img
                            src="https://source.unsplash.com/350x350?{{ $menu->category->name }}"
                            class="h-full w-full object-cover"
                        />
                    </a>
                </div>
                <div class="p-6">
                    <div class="mb-2 flex items-center justify-between">
                        <a href="/products/{{ $menu->slug }}">
                            <p class="block font-sans text-lg font-bold leading-relaxed text-blue-gray-900 antialiased">
                            {{ $menu->name }}
                            </p>
                        </a>
                        {{-- Menu's price --}}
                            <p class="block font-sans text-base font-bold leading-relaxed text-blue-gray-900 antialiased">
                            Rp.{{ $menu->price }}
                            </p>
                    </div>
                    {{-- Menu's category/desc --}}
                    <a href="/products?category={{ $menu->category->slug }}">
                        <p class="block font-sans text-sm font-normal leading-normal text-gray-900 antialiased opacity-90">
                            {{ $menu->category->name }}
                        </p>
                    </a>
                </div>
                {{-- Button --}}
                <div class="p-6 pt-0">
                    <button onclick="window.location.href='/products/{{ $menu->slug }}'"
                        class="block w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button"
                    >
                        Add to Cart
                    </button>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-center text-gray-600 dark:text-gray-400">No menu found.</p>
    @endif
</section>


@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#search").on('keyup', function () {
            var value = $(this).val().toLowerCase();
            if (value == "") {
                value = "all";
            } else {
                value = value;
            }
            $.ajax({
                url: "search",
                method: 'GET',
                data: {
                    'search': value
                },
                success: function (data) {
                    $("#search_list").html(data);
                }
            })
        })
    })
</script>
