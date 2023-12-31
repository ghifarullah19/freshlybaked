@extends('dashboard.layouts.main')
@include('dashboard.layouts.sidebar')

@section('container')
<body class="relative bg-[#6B240C] overflow-hidden max-h-screen">
<main class="ml-60 max-h-screen overflow-auto">
    <div class="px-6 py-7">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-3xl p-8 mb-5">
                <h1 class="text-3xl font-bold mb-10">Halaman Status Transaksi</h1>
                <div class="flex items-center justify-between">
                    <div class="flex items-stretch">
                        <div class="text-gray-400 text-xs">Admin {{ Auth()->user()->name }}<br>connected</div>
                        <div class="h-100 border-l mx-4"></div>
                        <div class="flex flex-nowrap -space-x-3">
                            <div class="h-9 w-9">
                                <img class="object-cover w-full h-full rounded-full" src="{{ asset('storage/' . Auth()->user()->image) }}">
                            </div>
                        </div>
                    </div>
                   {{-- onclick="window.location.href='/dashboard/users/{{ Auth()->user()->username }}/edit'" --}}
                    <div class="flex items-center gap-x-2">
                        <button type="button"  class="inline-flex items-center justify-center h-9 px-5 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                            <svg class="text-lg mr-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z"/></svg>
                            <a href="/">
                                Home
                            </a>
                        </button>
                        <button type="button" data-modal-target="modal-setting"  data-modal-toggle="modal-setting"  class="inline-flex items-center justify-center h-9 px-5 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                            <svg class="text-lg mr-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024"><path fill="currentColor" d="M512.5 390.6c-29.9 0-57.9 11.6-79.1 32.8c-21.1 21.2-32.8 49.2-32.8 79.1c0 29.9 11.7 57.9 32.8 79.1c21.2 21.1 49.2 32.8 79.1 32.8c29.9 0 57.9-11.7 79.1-32.8c21.1-21.2 32.8-49.2 32.8-79.1c0-29.9-11.7-57.9-32.8-79.1a110.96 110.96 0 0 0-79.1-32.8m412.3 235.5l-65.4-55.9c3.1-19 4.7-38.4 4.7-57.7s-1.6-38.8-4.7-57.7l65.4-55.9a32.03 32.03 0 0 0 9.3-35.2l-.9-2.6a442.5 442.5 0 0 0-79.6-137.7l-1.8-2.1a32.12 32.12 0 0 0-35.1-9.5l-81.2 28.9c-30-24.6-63.4-44-99.6-57.5l-15.7-84.9a32.05 32.05 0 0 0-25.8-25.7l-2.7-.5c-52-9.4-106.8-9.4-158.8 0l-2.7.5a32.05 32.05 0 0 0-25.8 25.7l-15.8 85.3a353.44 353.44 0 0 0-98.9 57.3l-81.8-29.1a32 32 0 0 0-35.1 9.5l-1.8 2.1a445.93 445.93 0 0 0-79.6 137.7l-.9 2.6c-4.5 12.5-.8 26.5 9.3 35.2l66.2 56.5c-3.1 18.8-4.6 38-4.6 57c0 19.2 1.5 38.4 4.6 57l-66 56.5a32.03 32.03 0 0 0-9.3 35.2l.9 2.6c18.1 50.3 44.8 96.8 79.6 137.7l1.8 2.1a32.12 32.12 0 0 0 35.1 9.5l81.8-29.1c29.8 24.5 63 43.9 98.9 57.3l15.8 85.3a32.05 32.05 0 0 0 25.8 25.7l2.7.5a448.27 448.27 0 0 0 158.8 0l2.7-.5a32.05 32.05 0 0 0 25.8-25.7l15.7-84.9c36.2-13.6 69.6-32.9 99.6-57.5l81.2 28.9a32 32 0 0 0 35.1-9.5l1.8-2.1c34.8-41.1 61.5-87.4 79.6-137.7l.9-2.6c4.3-12.4.6-26.3-9.5-35m-412.3 52.2c-97.1 0-175.8-78.7-175.8-175.8s78.7-175.8 175.8-175.8s175.8 78.7 175.8 175.8s-78.7 175.8-175.8 175.8"/></svg>
                            Setting
                        </button>
                    </div>
                </div>

               {{-- modal Setting button --}}
                <div id="modal-setting" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full transition ease-in-out delay-150  pt-10 mb-10 hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                <h3 class="text-xl font-semibold text-gray-900">
                                    Setting Account
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-setting">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <form method="POST" action="/dashboard/users/update" class="max-w-2xl my-4 mx-4" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-5">
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                                        <input type="text" id="name" name="name" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg b`g-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500" value="{{ old('name', Auth()->user()->name) }}">
                                        @error('name')
                                        <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                                            <span class="font-medium">Danger alert!</span>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="mb-5">
                                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                                        <input type="text" id="username" name="username" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 " value="{{ old('username', Auth()->user()->username) }}">
                                        @error('username')
                                        <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                                            <span class="font-medium">Danger alert!</span>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-5">
                                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                                        <input type="text" id="email" name="email" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500" value="{{ old('email', Auth()->user()->email) }}">
                                        @error('email')
                                        <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                                            <span class="font-medium">Danger alert!</span>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

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
                                    <input type="file" id="image" name="image" onchange="previewImage()">
                                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b ">
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Accept</button>
                                        <button data-modal-hide="modal-setting" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Decline</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               {{-- end modal setting button --}}
                <hr class="my-5">
                <div class="grid grid-cols-2 gap-x-20">
                    <div>
                        <h2 class="text-2xl font-bold mb-4">Status</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-2">
                                <div class="p-4 bg-green-100 rounded-xl">
                                    <div class="font-bold text-xl text-gray-800 leading-none">Antrian Pesanan</div>
                                    <div class="mt-5">
                                        <button type="button" onclick="window.location.href='/dashboard/orders'" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                                            Lihat Selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                                <div class="font-bold text-2xl leading-none">{{ $antrianPending }}</div>
                                <div class="mt-2">Antrian tersisa</div>
                            </div>
                            <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                                <div class="font-bold text-2xl leading-none">{{ $antrianDiproses }}</div>
                                <div class="mt-2">Pesanan Selesai</div>
                            </div>
                            <div class="col-span-2">
                                <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                                    <div class="font-bold text-xl leading-none">Maksimal Pesanan Perhari</div>
                                    <div class="mt-2">{{ $totalAntrianPerhari }} of {{ env('MAX_ORDER') }} selesai</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold mb-4">Pesanan</h2>
                        <div class="space-y-4">
                            @if ($cart->count() > 0)
                            @foreach ($cart as $c)
                            <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                <div class="flex justify-between">
                                    <div class="text-gray-400 text-xs">{{ $c->code }}</div>
                                    <div class="text-gray-400 text-xs">{{ $c->created_at }}</div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="font-bold">{{ $c->user->name }}</div>
                                    @if ($c->status == 1)
                                        <div class="px-2 inline-flex text-base leading-5 font-semibold rounded-full bg-green-100 text-green-800">Done</div>
                                    @else
                                        <div class="px-2 inline-flex text-base leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</div>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="p-4 h-[300px] bg-white border rounded-xl text-gray-800 flex justify-center align-middle">
                                <h1 class="text-2xl font-bold my-auto">
                                    Belum ada pesanan.
                                </h1>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function (oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
