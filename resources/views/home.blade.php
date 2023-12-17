@extends('layouts.main')

    @section('container')

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        {{-- Style --}}
        <style>
            .fade-enter-active, .fade-leave-active {
                transition: opacity 0.5s;
            }

            .fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
                opacity: 0;
            }
        </style>
        {{-- Akhir Style --}}
            {{-- Header --}}
            <section class="h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('img/bg100.jpg');">
                <div class="text-center text-white">
                    <h2 data-aos="zoom-out" data-aos-duration="3000" class="text-6xl font-bold mb-1">Si Apih Freshly Baked</h2>
                    <p data-aos="zoom-out" data-aos-duration="3000" class="text-3xl">Baking Private & Made By Order</p>
                </div>
            </section>
            {{-- Akhir Header --}}

            {{-- Tentang Kami --}}
            <div class="font-sans bg-black">

                <!-- Toko Section -->
                <section class="flex items-center justify-center min-h-screen">
                  <div class="text-center mx-auto max-w-2xl">
                    <!-- Gambar Toko -->
                    <div class="relative inline-block">
                      <img data-aos="zoom-out" data-aos-duration="2000" src="img/g.jpg" alt="Toko" class="w-full h-auto mb-4 rounded-xl">
                      <a data-aos="zoom-out" data-aos-duration="2000" href="" class="absolute bottom-0 right-0 mb-2 mr-2 p-1 border border-white bg-black rounded-lg text-gray bold hover:text-blue-200 hover:border-blue-500 hover:bg-black transition duration-300 text-sm">Baca Lebih Lanjut ➥</a>
                    </div>

                    <!-- Deskripsi Toko -->
                    <p data-aos="zoom-out" data-aos-duration="1000" class="text-lg text-gray-100 mx-auto">Freshly Baked Adalah Sebuah Toko Yang Menjual Berbagi Macam Kue. <br> Didirikan pada tahun 2017, Freshly Baked by Origin Bakery didirikan karena kami melihat potensi pertumbuhan industri roti di Indonesia melalui perubahan gaya hidup. Namun, saat ini pilihan roti yang lebih sehat sangat sedikit dan kemungkinan besar harganya mahal.</p>
                  </div>
                </section>

            </div>
            {{-- Akhir Tentang Kami --}}

            {{-- Awal Highlight Produk --}}
                <div class="container mx-auto mt-8" id="highlight" style="padding-top: 70px;">
                    <h1  class="font-bold text-2xl text-center highlight-title"> Highlight </h1>
                    <div class="mt-4 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3 mx-5 md:mx-0">
                        @foreach ($menus as $menu)
                            <div class="bg-white w-72 h-96 shadow-md rounded m-3 hover:-translate-y-5 transition rounded-2xl">
                                <div class="h-3/4 w-full rounded-t-2xl">
                                    <img class="w-full h-full object-cover rounded-t" src="/img/1.jpg" alt="piña">
                                </div>
                                <div class="w-full h-1/4 p-3 bg-amber-200 rounded-b-2xl">
                                        <span class="text-lg font-semibold uppercase tracking-wide ">{{ $menu->name }}</span>
                                    <p class="text-gray-600 text-sm leading-5 mt-1">{{ $menu->category }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            {{-- Akhir Highlight --}}
            {{-- Akhir --}}

        <script>
        AOS.init();
        </script>


    @endsection
