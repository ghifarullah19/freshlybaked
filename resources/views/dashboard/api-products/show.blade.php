@extends('dashboard.layouts.main')

@section('container')

{{-- Product --}}

<div class="bg-white py-8 pt-16 mt-10">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row -mx-4">
      <div class="md:flex-1 px-4">
        <div class="h-auto w-[100%] md:w-[105%] lg:w-[100%] rounded-lg mb-4 border border-black">
          @if ($menu->strMealThumb)
            <div style="max-height: 350px; overflow: hidden">
              <img src="{{ $menu->strMealThumb }}">
            </div>
            @else
            <img class="w-full h-full object-cover rounded-lg" src="https://source.unsplash.com/1200x800?{{ 'bakery' }}" alt="Product Image">
          @endif
        </div>
      </div>

      {{-- Product Name --}}
      <div class="md:flex-1 px-4">
        <h2 class="text-2xl font-bold text-black mb-2">{{ $menu->strMeal }}</h2>
        {{-- <p class="text-black text-sm mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, accusantium?
        </p> --}}
        <div class="flex mb-4">
          <div class="mr-4">
            <span class="font-bold text-black">Price:</span>
            <span class="text-black">Rp. {{ $menu->strPrice }}</span>
          </div>
          <div>
            <span class="font-bold text-black">Availability:</span>
            <span class="text-black">{{ $menu->strQuantity }}</span>
          </div>
        </div>
        <div>
          {{-- Product Description --}}
          <span class="font-bold text-black">Product Description:</span>
          <p class="text-black text-sm mt-2">
            {{ $menu->strDescription }}  
          </p>
        </div>
        <div class="flex -mx-2 mt-5">
          <div class="w-1/2 px-2">
            <button class="w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
