@extends('layouts.main')

@section('container')

{{-- Product --}}

<div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">

  <!-- Form Input -->
  <div class="mt-8">
      <form>
          <div class="text-2xl font-semibold text-center mb-4">Profile Information</div>

          <div class="flex flex-col sm:flex-row justify-evenly">
              <div class="flex flex-col mb-4 sm:mr-4">
                  <label for="profile_image" class="block text-gray-700 font-medium">Image Profile :</label>
                  <input type="hidden" name="oldImage" value="{{ $user->image }}">
                  {{-- Jika ada image lama --}}
                  @if ($user->image)
                  {{-- Tampilkan image tersebut --}}
                      <img src="{{ asset('storage/' . $user->image) }}" class="img-preview mb-3 block h-[450px] w-[450px]">
                  {{-- Jika tidak ada --}}
                  @else
                  {{-- Tampilkan image kosong --}}
                      <img src="/img/nophoto.png" class="img-preview img-fluid mb-3 h-[450px] w-[450px]">
                  @endif
              </div>

              <div class="flex flex-col w-full sm:w-1/2">

                  <div class="mb-4">
                      <label for="name" class="block text-gray-700 font-medium">Full Name :</label>
                      <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md" value="{{ $user->name }}" disabled>
                  </div>

                  <div class="mb-4">
                      <label for="username" class="block text-gray-700 font-medium">Username :</label>
                      <input type="text" id="username" name="username" class="mt-1 p-2 w-full border rounded-md" value="{{ $user->username }}" disabled>
                  </div>

                  <div class="mb-4">
                      <label for="email" class="block text-gray-700 font-medium">Email :</label>
                      <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md" value="{{ $user->email }}" disabled>
                  </div>

                  <div class="mb-4">
                      <label for="phone_number" class="block text-gray-700 font-medium">Phone :</label>
                      <input type="tel" id="phone_number" name="phone_number" class="mt-1 p-2 w-full border rounded-md" value="{{ $user->phone_number }}" disabled>
                  </div>

                  <div class="mb-4">
                      <label for="date_of_birth" class="block text-gray-700 font-medium">Birthdate :</label>
                      <input type="date" id="date_of_birth" name="date_of_birth" class="mt-1 p-2 w-full border rounded-md" value="{{ $user->date_of_birth }}" disabled>
                  </div>

                  <div class="mb-4">
                      <label for="address" class="block text-gray-700 font-medium">Address :</label>
                      <textarea id="address" name="address" rows="3" class="mt-1 p-2 w-full border rounded-md" disabled>{{ $user->address }}</textarea>
                  </div>
              </div>

          </div>

          
        </form>
        <div class="mt-8 text-center">
            <button onclick="window.location.href='/dashboard/users'" class="bg-[#994D1C] hover:bg-[#E48F45] focus:ring-4 focus:outline-none focus:ring-[#994D1C] text-white font-bold py-2 px-4 rounded-md w-[200px]">
                Back
            </button>
        </div>
  </div>
</div>

@endsection
