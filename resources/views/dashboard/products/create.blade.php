@extends('dashboard.layouts.main')

@section('container')

<div class="text-4xl font-bold mb-4 mx-3 my-3">
    <h1>Add New Products</h1>
</div>
<hr class="border-t border-gray-600 my-4 mx-4 px-[610px]"> <!-- Separator line -->

<form class="max-w-2xl my-4 mx-4">
    <div class="mb-5">
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Name</label>
        <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <div class="mb-5">
        <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Price</label>
        <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>

    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Category</label>
    <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-300 dark:placeholder-white dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-5">
    <option selected value="Cake">Cake</option>
    <option value="Bread">Bread</option>
    </select>

    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Availability</label>
    <select id="countries" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-300 dark:placeholder-white dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-5">
    <option selected value="Cake">Available</option>
    <option value="Bread">Out of Stock</option>
    </select>

    <div>
        <label for="large-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Description</label>
        <input type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500">
    </div>
  </form>

@endsection