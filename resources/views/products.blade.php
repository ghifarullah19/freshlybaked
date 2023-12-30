@extends('layouts.main')

@section('container')
<section class="bg-[#FAEED1] pb-8">
    <div class="text-center text-black ">
        <h1 class="text-2xl font-bold pt-5 text-black">Menu</h1>
    </div>

    <div class="mx-auto justify-between align-bottom flex flex-row bg-gray">
        <div class="mx-10 flex flex-col">
            <div class="flex flex-row gap-2">
                @foreach ($categories as $category)
                    @if ($category->id != 4)
                        <div class="flex flex-col">
                            <form action="/products">
                                <input type="hidden" name="category" value="{{ $category->name }}">
                                <button class="mr-1 block text-white bg-[#994D1C] hover:bg-[#E48F45] focus:ring-4 focus:outline-none focus:ring-[#994D1C] font-medium rounded-lg text-sm px-5 py-2.5 text-center h-fit" type="submit">
                                    {{ ucwords($category->name) }}
                                </button>
                            </form>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="flex flex-col">
            <!-- SearchBar New Version -->
            <form action="/products" method="get" class="flex flex-col md:flex-row gap-3 md:mx-5 lg:mx-10 justify-end">
                <div class="flex flex-col">
                    {{-- Search Input --}}
                    <div class="flex flex-row">
                        <input type="text" id="search" placeholder="Search"
                        class="w-full md:w-80 px-3 h-10 rounded-l border-1 border-[#6B240C] focus:outline-none focus:border-[#6B240C]" name="search" value="{{ request("search") }}">
                        <button type="submit" class="bg-[#6B240C] text-white rounded-r px-2 md:px-3 py-0 md:py-1">Search</button>
                    </div>
                    <div class="flex flex-row w-full">
                        <div id="search_list" class="bg-white rounded-b-xl border-b-2 absolute z-10">
                        </div>
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
        </div>
    </div>
    {{-- Produts --}}
    @if ($menus->count() > 0)
    <section class="mx-5 my-5 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
        @foreach ($menus as $menu)
            <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                {{-- Image --}}
                <div class="relative mx-4 mt-4 h-96 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
                    @if ($menu->is_api == -1)
                        <a href="/products/{{ $menu->slug }}">
                            <img src="https://source.unsplash.com/1200x800?{{ $menu->category->name }}"
                                    alt="" class=" w-full h-full ">
                        </a>
                    @else
                        <a href="/others/{{ $menu->slug }}">
                            <img src="{{ $menu->image }}"
                                alt="" class=" w-full h-full ">
                        </a>
                    @endif
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
                        @if ($menu->is_api == -1)
                            <a href="/products/{{ $menu->slug }}">
                                <p class="block font-sans text-lg font-bold leading-relaxed text-blue-gray-900 antialiased">
                                {{ $menu->name }}
                                </p>
                            </a>
                        @else
                            <a href="/others/{{ $menu->slug }}">
                                <p class="block font-sans text-lg font-bold leading-relaxed text-blue-gray-900 antialiased">
                                {{ $menu->name }}
                                </p>
                            </a>
                        @endif
                        {{-- Menu's price --}}
                            <p class="block font-sans text-base font-bold leading-relaxed text-blue-gray-900 antialiased">
                            Rp.{{ $menu->price }}
                            </p>
                    </div>
                    {{-- Menu's category/desc --}}
                    @if ($menu->is_api == -1)
                        <a href="/products?category={{ $menu->category->slug }}">
                            <p class="block font-sans text-sm font-normal leading-normal text-gray-900 antialiased opacity-90">
                                {{ $menu->category->name }}
                            </p>
                        </a>
                    @else
                        <a href="/others?category={{ $menu->category->slug }}">
                            <p class="block font-sans text-sm font-normal leading-normal text-gray-900 antialiased opacity-90">
                                {{ $menu->category->name }}
                            </p>
                        </a>
                    @endif
                </div>
                {{-- Button --}}
                <div class="p-6 pt-0">
                    @if ($menu->is_api == -1)
                        <button onclick="window.location.href='/products/{{ $menu->slug }}'"
                            class="block bg-blue-500 text-white w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button"
                        >
                            Add to Cart
                        </button>
                    @else
                        <button onclick="window.location.href='/others/{{ $menu->slug }}'"
                            class="block bg-blue-500 text-white w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button"
                        >
                            Add to Cart
                        </button>
                    @endif
                </div>
            </div>
        @endforeach
    @else
        <p class="text-center text-gray-600 dark:text-gray-400 py-80">No menu found.</p>
    </section>
    @endif
</section>
<div class="flex flex-row w-full justify-end pe-5">
    {{ $menus->links('pagination::tailwind') }}
</div>
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
