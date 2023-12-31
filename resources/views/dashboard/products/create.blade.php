@extends('dashboard.layouts.main')

@section('container')

<section class="bg-[#FAEED1]">
    <div class="text-4xl font-bold mb-4 mx-3 text-center pt-3 bg-[#FAEED1]">
        <h1>Add New Product</h1>
    </div>
    <hr class="border-t border-black my-4 mx-4 px-[610px]"> <!-- Separator line -->

     {{-- fORM --}}
        <!-- component -->
    <div class="bg-[#FAEED1] py-32 px-10 min-h-screen ">
        <div class="bg-white p-10 md:w-3/4 lg:w-1/2 mx-auto rounded-2xl">

          <form action="">
            <div class="flex items-center mb-5">
              <!--         tip - here neede inline-block , but why? -->
              <label for="name" class="inline-block w-20 mr-6 text-right
                                       font-bold text-gray-600">Name</label>
              <input type="text" id="name" name="name" placeholder="Name"
                     class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                            text-gray-600 placeholder-gray-400
                            outline-none">
            </div>

            <div class="flex items-center mb-5">
              <!--         tip - here neede inline-block , but why? -->
              <label for="number" class="inline-block w-20 mr-6 text-right
                                       font-bold text-gray-600">Slug</label>
              <input type="number" id="number" name="number" placeholder=""
                     class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                            text-gray-600 placeholder-gray-400
                            outline-none" disabled>
            </div>



            <div class="flex items-center mb-5">
              <!--         tip - here neede inline-block , but why? -->
              <label for="number" class="inline-block w-20 mr-6 text-right
                                       font-bold text-gray-600">Image</label>
              <input type="file" id="file" name="file" placeholder="file"
                     class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                            text-gray-600 placeholder-gray-400
                            outline-none">
            </div>

            <div class="flex items-center mb-5">
                <!--         tip - here neede inline-block , but why? -->
                <label for="number" class="inline-block w-20 mr-6 text-right
                                         font-bold text-gray-600">Price</label>
                <input type="number" id="number" name="number" placeholder="Rp. 100.000"
                       class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                              text-gray-600 placeholder-gray-400
                              outline-none">
              </div>


            <div class="flex items-center mb-5">
              <!--         tip - here neede inline-block , but why? -->
              <label for="number" class="inline-block w-20 mr-6 text-right
                                       font-bold text-gray-600">Category</label>
              <select class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                            text-gray-600 placeholder-gray-400
                            outline-none pl-3">
                  <option>Cake</option>
                  <option>Signature</option>
                  <option>Bread</option>
              </select>
            </div>

            <div>
                <label for="description" class="inline-block w-20 mr-6 text-right
                font-bold text-gray-600 mb-3">Description</label>
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

            <div class="text-right">
              <button class="py-3 px-8 bg-blue-600 text-white font-bold rounded-2xl">Submit</button>
            </div>

          </form>
        </div>
      </div>
     {{-- aKHIR fORM --}}
    </section>

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
