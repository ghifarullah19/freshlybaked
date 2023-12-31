@extends('layouts.main')
<script>
    var geocoder;
    var map;
    function initialize() {
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(-34.397, 150.644);
        var mapOptions = {
            zoom: 8,
            center: latlng
        }
        map = new google.maps.Map(document.getElementById('map'), mapOptions);
    }

    function codeAddress() {
        var address = document.getElementById('address').value;
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == 'OK') {
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }
</script>
@section('container')
<section class="mt-10">
    <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">

        <!-- Form Input -->
        <div class="mt-8">
            <form action="/update-profile" method="post" enctype="multipart/form-data">
                @csrf
                <div class="text-2xl font-semibold text-center mb-4">Edit Information</div>

                <div class="flex flex-col sm:flex-row justify-evenly">
                    <div class="flex flex-col mb-4 sm:mr-4">
                        <label for="profile_image" class="block text-gray-700 font-medium">Image Profile :</label>
                        <input type="hidden" name="oldImage" value="{{ Auth()->user()->image }}">
                        {{-- Jika ada image lama --}}
                        @if (Auth()->user()->image)
                        {{-- Tampilkan image tersebut --}}
                            <img src="{{ asset('storage/' . Auth()->user()->image) }}" class="img-preview mb-3 block h-[450px] w-[450px]">
                        {{-- Jika tidak ada --}}
                        @else
                        {{-- Tampilkan image kosong --}}
                            <img src="/img/nophoto.png" class="img-preview img-fluid mb-3 h-[450px] w-[450px]">
                        @endif
                        <input type="file" id="image" name="image" onchange="previewImage()" class="w-full border rounded-md">
                    </div>

                    <div class="flex flex-col w-full sm:w-1/2">

                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-medium">Full Name :</label>
                            <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md" value="{{ auth()->user()->name }}">
                        </div>

                        <div class="mb-4">
                            <label for="username" class="block text-gray-700 font-medium">Username :</label>
                            <input type="text" id="username" name="username" class="mt-1 p-2 w-full border rounded-md" value="{{ auth()->user()->username }}">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-medium">Email :</label>
                            <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md" value="{{ auth()->user()->email }}">
                        </div>

                        <div class="mb-4">
                            <label for="phone_number" class="block text-gray-700 font-medium">Phone :</label>
                            <input type="tel" id="phone_number" name="phone_number" class="mt-1 p-2 w-full border rounded-md" value="{{ auth()->user()->phone_number }}">
                        </div>

                        <div class="mb-4">
                            <label for="date_of_birth" class="block text-gray-700 font-medium">Birthdate :</label>
                            <input type="date" id="date_of_birth" name="date_of_birth" class="mt-1 p-2 w-full border rounded-md" value="{{ auth()->user()->date_of_birth }}">
                        </div>

                        <div class="mb-4">
                            <label for="address" class="block text-gray-700 font-medium">Address :</label>
                            <textarea id="address" name="address" rows="3" class="mt-1 p-2 w-full border rounded-md">{{ auth()->user()->address }}</textarea>
                        </div>
                    </div>

                </div>

                <div class="mt-8 text-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
                        Save
                    </button>
                </div>

            </form>
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
