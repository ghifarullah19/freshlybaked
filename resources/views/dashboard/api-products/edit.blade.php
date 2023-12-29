@extends('dashboard.layouts.main')

@section('container')

<div class="text-4xl font-bold mb-4 mx-3 my-3">
    <h1>Edit Api Products</h1>
</div>
<hr class="border-t border-gray-600 my-4 mx-4 px-[610px]"> <!-- Separator line -->

<form method="POST" action="/dashboard/api-products/{{ $menu->strSlug }}" class="max-w-2xl my-4 mx-4" enctype="multipart/form-data">
    {{-- @method('PUT') --}}
    @csrf
    <div class="mb-5">
        <label for="strMeal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Name</label>
        <input type="text" id="strMeal" name="strMeal" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('strMeal', $menu->strMeal) }}">
        @error('strMeal')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <label for="strSlug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Slug</label>
        <input type="text" id="strSlug" name="strSlug" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly value="{{ old('strSlug', $menu->strSlug) }}">
        @error('strSlug')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <label for="strPrice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Price</label>
        <input type="number" min="0" max="5000000" id="strPrice" name="strPrice" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('strPrice', $menu->strPrice) }}">
        @error('strPrice')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <label for="strQuantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Quantity</label>
        <input type="number" min="0" max="5000000" id="strQuantity" name="strQuantity" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('strQuantity', $menu->strQuantity) }}">
        @error('strQuantity')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
    </div>
    
    <img src="{{ $menu->strMealThumb }}" class="img-preview mb-3 block">

    <div>
        <label for="strDescription" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Description</label>
        @error('strDescription')
            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span>
                {{ $message }}
            </div>
        @enderror
        <input id="strDescription" type="hidden" name="strDescription" value="{{ old('strDescription', $menu->strDescription) }}">
        <trix-editor input="strDescription"></trix-editor>
    </div>

    <button type="submit">Create Post</button>
  </form>

  <script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
      fetch('/dashboard/api-products/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    });
  </script>

@endsection