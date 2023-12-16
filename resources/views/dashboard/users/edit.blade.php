@extends('dashboard.layouts.main')

@section('container')

<div class="text-4xl font-bold mb-4 mx-3 my-3">
    <h1>Edit Account</h1>
</div>
<hr class="border-t border-gray-600 my-4 mx-4 px-[610px]"> <!-- Separator line -->

<form method="POST" action="/dashboard/users/{{ $user->username }}" class="max-w-2xl my-4 mx-4" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Name</label>
        <input type="text" id="name" name="name" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('name', $user->name) }}">
        @error('name')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Username</label>
        <input type="text" id="username" name="username" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly value="{{ old('username', $user->username) }}">
        @error('username')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Email</label>
        <input type="text" id="email" name="email" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('email', $user->email) }}">
        @error('email')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Password</label>
        <input type="password" id="password" name="password" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('password', $user->password) }}">
        @error('password')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
    </div>

    <label for="is_admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">is_admin</label>
    <select id="is_admin" name="is_admin" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-300 dark:placeholder-white dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-5">
        <option value="0">User</option>
        <option value="1">Admin</option>
        {{-- @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach --}}
    </select>

    {{-- <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Availability</label>
    <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-300 dark:placeholder-white dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-5">
    <option selected value="Cake">Available</option>
    <option value="Bread">Out of Stock</option>
    </select> --}}


    {{-- Mengirim data image lama --}}
    <input type="hidden" name="oldImage" value="{{ $user->image }}">

    {{-- Jika ada image lama --}}
    @if ($user->image)
        {{-- Tampilkan image tersebut --}}
        <img src="{{ asset('storage/' . $user->image) }}" class="img-preview mb-3 block">
    {{-- Jika tidak ada --}}
    @else
        {{-- Tampilkan image kosong --}}
        <img class="img-preview img-fluid mb-3">
    @endif
    <input type="file" id="image" name="image" onchange="previewImage()">

    <button type="submit">Create Post</button>
  </form>

  <script>
    // const name = document.querySelector('#name');
    // const slug = document.querySelector('#slug');

    // name.addEventListener('change', function() {
    //   fetch('/dashboard/products/checkSlug?name=' + name.value)
    //     .then(response => response.json())
    //     .then(data => slug.value = data.slug)
    // });
    // document.addEventListener('trix-file-accept', function(e) {
    //   e.preventDefault();
    // });

    // Menangani image preview
    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');
      imgPreview.style.display = 'block';
      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);
      oFReader.onload = function(oFREVent) {
        imgPreview.src = oFREVent.target.result;
      }
    }
  </script>

@endsection
