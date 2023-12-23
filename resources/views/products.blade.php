@extends('layouts.main')

@section('container')
<section>
    <!-- SearchBar New Version -->
    <form action="/products" method="get" class="flex flex-col md:flex-row gap-3 mt-24 md:mx-5 lg:mx-10 justify-end">
        <div class="flex flex-col">
            {{-- Search Input --}}
            <div class="flex flex-row">
                <input type="text" id="search" placeholder="Search someone"
                class="w-full md:w-80 px-3 h-10 rounded-l border-2 border-gray-500 focus:outline-none focus:border-sky-500" name="search" value="{{ request("search") }}">
                <button type="submit" class="bg-blue-500 text-white rounded-r px-2 md:px-3 py-0 md:py-1">Search</button>
            </div>
            <div class="flex flex-row">
                <div id="search_list"></div>
            </div>
        </div>
        {{-- Dropdown --}}
        <div class="flex flex-col">
            <select id="filter" name="filter"
                class="w-full h-10 border-2 border-gray-500 focus:outline-none focus:border-sky-500 text-black rounded mt-3 md:mt-0 md:w-32 px-2 md:px-3 py-0 md:py-1 tracking-wider">
                <option value="name" selected>Name</option>
                <option value="category">Category</option>
            </select>
        </div>
    </form>

    <div class="text-center text-black mt-4">
        <h1 class="text-2xl font-bold text-black">Menu</h1>
    </div>

    {{-- Produts --}}
    <div class="mx-5 my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
        @if ($menus->count() > 0)
            @foreach ($menus as $menu)
                {{-- Border --}}
                <div class="bg-white rounded-lg overflow-hidden shadow-lg ring-4 ring-yellow-700 ring-opacity-40 w-full">
                    <a href="/products/{{ $menu->slug }}">
                        {{-- Image --}}
                        <div class="relative">
                            <img class="w-full" src="https://source.unsplash.com/200x200?{{ $menu->category->name }}" alt="Product Image">
                            @if ($menu->quantity == 0)
                                <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">OUT OF STOCK
                                </div>
                            @else
                                <div class="absolute top-0 right-0 bg-green-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">IN STOCK
                                </div>
                            @endif
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
    </div>
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
