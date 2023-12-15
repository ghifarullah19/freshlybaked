@extends('layouts.main')

    @section('container')

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/hammerjs@2.0.8/dist/hammer.min.js"></script>


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
                      <img data-aos="zoom-out" data-aos-duration="3000" src="img/g.jpg" alt="Toko" class="w-full h-auto mb-4 rounded-xl">
                      <a data-aos="zoom-out" data-aos-duration="3000" href="" class="absolute bottom-0 right-0 mb-2 mr-2 p-1 border border-white bg-black rounded-lg text-gray bold hover:text-blue-200 hover:border-blue-500 hover:bg-black transition duration-300 text-sm">Baca Lebih Lanjut ➥</a>
                    </div>

                    <!-- Deskripsi Toko -->
                    <p data-aos="zoom-out" data-aos-duration="3000" class="text-lg text-gray-100 mx-auto">Freshly Baked Adalah Sebuah Toko Yang Menjual Berbagi Macam Kue. <br> Didirikan pada tahun 2017, Freshly Baked by Origin Bakery didirikan karena kami melihat potensi pertumbuhan industri roti di Indonesia melalui perubahan gaya hidup. Namun, saat ini pilihan roti yang lebih sehat sangat sedikit dan kemungkinan besar harganya mahal.</p>
                  </div>
                </section>

            </div>
            {{-- Akhir Tentang Kami --}}

            {{--  --}}
            <div class="font-sans bg-gray-100">

                <!-- Section with Moving Images and Description -->
                <section class="py-16 bg-gray-100">
                  <div class="container mx-auto flex items-center justify-center flex-col md:flex-row">
                    <!-- Image on the Left with Animation -->
                    <div class="md:w-1/2 relative overflow-hidden mr-4 flex justify-center items-center">
                      <img src="img/baked.gif" alt="Left Image" class="h-auto animate-left rounded-xl" style="animation-duration: 4s; animation-timing-function: ease-in-out; animation-iteration-count: infinite;">
                    </div>

                    <!-- Image on the Right with Animation -->
                    <div class="md:w-1/2 relative overflow-hidden ml-4 flex justify-center items-center">
                      <img src="img/baked.gif" alt="Right Image" class="h-auto animate-right" style="animation-duration: 4s; animation-timing-function: ease-in-out; animation-iteration-count: infinite;">
                    </div>
                  </div>

                  <!-- Single Description Centered Below Images -->
                  <div class="mt-4 text-center">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4 mt-5">Kenapa Harus Beli Produk Kami?</h2>
                    <p class="text-gray-600 ml-7 mr-7">Dengan bangga kami hadirkan toko roti kami sebagai destinasi terbaik untuk menikmati kelezatan sehat dengan harga terjangkau. Roti berkualitas tinggi dari bahan pilihan tanpa pengawet, dan rasa yang membuat ketagihan menjadi tanda khas kami. Inovasi rasa yang luar biasa dan desain yang menarik menciptakan pengalaman kuliner yang tak terlupakan. Layanan ramah dan profesional dari tim kami, menu diet dan kesehatan, serta komitmen kami terhadap lingkungan membuat kunjungan ke toko kami lebih dari sekadar pembelian. Dapatkan keuntungan dari promosi dan diskon menarik, serta nikmati tempat yang nyaman untuk bersantai. Kami berkomitmen untuk memberikan yang terbaik untuk Anda, menjadikan toko roti kami sebagai pilihan utama yang memuaskan semua selera. Terima kasih atas kepercayaan Anda, dan mari bersama-sama menikmati kelezatan roti berkualitas di toko kami!.</p>
                  </div>
                </section>

              </div>
                {{-- Style --}}
                <style>
                    @keyframes moveLeft {
                      0% { transform: translateX(0); }
                      50% { transform: translateX(-50px); }
                      100% { transform: translateX(0); }
                    }

                    @keyframes moveRight {
                      0% { transform: translateX(0); }
                      50% { transform: translateX(50px); }
                      100% { transform: translateX(0); }
                    }
                </style>
                {{-- Akhir Style --}}
            {{--  --}}


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
            <div class="font-sans">

                <!-- About Us Section -->
                <section class="about-us-section" onmousemove="handleMouseMove(event)">
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

              </div>
              {{-- Style --}}
              <style>
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
              </style>
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
                <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
                    <div>
                        <a title="WhatsApp Number" href="https://api.whatsapp.com/send/?phone=6281322123045&text&type=phone_number&app_absent=0" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                            <img class="object-cover object-center w-full h-full rounded-full" src="img/wame.png"/>
                        </a>
                    </div>
                </div>
            {{-- Akhir --}}

        <script>
        AOS.init();
        </script>


    @endsection
