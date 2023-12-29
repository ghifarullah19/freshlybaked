@extends('dashboard.layouts.main')

@section('container')

<div class="text-4xl font-bold mb-4 mx-3 my-3">
    <h1>Edit Products</h1>
</div>
<hr class="border-t border-gray-600 my-4 mx-4 px-[610px]"> <!-- Separator line -->

<form method="POST" action="/dashboard/products/{{ $menu->slug }}" class="max-w-2xl my-4 mx-4" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Name</label>
        <input type="text" id="name" name="name" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('name', $menu->name) }}">
        @error('name')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Slug</label>
        <input type="text" id="slug" name="slug" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly value="{{ old('slug', $menu->slug) }}">
        @error('slug')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Price</label>
        <input type="number" min="0" max="5000000" id="price" name="price" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('price', $menu->price) }}">
        @error('price')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Quantity</label>
        <input type="number" min="0" max="5000000" id="quantity" name="quantity" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('quantity', $menu->quantity) }}">
        @error('quantity')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
    </div>
    
    <img src="{{ $menu->strMealThumb }}" class="img-preview mb-3 block">
    <input type="file" id="strMealThumb" name="strMealThumb" onchange="previewImage()">

    <div>
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Description</label>
        {{-- <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"> --}}
        @error('description')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
        <input id="description" type="hidden" name="description">
        <trix-editor input="description" value="{{ old('description', $menu->description) }}"></trix-editor>
    </div>

    <button type="submit">Create Post</button>
  </form>

  <script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
      fetch('/dashboard/products/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    });

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