@extends('layouts.main')

@section('container')
{{-- Breadcumbs --}}
<nav class="fixed mt-8 px-4 z-20" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
    <li class="inline-flex items-center">
      <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400">
        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
        </svg>
        Home
      </a>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
        </svg>
        <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400">Products</a>
      </div>
    </li>
    <li aria-current="page">
      <div class="flex items-center">
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
        </svg>
        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Product</span>
      </div>
    </li>
  </ol>
</nav>
{{-- Akhir Breadcumbs --}}

{{-- Product --}}

<div class="bg-white py-8 pt-16 mt-10">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    @if (session()->has('success'))
        <div class="p-4 mb-4 text-sm bg-gray-800 text-green-400" role="alert">
            <span class="font-medium">Success!</span>
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
            <span class="font-medium">Error!</span>
            {{ session('error') }}
        </div>
    @endif
    
    <div class="flex flex-col md:flex-row -mx-4">
      <div class="md:flex-1 px-4">
        <div class="h-auto w-[100%] md:w-[105%] lg:w-[100%] rounded-lg mb-4 border border-black">
          @if ($menu->image)
            <div style="max-height: 350px; overflow: hidden">
              <img src="{{ asset('storage/' . $menu->image) }}">
            </div>
            @else
            <img class="w-full h-full object-cover rounded-lg" src="https://source.unsplash.com/1200x800?{{ 'bakery' }}" alt="Product Image">
          @endif
        </div>
      </div>

      {{-- Product Name --}}
      <div class="md:flex-1 px-4">
        <h2 class="text-2xl font-bold text-black mb-2">{{ $menu->name }}</h2>
        {{-- <p class="text-black text-sm mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, accusantium?
        </p> --}}
        <div class="flex mb-4">
          <div class="mr-4">
            <span class="font-bold text-black">Price:</span>
            <span class="text-black">Rp. {{ $menu->price }}</span>
          </div>
          <div class="mr-4">
            <span class="font-bold text-black">Availability:</span>
            <span class="text-black">{{ $menu->quantity }}</span>
          </div>
          <div>
            <span class="font-bold text-black">Category:</span>
            <a href="/products?category={{ $menu->category->slug }}">
              <span class="text-black">{{ $menu->category->name }}</span>
            </a>
          </div>
        </div>
        <div>
          {{-- Product Description --}}
          <span class="font-bold text-black">Product Description:</span>
          <p class="text-black text-sm mt-2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
            sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut
            lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque
            ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non
            sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.
          </p>
        </div>
        {{-- Input Number Quantity --}}
        <form method="POST" action="/products/cart/{{ $menu->id }}" class="max-w-xs mt-7">
          @csrf
          <label for="counter-input" class="block mb-1 text-sm font-medium text-black">Choose quantity:</label>
          <div class="relative flex items-center">
            <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
              <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
              </svg>
            </button>
            <input type="text" name="quantity" id="counter-input" data-input-counter data-input-counter-min="1" data-input-counter-max="10" class="flex-shrink-0 text-black border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="1" required>
            <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
              <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
              </svg>
            </button>
          </div>
          {{-- Button Cart --}}
          <div class="flex -mx-2 mt-5">
            <div class="w-1/2 px-2">
              <button type="submit" class="w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700">Add to Cart</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- New Version --}}
<section class="py-20 overflow-hidden font-poppins sm:py-4">
  <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
      <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4 md:w-1/2 ">
              <div class="sticky top-0 z-0 overflow-hidden ">
                {{-- Product Image --}}
                  <div class="relative mb-6 lg:mb-10" style="max-height:350px; overflow:hidden;">
                      <img src="https://source.unsplash.com/1200x800?{{ 'bakery' }}"
                          alt="" class=" w-full h-full ">
                  </div>
                  {{-- Product Image small 1 --}}
                  <div class="flex-wrap hidden md:flex ">
                      <div class="w-1/2 p-2 sm:w-1/4">
                          <a href="#"
                              class="block border border-blue-100 dark:border-gray-700 dark:hover:border-gray-600 hover:border-blue-300 ">
                              <img src="https://source.unsplash.com/1200x800?{{ 'bakery' }}"
                                  alt="" class="object-cover w-full lg:h-32">
                          </a>
                      </div>
                  {{-- Product Image small 2 --}}
                      <div class="w-1/2 p-2 sm:w-1/4">
                          <a href="#"
                              class="block border border-blue-100 dark:border-transparent dark:hover:border-gray-600 hover:border-blue-300">
                              <img src="https://source.unsplash.com/1200x800?{{ 'bakery' }}"
                                  alt="" class="object-cover w-full lg:h-32">
                          </a>
                      </div>
                  {{-- Product Image small 3 --}}
                      <div class="w-1/2 p-2 sm:w-1/4">
                          <a href="#"
                              class="block border border-blue-100 dark:border-transparent dark:hover:border-gray-600 hover:border-blue-300">
                              <img src="https://source.unsplash.com/1200x800?{{ 'bakery' }}"
                                  alt="" class="object-cover w-full lg:h-32">
                          </a>
                      </div>
                  {{-- Product Image small 4 --}}
                      <div class="w-1/2 p-2 sm:w-1/4">
                          <a href="#"
                              class="block border border-blue-100 dark:border-transparent dark:hover:border-gray-600 hover:border-blue-300">
                              <img src="https://source.unsplash.com/1200x800?{{ 'bakery' }}"
                                  alt="" class="object-cover w-full lg:h-32">
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          {{-- Product's name --}}
          <div class="w-full px-4 md:w-1/2 ">
              <div class="lg:pl-20">
                  <div class="pb-6 mb-8 border-b border-gray-200 dark:border-gray-700">
                      <h2 class="max-w-xl mt-2 mb-6 text-xl font-bold text-black md:text-4xl">
                          {{ $menu->name }}
                      </h2>
                      {{-- Product's desc --}}
                      <div>
                        <p class="mb-8 text-black">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.
                        </p>
                      </div>
                      
                      {{-- Product Availability/quantity --}}
                      <div class="flex">
                        <span class="text-xl mb-5 font-bold">Availability: </span>
                        <span class="text-xl ml-2">{{ $menu->quantity }}</span>
                      </div>
                      {{-- Products's price --}}
                      <p class="inline-block text-2xl font-bold text-black ">
                          <span>Rp. {{ $menu->price }}</span>
                      </p>
                  </div>
                  
                  {{-- Input Quantity Counter --}}
                  <div class="flex flex-wrap items-center ">
                      <div class="mb-4 mr-4 lg:mb-0">
                          <div class="w-32">
                              <div class="relative flex flex-row w-full h-10 bg-transparent rounded-lg">
                                <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 dark:bg-white dark:hover:bg-gray-400 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-10 focus:ring-gray-100 dark:focus:ring-white focus:ring-2 focus:outline-none">
                                  <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                                  </svg>
                              </button>
                              <input type="text" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-10 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="1" data-input-counter-max="10" data-input-counter-min="1" required>
                              <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 dark:bg-white dark:hover:bg-gray-400 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-10 focus:ring-gray-100 dark:focus:ring-white focus:ring-2 focus:outline-none">
                                  <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                                  </svg>
                              </button>
                              </div>
                          </div>
                      </div>
                      {{-- Button Cart --}}
                      <div class="mb-4 mr-4 lg:mb-0">
                          <button
                              class="w-full flex h-10 px-3 p-2 mr-4 bg-blue-500 dark:text-gray-200 text-gray-50 hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500 rounded-md">
                              Add to Cart<svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" fill="currentColor"
                              class="bi bi-cart ml-2 align-middle" viewBox="0 0 16 16">
                              <path
                                  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                          </svg></button>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

@endsection
