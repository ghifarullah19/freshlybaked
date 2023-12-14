@extends('dashboard.layouts.main')

@section('container')

{{-- Product --}}

<div class="bg-white py-8 pt-16 mt-10">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
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
          <div>
            <span class="font-bold text-black">Availability:</span>
            <span class="text-black">{{ $menu->quantity }}</span>
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
        <form class="max-w-xs mt-7">
          <label for="counter-input" class="block mb-1 text-sm font-medium text-black">Choose quantity:</label>
          <div class="relative flex items-center">
            <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
              <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
              </svg>
            </button>
            <input type="text" id="counter-input" data-input-counter data-input-counter-min="1" data-input-counter-max="10" class="flex-shrink-0 text-black border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="1" required>
            <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
              <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
              </svg>
            </button>
          </div>
        </form>
        {{-- Button Cart --}}
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
