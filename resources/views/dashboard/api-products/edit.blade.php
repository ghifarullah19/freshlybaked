@extends('dashboard.layouts.main')

@section('container')

    <div class="bg-[#FAEED1]">

        <hr class="border-t border-black my-4 mx-4 px-[610px]"> <!-- Separator line -->

        {{-- fORM --}}
        <!-- component -->
        <div class="bg-[#FAEED1] pb-10 px-10 min-h-screen">
            <div class="text-4xl font-bold mb-4 mx-3 text-center  bg-[#FAEED1]">
                <h1>Edit Products</h1>
            </div>
            <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto rounded-2xl">
                <form action="/dashboard/api-products/{{ $menu->slug }}" method="POST" enctype="multipart/form-data">
                   {{-- @method('PUT') --}}
                    @csrf
                    {{-- Name --}}
                    <!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->
                    @error('name')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="flex items-center mb-5">
                        <!--         tip - here neede inline-block , but why? -->
                        <label for="name" class="inline-block w-20 mr-6 text-right
                                   font-bold text-gray-600">Name</label>
                        <input type="text" id="name" name="name" placeholder="Name"
                               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                        text-gray-600 placeholder-gray-400 rounded-lg
                        outline-none @error('name') is-invalid @enderror" value="{{ old('name', $menu->name) }}">
                    </div>
                    {{-- Akhir Name --}}


                    {{-- SLUG --}}
                    @error('slug')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="flex items-center mb-5">
                        <!--         tip - here neede inline-block , but why? -->
                        <label for="slug" class="inline-block w-20 mr-6 text-right font-bold text-gray-600">Slug</label>
                        <input type="text" id="slug" name="slug" placeholder=""
                               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 rounded-lg
           text-gray-600 placeholder-gray-400 outline-none @error('slug') is-invalid @enderror" value="{{ old('slug', $menu->slug) }}">
                    </div>


                    {{-- IMAGE --}}
                    @error('image')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message }}
                    </div>
                    @enderror
                    {{-- Mengirim data image lama --}}
                    <input type="hidden" name="oldImage" value="{{ $menu->image }}">

                    {{-- Jika ada image lama --}}
                    @if ($menu->image)
                        {{-- Tampilkan image tersebut --}}
                        <input type="hidden" name="image" value="{{ $menu->image }}">
                        <img src="{{ $menu->image }}" class="img-preview w-40 h-40 mx-auto">
                        {{-- Jika tidak ada --}}
                    @else
                        {{-- Tampilkan image kosong --}}
                        <img  class="img-preview w-40 h-40">
                    @endif
                    <div class="flex items-center mb-5">
                        <label for="image" class="inline-block w-20 mr-6 text-right
                                   font-bold text-gray-600">Image</label>                        
                    </div>

                    {{-- PRICE --}}
                    @error('price')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="flex items-center mb-5">
                        <!--         tip - here neede inline-block , but why? -->
                        <label for="price" class="inline-block w-20 mr-6 text-right
                                     font-bold text-gray-600">Price</label>
                        <input type="number" id="price" name="price" placeholder="Rp. 100.000"
                               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                          text-gray-600 placeholder-gray-400 rounded-lg
                          outline-none @error('price') is-invalid @enderror" value="{{ old('price', $menu->price) }}">
                    </div>

                    {{-- QUANTITY --}}
                    @error('quantity')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="flex items-center mb-5">

                        <label for="quantity" class="inline-block w-20 mr-6 text-right
                                     font-bold text-gray-600">Quantity</label>
                        <input type="number" id="quantity" name="quantity" placeholder="Rp. 100.000"
                               class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                          text-gray-600 placeholder-gray-400 rounded-lg
                          outline-none @error('quantity') is-invalid @enderror" value="{{ old('quantity', $menu->quantity) }}">
                    </div>
                    {{-- DESCRIPTION --}}
                    @error('description')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message }}
                    </div>
                    @enderror

                        <label for="description" class="inline-block w-20 mr-6 text-right
            font-bold text-gray-600 mb-3">Description</label>
                        <input id="description" type="hidden" name="description">
                        <trix-editor input="description" value="{{ old('description', $menu->description) }}">
                            {{ $menu->description }}</trix-editor>
                    <div class="text-right">
                        <button onclick="window.location.href='/dashboard/api-products'" class="mt-5 py-3 px-8 bg-red-500 text-white font-bold rounded-2xl" type="button">
                            Back
                          </button>
                        <button type="submit" class="py-3 mt-5 px-8 bg-blue-500 text-white font-bold rounded-2xl">Submit</button>
                    </div>

                </form>
            </div>
        </div>

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
