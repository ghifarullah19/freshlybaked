@extends('layouts.main')

@section('container')

{{-- New Version --}}
<section class="py-20 overflow-hidden font-poppins sm:py-4 my-20">
  @if (session()->has('success'))
      <div class="p-4 mb-4 text-sm bg-gray-800 text-green-400" role="alert">
          <span class="font-medium">Success!</span>
          {{ session('success') }}
      </div>
  @endif

  @if (session()->has('loginError'))
      <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
          <span class="font-medium">Danger alert!</span>
          {{ session('loginError') }}
      </div>
  @endif
  <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
    <form action="/apiAddToCart/{{ $menu->id }}" action="get">
      <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4 md:w-1/2 ">
              <div class="sticky top-0 z-0 overflow-hidden ">
                {{-- Product Image --}}
                  <div class="relative mb-6 lg:mb-10" style="max-height:350px; overflow:hidden;">
                      <img src="{{ $menu->image }}"
                          alt="" class=" w-full h-full ">
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
                          {!! $menu->description !!}
                        </p>
                      </div>
                      
                      {{-- Product Availability/quantity --}}
                      <div class="flex">
                        <span class="text-xl mb-5 font-bold">Availability : </span>
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
                              <input type="text" name="strQuantity" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-10 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="1" data-input-counter-max="{{ $menu->quantity }}" data-input-counter-min="" required>
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
                              type="submit" class="w-full flex h-10 px-3 p-2 mr-4 bg-blue-500 dark:text-gray-200 text-gray-50 hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500 rounded-md">
                              Add to Cart<svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" fill="currentColor"
                              class="bi bi-cart ml-2 align-middle" viewBox="0 0 16 16">
                              <path
                                  d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                          </svg>
                        </button>
                      </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </form>
  </div>
</section>
@endsection