@extends('layouts.main')

    @section('container')

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">

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
                <div class="text-center text-white p-4 md:p-8 lg:p-12 xl:p-16">
                    <h2 data-aos="zoom-out" data-aos-duration="3000" class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold mt-7 mb-1 italic">Freshly Baked</h2>
                    <p data-aos="zoom-out" data-aos-duration="3000" class="text-sm md:text-md lg:text-lg xl:text-xl mb-4 italic">Baking Private & Made By Order</p>
                    <button data-aos="zoom-out" data-aos-duration="3000" onclick="window.location.href='products'" class="mt-4 px-4 md:px-6 lg:px-8 py-2 md:py-3 lg:py-3 xl:py-4 bg-[#bc730d] text-white rounded-full hover:bg-[#9e6412] focus:outline-none focus:shadow-outline-yellow active:bg-[#f59918] font-bold">Shop Now ➲</button>
                </div>
            </section>

            {{-- Akhir Header --}}

            {{-- Produk --}}
            <section class="bg-[#3f2719]">
                <!-- Produk Terlaris -->
                <div class="text-center">
                    <h2 class="text-2xl text-[#FDCE87] font-bold mb-4 pt-10 md:pt-28 pb-6 md:pb-12">PRODUK TERLARIS</h2>

                    <div class="max-w-4xl mx-auto relative">
                        <div class="glide">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <!-- Slide 1 -->
                                    <li class="glide__slide">
                                        <div class="max-w-xs mx-4 mb-4">
                                            <img src="img/1.jpg" alt="Product 1" class="w-full h-auto object-cover rounded-md">
                                            <p class="text-center text-white font-bold mt-2">Nama Kue 1</p>
                                        </div>
                                    </li>
                                    <!-- Slide 2 -->
                                    <li class="glide__slide">
                                        <div class="max-w-xs mx-4 mb-4">
                                            <img src="img/1.jpg" alt="Product 2" class="w-full h-auto object-cover rounded-md">
                                            <p class="text-center text-white font-bold mt-2">Nama Kue 2</p>
                                        </div>
                                    </li>
                                    <!-- Slide 3 -->
                                    <li class="glide__slide">
                                        <div class="max-w-xs mx-4 mb-4">
                                            <img src="img/1.jpg" alt="Product 3" class="w-full h-auto object-cover rounded-md">
                                            <p class="text-center text-white font-bold mt-2">Nama Kue 3</p>
                                        </div>
                                    </li>
                                    <!-- Slide 4 -->
                                    <li class="glide__slide">
                                        <div class="max-w-xs mx-4 mb-4">
                                            <img src="img/1.jpg" alt="Product 4" class="w-full h-auto object-cover rounded-md">
                                            <p class="text-center text-white font-bold mt-2">Nama Kue 4</p>
                                        </div>
                                    </li>
                                    <!-- Slide 5 -->
                                    <li class="glide__slide">
                                        <div class="max-w-xs mx-4 mb-4">
                                            <img src="img/1.jpg" alt="Product 5" class="w-full h-auto object-cover rounded-md">
                                            <p class="text-center text-white font-bold mt-2">Nama Kue 5</p>
                                        </div>
                                    </li>
                                    <!-- Slide 6 -->
                                    <li class="glide__slide">
                                        <div class="max-w-xs mx-4 mb-4">
                                            <img src="img/1.jpg" alt="Product 6" class="w-full h-auto object-cover rounded-md">
                                            <p class="text-center text-white font-bold mt-2">Nama Kue 6</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="text-center pt-3 pb-12 md:pb-32">
                        <a href="products" class="bg-[#FDCE87] hover:bg-[#ecab49] text-[#3f2719] py-2 px-4 rounded-full font-bold text-lg">Lihat Semua Produk</a>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>
                    <script>
                        new Glide('.glide', {
                            type: 'carousel',
                            startAt: 0,
                            perView: 3,
                            focusAt: 'center',
                            breakpoints: {
                                768: {
                                    perView: 1
                                }
                            }
                        }).mount();
                    </script>
                </div>
            </section>

            {{-- Akhir Produk --}}

             {{-- Awal Highlight Produk --}}
                {{-- <div class="container mx-auto pt-20 mb-24" id="highlight">
                    <h1  class="font-bold text-2xl text-center highlight-title" > Highlight </h1>
                    <div class="mt-4 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3 mx-5 md:mx-0">
                        @foreach ($menus as $menu)
                            <div class="bg-[#85603F] w-72 h-96 shadow-md m-3 hover:-translate-y-5 transition rounded-2xl">
                                <div class="h-3/4 w-full rounded-t-2xl">
                                    <img class="w-full h-full object-cover rounded-t" src="/img/1.jpg" alt="piña" >
                                </div>
                                <div class="w-full h-1/4 p-3 bg-amber-800/[0.7] rounded-b-2xl">
                                        <span class="text-lg font-semibold text-white uppercase tracking-wide ">{{ $menu->name }}</span>
                                    <p class="text-gray-300 text-sm leading-5 mt-1">{{ $menu->category->name }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> --}}
            {{-- Akhir Highlight --}}




            {{-- Tentang Kami --}}
            <div class="font-sans bg-[#FAEED1]">

                <!-- Toko Section -->
                <section class="flex items-center justify-center min-h-screen">
                    <div class="text-center mx-auto max-w-2xl">
                        <!-- Gambar Toko -->
                        <div class="relative inline-block">
                            <img  src="img/g.jpg" alt="Toko" class="w-full h-auto mb-4 rounded-xl">
                            <a  href="about" class="absolute bottom-0 right-0 mb-2 mr-2 p-1 border border-white bg-black rounded-lg text-gray-300 font-bold hover:text-blue-200 hover:border-blue-500 hover:bg-black transition duration-300 text-sm">Baca Lebih Lanjut ➥</a>
                        </div>

                        <!-- Deskripsi Toko -->
                        <p class="text-base md:text-lg lg:text-xl text-black mx-auto ">
                            Freshly Baked Adalah Sebuah Toko Yang Menjual Berbagai Macam Kue.
                            <br>
                            Didirikan pada tahun 2017, Freshly Baked by Origin Bakery didirikan karena kami melihat potensi pertumbuhan industri roti di Indonesia melalui perubahan gaya hidup. Namun, saat ini pilihan roti yang lebih sehat sangat sedikit dan kemungkinan besar harganya mahal.
                        </p>
                    </div>
                </section>

            </div>
            {{-- Akhir Tentang Kami --}}

            {{-- SIAPIH --}}
            <section id="" class="pt-10 bg-[#50382b] pb-20">
                <div class="container mx-auto px-4">
                    <div class="">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                            <div class="col-span-3 md:col-span-2">
                                <h1 class="text-3xl font-bold mb-4 text-[#FFCD8B]">ABOUT US</h1>
                                <div class="md:flex">
                                    <p class="md:w-1/2 lg:w-3/4 text-lg text-gray-100">
                                        Si Apih Freshly Baked Didirikan Tahun 2017 alamatnya di Jl Sariwangi dalam 28, Jl. Sarijadi Raya No.64 blok 23, Sukawarna, toko roti ini berdiri atas ide dari Bp Apih bersama istrinya, yang terinspirasi oleh salah satu toko roti di Bandung yang sempat beliau kunjungi dan beliau menilai konsep yang diusung oleh toko roti tersebut bagus yaitu roti
                                        <span class=" text-lg text-yellow-300 font-bold">"FRESH FROM THE OVEN".</span>
                                    </p>
                                    <div class="md:w-1/2 mt-4 md:mt-0">
                                        <div class="">
                                            <img class=" h-250 mx-auto border-4 rounded-lg" src="img/siapih5.jpg" alt="Dyriana Bakery Image">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="md:col-span-1">
                                <div class="text-start text-gray-200 lg:text-left text-lg">
                                    Toko Si Apih Freshly Baked ini semakin berkembang, Owner Si Apih mementingkan kenyamanan para customer saat berkunjung ke Si Apih Freshly Baked Toko Roti miliknya ini di Jl Sariwangi dalam 28, Jl. Sarijadi Raya No.64 blok 23 Bandung. Keputusan ini diambil karena memikirkan kenyamanan para customer saat berkunjung ke Si Apih Freshly Baked.
                                    <div class="mt-3">
                                        <a class="underline hover:text-blue-300" href="about">More About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- SIAPIH --}}






            {{-- Akhir --}}
        <section class="text-white body-font relative">
            <div class="absolute inset-0 bg-gray-300" id="contact">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126754.16878830967!2d107.43259844335937!3d-6.88248469999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b7c62b117b%3A0x5afbf7beb8b7a5d7!2sSi%20Apih%20freshly%20baked!5e0!3m2!1sid!2sid!4v1703387343381!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="container px-5 py-20 mx-10 shadow-2xl flex">
                <div class="lg:w-1/3 md:w-1/2 bg-[#424242] rounded-lg p-6 flex flex-col md:ml-auto w-1/2 mt-10 md:mt-0 relative z-10 shadow-md">
                    <h2 class="text-white text-3xl mb-1 font-medium title-font">Contact Us</h2>
                    <p class="leading-relaxed mb-5 text-gray-600"></p>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-white">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-white">Message</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <button class="text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">Kirim</button>
                </div>
            </div>
        </section>
        {{-- Tutup Akhir --}}

        <script>
        AOS.init();
        </script>


    @endsection
