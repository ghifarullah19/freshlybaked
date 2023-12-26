@extends('layouts.main')

@section('container')
<section class="bg-[#FAEED1] pb-8">
    <div class="text-center text-black ">
        <h1 class="text-2xl font-bold pt-5 text-black">Menu</h1>
    </div>

    <!-- SearchBar New Version -->
    <form action="/products" method="get" class="flex flex-col md:flex-row gap-3 md:mx-5 lg:mx-10 justify-end">
        <div class="flex flex-col">
            {{-- Search Input --}}
            <div class="flex flex-row">
                <input type="text" id="search" placeholder="Search"
                class="w-full md:w-80 px-3 h-10 rounded-l border-1 border-[#6B240C] focus:outline-none focus:border-[#6B240C]" name="search" value="{{ request("search") }}">
                <button type="submit" class="bg-[#6B240C] text-white rounded-r px-2 md:px-3 py-0 md:py-1">Search</button>
            </div>
            <div class="flex flex-row">
                <div id="search_list"></div>
            </div>
        </div>
        {{-- Dropdown --}}
        <div class="flex flex-col">
            <select id="filter" name="filter"
                class="w-full h-10 border-2 border-amber-950 focus:border-amber-950 text-black rounded mt-3 md:mt-0 md:w-32 px-2 md:px-3 py-0 md:py-1 tracking-wider">
                <option value="name" selected>Name</option>
                <option value="category">Category</option>
            </select>
        </div>
    </form>
    {{-- Produts --}}
    @if ($menus->count() > 0)
    <section class="mx-5 my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
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
                @if ($menu->quantity == 0)
                    <div class="absolute top-0 right-0 text-white bg-red-600 px-2 items-center py-1 m-2 rounded-md text-sm font-medium">
                        OUT OF STOCK
                    </div>
                @else
                    <div class="absolute top-0 right-0 text-white bg-green-600 px-2 items-center py-1 m-2 rounded-md text-sm font-medium">
                        IN STOCK
                    </div>
                @endif
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
                        class="block bg-blue-500 text-white w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button"
                    >
                        Add to Cart
                    </button>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-center text-gray-600 dark:text-gray-400 py-80">No menu found.</p>
    </section>
    @endif
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
