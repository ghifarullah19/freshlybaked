@extends('dashboard.layouts.main')

@section('container')

{{-- Product --}}

<div class="bg-white py-8 pt-16 mt-10">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row -mx-4">
      <div class="md:flex-1 px-4">
        <div class="h-auto w-[100%] md:w-[105%] lg:w-[100%] rounded-lg mb-4 border border-black">
          @if ($user->image)
            <div style="max-height: 350px; overflow: hidden">
              <img src="{{ asset('storage/' . $user->image) }}">
            </div>
            @else
            <img class="w-full h-full object-cover rounded-lg" src="https://source.unsplash.com/1200x800?{{ 'chef' }}" alt="Product Image">
          @endif
        </div>
      </div>

      {{-- Product Name --}}
      <div class="md:flex-1 px-4">
        <h2 class="text-2xl font-bold text-black mb-2">{{ $user->name }}</h2>
        {{-- <p class="text-black text-sm mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, accusantium?
        </p> --}}
        <div class="flex mb-4">
          <div class="mr-4">
            <span class="font-bold text-black">Username:</span>
            <span class="text-black">{{ $user->username }}</span>
          </div>
          <div>
            <span class="font-bold text-black">Role:</span>
            <span class="text-black">{{ $user->is_admin == 0 ? "User" : "Admin" }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
