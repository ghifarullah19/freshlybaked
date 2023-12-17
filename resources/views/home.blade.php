@extends('layouts.main')

    @section('container')

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>


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

            {{-- Produk --}}

              <div class="bg-gray-200 flex items-center justify-center h-screen ">

                <section x-data="{ slideIndexTop: 0, slideIndexBottom: 0 }" class="max-w-5xl w-full bg-yellow-950  p-8 rounded shadow-md">
                  <!-- Produk Terlaris -->
                  <div class="mb-8">
                    <h2 class="text-2xl font-bold mb-4 text-center text-gray-200">Produk Terlaris</h2>

                    <div class="relative">
                      <div x-show="slideIndexTop === 0" class="grid grid-cols-1 md:grid-cols-3 gap-4 overflow-hidden fade">
                        <!-- Card 1 -->
                        <div class="flex flex-col items-center bg-gray-200 p-4 rounded-3xl shadow-md w-500 transition-transform transform hover:scale-105">
                          <img data-aos="zoom-out" data-aos-duration="1000" src="img/1.jpg" alt="Produk 1" class="w-36 h-36 object-cover mb-2 transition-opacity rounded-xl">
                          <p class="text-sm font-semibold text-center transition-opacity">Nama Produk 1</p>
                        </div>

                        <!-- Card 2 -->
                        <div class="flex flex-col items-center bg-gray-200 p-4 rounded-3xl shadow-md w-500 transition-transform transform hover:scale-105">
                          <img data-aos="zoom-out" data-aos-duration="1000" src="img/2.jpg" alt="Produk 2" class="w-36 h-36 object-cover mb-2 transition-opacity rounded-xl">
                          <p class="text-sm font-semibold text-center transition-opacity">Nama Produk 2</p>
                        </div>

                        <!-- Card 3 -->
                        <div class="flex flex-col items-center bg-gray-200 p-4 rounded-3xl shadow-md w-500 transition-transform transform hover:scale-105">
                          <img data-aos="zoom-out" data-aos-duration="1000" src="img/3.jpg" alt="Produk 3" class="w-36 h-36 object-cover mb-2 transition-opacity rounded-xl ">
                          <p class="text-sm font-semibold text-center transition-opacity">Nama Produk 3</p>
                        </div>
                      </div>

                      <div x-show="slideIndexTop === 1" class="grid grid-cols-1 md:grid-cols-3 gap-4 overflow-hidden fade">
                        <!-- Card 4 -->
                        <div class="flex flex-col items-center bg-gray-200 p-4 rounded-3xl shadow-md w-500 transition-transform transform hover:scale-105">
                          <img data-aos="zoom-out" data-aos-duration="1000" src="img/4.jpg" alt="Produk 4" class="w-36 h-36 object-cover mb-2 transition-opacity rounded-xl">
                          <p class="text-sm font-semibold text-center transition-opacity">Nama Produk 4</p>
                        </div>

                        <!-- Card 5 -->
                        <div class="flex flex-col items-center bg-gray-200 p-4 rounded-3xl shadow-md w-500 transition-transform transform hover:scale-105">
                          <img data-aos="zoom-out" data-aos-duration="1000" src="img/5.jpg" alt="Produk 5" class="w-36 h-36 object-cover mb-2 transition-opacity rounded-xl">
                          <p class="text-sm font-semibold text-center transition-opacity">Nama Produk 5</p>
                        </div>

                        <!-- Card 6 -->
                        <div class="flex flex-col items-center bg-gray-200 p-4 rounded-3xl shadow-md w-500 transition-transform transform hover:scale-105">
                          <img data-aos="zoom-out" data-aos-duration="1000" src="img/6.jpg" alt="Produk 6" class="w-36 h-36 object-cover mb-2 transition-opacity rounded-xl">
                          <p class="text-sm font-semibold text-center transition-opacity">Nama Produk 6</p>
                        </div>
                      </div>

                      <!-- Tombol Previous -->
                      <button @click="slideIndexTop = (slideIndexTop - 1 + 2) % 2" class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                        &#x2190; <!-- Panah kiri -->
                      </button>

                      <!-- Tombol Next -->
                      <button @click="slideIndexTop = (slideIndexTop + 1) % 2" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                        &#x2192; <!-- Panah kanan -->
                      </button>
                    </div>
                  </div>

                <!-- Produk Terbaru -->
                <div>
                  <h2 class="text-2xl font-bold mb-4 text-center text-gray-200">Produk Terbaru</h2>

                  <div class="relative">
                    <div x-show="slideIndexBottom === 0" class="grid grid-cols-1 md:grid-cols-3 gap-4 overflow-hidden fade">
                      <!-- Card 1 -->
                      <div class="flex flex-col items-center bg-gray-200 p-4 rounded-3xl shadow-md w-500 transition-transform transform hover:scale-105">
                        <img data-aos="zoom-out" data-aos-duration="1000" src="img/1.jpg" alt="Produk Terbaru 1" class="w-36 h-36 object-cover mb-2 transition-opacity rounded-xl">
                        <p class="text-sm font-semibold text-center transition-opacity">Nama Produk Terbaru 1</p>
                      </div>

                      <!-- Card 2 -->
                      <div class="flex flex-col items-center bg-gray-200 p-4 rounded-3xl shadow-md w-500 transition-transform transform hover:scale-105">
                        <img data-aos="zoom-out" data-aos-duration="1000" src="img/2.jpg" alt="Produk Terbaru 2" class="w-36 h-36 object-cover mb-2 transition-opacity rounded-xl">
                        <p class="text-sm font-semibold text-center transition-opacity">Nama Produk Terbaru 2</p>
                      </div>

                      <!-- Card 3 -->
                      <div class="flex flex-col items-center bg-gray-200 p-4 rounded-3xl shadow-md w-500 transition-transform transform hover:scale-105">
                        <img data-aos="zoom-out" data-aos-duration="1000" src="img/3.jpg" alt="Produk Terbaru 3" class="w-36 h-36 object-cover mb-2 transition-opacity rounded-xl">
                        <p class="text-sm font-semibold text-center transition-opacity">Nama Produk Terbaru 3</p>
                      </div>
                    </div>

                    <div x-show="slideIndexBottom === 1" class="grid grid-cols-1 md:grid-cols-3 gap-4 overflow-hidden fade">
                      <!-- Card 4 -->
                        <div class="flex flex-col items-center bg-gray-200 p-4 rounded-3xl shadow-md w-500 transition-transform transform hover:scale-105">
                          <img data-aos="zoom-out" data-aos-duration="1000" src="img/4.jpg" alt="Produk Terbaru 4" class="w-36 h-36 object-cover mb-2 transition-opacity rounded-xl">
                          <p class="text-sm font-semibold text-center transition-opacity">Nama Produk Terbaru 4</p>
                        </div>

                        <!-- Card 5 -->
                        <div class="flex flex-col items-center bg-gray-200 p-4 rounded-3xl shadow-md w-500 transition-transform transform hover:scale-105">
                          <img data-aos="zoom-out" data-aos-duration="1000" src="img/5.jpg" alt="Produk Terbaru 5" class="w-36 h-36 object-cover mb-2 transition-opacity rounded-xl">
                          <p class="text-sm font-semibold text-center transition-opacity">Nama Produk Terbaru 5</p>
                        </div>

                        <!-- Card 6 -->
                        <div class="flex flex-col items-center bg-gray-200 p-4 rounded-3xl shadow-md w-500 transition-transform transform hover:scale-105">
                          <img data-aos="zoom-out" data-aos-duration="1000" src="img/6.jpg" alt="Produk Terbaru 6" class="w-36 h-36 object-cover mb-2 transition-opacity rounded-xl">
                          <p class="text-sm font-semibold text-center transition-opacity">Nama Produk Terbaru 6</p>
                        </div>
                      </div>

                      <!-- Tombol Previous -->
                      <button @click="slideIndexBottom = (slideIndexBottom - 1 + 2) % 2" class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                        &#x2190; <!-- Panah kiri -->
                      </button>

                      <!-- Tombol Next -->
                      <button @click="slideIndexBottom = (slideIndexBottom + 1) % 2" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">
                        &#x2192; <!-- Panah kanan -->
                      </button>
                    </div>
                  </div>
                  <div class="mt-5 text-center">
                    <a href="/halaman-produk" class="bg-blue-800 text-white px-4 py-2 rounded-full">Produk Selengkapnya</a>
                  </div>
                </section>

              </div>
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

            {{-- Akhir Produk --}}


            {{-- Mockup 2 --}}
            {{-- <section class="bg-gray-100 py-8">
                <div class="container mx-auto">
                  <div class="bg-white p-8 rounded-lg shadow-md">
                    <!-- Mockup Image and Text -->
                    <div class="flex items-center">
                      <div class="w-1/2 mr-8">
                        <!-- Mockup Text Goes Here -->
                        <h2 class="text-2xl font-bold mb-4">Mockup Title</h2>
                        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                      <div class="w-1/2">
                        <!-- Mockup Image Goes Here -->
                        <img src="img/w.jpg" alt="Mockup" class="w-full h-auto rounded-md">
                      </div>
                    </div>
                  </div>
                </div>
              </section> --}}
            {{-- Akhir Mockuo --}}

            {{-- Mockup --}}
            {{-- <section class="bg-gray-100 py-8">
                <div class="container mx-auto">
                  <div class="bg-white p-8 rounded-lg shadow-md">
                    <!-- Mockup Image and Text -->
                    <div class="flex items-center">
                      <div class="w-1/2">
                        <!-- Mockup Image Goes Here -->
                        <img src="img/bg100.jpg" alt="Mockup" class="w-full h-auto rounded-md">
                      </div>
                      <div class="w-1/2 ml-8">
                        <!-- Mockup Text Goes Here -->
                        <h2 class="text-2xl font-bold mb-4">Mockup Title</h2>
                        <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      </div>
                    </div>
                  </div>
                </div> --}}
              {{-- </section> --}}
            {{-- Akhir Mockup --}}

            {{-- About --}}
            {{-- <div class="font-sans"> --}}

                <!-- About Us Section -->
                {{-- <section class="about-us-section" onmousemove="handleMouseMove(event)">
                  <div class="carousel">
                    <div class="carousel-inner mt-7">
                      <!-- Image 1 -->
                      <div class="carousel-item">
                        <img src="img/a.1.jpg" alt="Image 1" class="carousel-img">
                        <div class="text-container">
                          <h2>Image 1 Title</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                      </div>

                      <!-- Image 2 -->
                      <div class="carousel-item">
                        <img src="img/a.1.jpg" alt="Image 2" class="carousel-img">
                        <div class="text-container">
                          <h2>Image 2 Title</h2>
                          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                      </div>

                      <!-- Image 3 -->
                      <div class="carousel-item">
                        <img src="img/a.1.jpg" alt="Image 3" class="carousel-img">
                        <div class="text-container">
                          <h2>Image 3 Title</h2>
                          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                      </div>
                    </div>

                    <!-- Slider Controls -->
                    <div class="slider">
                      <button onclick="prevSlide()">❮</button>
                      <button onclick="nextSlide()">❯</button>
                    </div>
                  </div>

                  <script>
                    const carousel = document.querySelector('.carousel-inner');
                    let currentIndex = 0;

                    function showImage(index) {
                      const translateValue = -index * 100 + '%';
                      carousel.style.transform = 'translateX(' + translateValue + ')';
                    }

                    function nextSlide() {
                      currentIndex = (currentIndex + 1) % 3;
                      showImage(currentIndex);
                    }

                    function prevSlide() {
                      currentIndex = (currentIndex - 1 + 3) % 3;
                      showImage(currentIndex);
                    }

                    // Auto play the carousel every 4 seconds
                    setInterval(() => {
                      nextSlide();
                    }, 4000); // Change image every 4 seconds
                  </script>
                </section>

              </div> --}}
              {{-- Style --}}
              {{-- <style>
                body {
                  background-color: white; /* Set the background color to white */
                }

                .about-us-section {
                  height: 100vh;
                  display: flex;
                  flex-direction: column;
                  justify-content: center;
                  align-items: center;
                  background-color: white; /* Background color set to white */
                  color: black; /* Text color set to black */
                  overflow: hidden; /* Hide overflow for parallax effect */
                }

                .carousel {
                  max-width: 800px;
                  overflow: hidden;
                  border-radius: 15px; /* Rounded corners for the entire carousel container */
                  position: relative;
                }

                .carousel-inner {
                  display: flex;
                  transition: transform 0.5s ease-in-out;
                }

                .carousel-item {
                  min-width: 100%;
                  box-sizing: border-box;
                  border-radius: 15px; /* Rounded corners for each carousel item */
                  overflow: hidden;
                }

                .carousel-img {
                  width: 100%;
                  height: auto;
                  transition: transform 0.3s ease-in-out; /* Transition for parallax effect */
                }

                .text-container {
                  text-align: center;
                  padding: 20px;
                }

                .slider {
                  width: 100%;
                  position: absolute;
                  bottom: 0;
                  display: flex;
                  justify-content: space-between;
                  padding: 10px;
                  background: rgba(255, 255, 255, 0.8); /* Background color set to white with some transparency */
                }

                .slider button {
                  background: transparent;
                  color: black;
                  border: none;
                  cursor: pointer;
                }
              </style> --}}
              {{-- Style --}}
            {{-- Akhir About --}}

            {{-- H --}}


            {{-- Akhir H --}}



            {{-- Awal Highlight Produk --}}
                <div class="container mx-auto mt-8" id="highlight" style="padding-top: 70px;">
                    <h1  class="font-bold text-2xl text-center highlight-title"> Highlight </h1>
                    <div class="mt-4 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3 mx-5 md:mx-0">
                        @foreach ($menus as $menu)
                        <div data-aos="zoom-in" data-aos-duration="3000" class="border border-black p-4 rounded-xl">
                            <div class="bg-slate-600 p-2 flex justify-center rounded-2xl">
                                <img data-aos="zoom-in" data-aos-duration="3000" src="/img/1.jpg" alt="">
                            </div>
                            <div class="mt-3">
                                <p class="font-light text-black text-base">{{ $menu->category }}</p>
                                <p class="font-light text-2xl">{{ $menu->name }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            {{-- Akhir Highlight --}}

            {{-- Coba --}}
            {{-- <div class="font-sans bg-gray-100 h-screen flex items-center justify-center">

                <!-- Image Section -->
                <section class="text-center">
                  <div class="flex justify-center space-x-4">
                    <!-- Image 1 -->
                    <div>
                      <img src="https://via.placeholder.com/192x192" alt="Image 1" class="mb-2">
                      <p>Text 1</p>
                    </div>

                    <!-- Image 2 -->
                    <div>
                      <img src="https://via.placeholder.com/192x192" alt="Image 2" class="mb-2">
                      <p>Text 2</p>
                    </div>

                    <!-- Image 3 -->
                    <div>
                      <img src="https://via.placeholder.com/192x192" alt="Image 3" class="mb-2">
                      <p>Text 3</p>
                    </div>

                    <!-- Image 4 -->
                    <div>
                      <img src="https://via.placeholder.com/192x192" alt="Image 4" class="mb-2">
                      <p>Text 4</p>
                    </div>

                    <!-- Image 5 -->
                    <div>
                      <img src="https://via.placeholder.com/192x192" alt="Image 5" class="mb-2">
                      <p>Text 5</p>
                    </div>
                  </div>
                </section>

              </div> --}}
            {{-- Coba --}}



            {{-- Pop-Up Contact WhatsApp--}}
            {{-- Akhir --}}

        <script>
        AOS.init();
        </script>


    @endsection
