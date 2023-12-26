@extends('layouts.main')

@section('container')

<section>
    <h1 class="mb-10 text-center text-2xl font-bold pt-8">Cart Items</h1>
    {{-- Card Container (Looping) --}}
    <div class="mx-auto max-w-5xl items-center flex justify-center px-6 md:space-x-6 xl:px-0">
      {{-- Card Product --}}
      <div class="rounded-lg md:w-2/3">
        {{-- Image/Gambar --}}
        <div class="justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start">
          <img src="https://source.unsplash.com/350x220?{{ 'bakery'}}" alt="product-image" class="w-full rounded-lg sm:w-40"/>
          <div class="sm:ml-4 sm:flex sm:w-full sm:justify-between">
            {{-- Nama Produk --}}
            <div class="mt-5 sm:mt-0">
              <h2 class="text-lg font-bold text-gray-900">Black Mamba</h2>
              {{-- Category --}}
              <p class="mt-1 text-xs text-gray-700">Kue</p>
            </div>
            {{-- Control Button --}}
            <div class="mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6">
              <div class="flex items-center border-gray-100">
                <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input" class="bg-gray-100 dark:bg-white dark:hover:bg-gray-400 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-s-lg p-3 h-10 focus:ring-gray-100 dark:focus:ring-white focus:ring-2 focus:outline-none">
                  <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                  </svg>
                </button>
                <input type="text" name="quantity" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation" class="bg-gray-50 border-x-0 border-gray-300 h-10 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-10 py-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="1" data-input-counter-max="10" data-input-counter-min="1" required>
                <button type="button" id="increment-button" data-input-counter-increment="quantity-input" class="bg-gray-100 dark:bg-white dark:hover:bg-gray-400 dark:border-gray-600 hover:bg-gray-200 border border-gray-300 rounded-e-lg p-3 h-10 focus:ring-gray-100 dark:focus:ring-white focus:ring-2 focus:outline-none">
                  <svg class="w-3 h-3 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                  </svg>
              </button>
              </div>
              {{-- Price/Harga --}}
              <div class="flex items-center space-x-4">
                <p class="text-sm">Rp. 100.000</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 cursor-pointer duration-150 hover:text-red-500">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  <!-- Sub total -->
  <div class="flex items-center justify-center pb-10">
    <div class="mt-6 h-full rounded-lg border bg-white p-6 shadow-md md:mt-0 w-5/6 md:w-2/4 lg:w-2/4 xl:w-2/4">
      <div class="mb-2 flex justify-between">
        <p class="text-gray-700">Subtotal</p>
        <p class="text-gray-700">Rp. 100.000</p>
      </div>
      <div class="flex justify-between">
        <p class="text-gray-700">Shipping</p>
        <p class="text-gray-700">Rp. 10.000</p>
      </div>
      <hr class="my-4" />
      <div class="flex justify-between">
        <p class="text-lg font-bold">Total</p>
        <div class="">
          <p class="mb-1 text-lg font-bold">Rp. 1.000.000</p>
          <p class="text-sm text-gray-700">Termasuk pajak</p>
        </div>
      </div>
      <button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Check out</button>
    </div>
  </div>
  
</section>

@endsection