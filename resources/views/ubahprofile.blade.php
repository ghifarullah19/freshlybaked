@extends('layouts.main')

@section('container')
<section class="mt-10">
    <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">

            <!-- Form Input -->
            <div class="mt-8">
                <form action="/ubahprofile" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="text-2xl font-semibold text-center mb-4">Edit Information</div>
                    <div class="mb-4">
                        <label for="profile_image" class="block text-gray-700 font-medium">Image Profile :</label>
                        <input type="hidden" name="oldImage" value="{{ Auth()->user()->image }}">
                            {{-- Jika ada image lama --}}
                            @if (Auth()->user()->image)
                                {{-- Tampilkan image tersebut --}}
                                <img src="{{ asset('storage/' . Auth()->user()->image) }}" class="img-preview mb-3 block">
                                {{-- Jika tidak ada --}}
                            @else
                                {{-- Tampilkan image kosong --}}
                                <img class="img-preview img-fluid mb-3">
                            @endif
                            <input type="file" id="image" name="image" onchange="previewImage()" class="w-full border rounded-md">
                    </div>
                    
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium">Full Name :</label>
                        <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md" value="{{ auth()->user()->name }}">
                    </div>
                    
                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 font-medium">Username :</label>
                        <input type="text" id="username" name="username" class="mt-1 p-2 w-full border rounded-md" value="{{ auth()->user()->username }}"">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium">Email :</label>
                        <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md" value="{{ auth()->user()->email }}">
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 font-medium">Phone :</label>
                        <input type="tel" id="phone" name="phone" class="mt-1 p-2 w-full border rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="birthdate" class="block text-gray-700 font-medium">Birthdate :</label>
                        <input type="date" id="birthdate" name="birthdate" class="mt-1 p-2 w-full border rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 font-medium">Address :</label>
                        <textarea id="address" name="address" rows="3" class="mt-1 p-2 w-full border rounded-md"></textarea>
                    </div>

                    <div class="mt-8 text-center">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
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