@extends('layouts.main')

    @section('container')

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


                {{-- BackgroundG --}}
                <div class="bg-black flex items-center justify-center h-screen">
                    <div class="text-center">
                        <div class="relative inline-block">
                            <img data-aos="zoom-in" data-aos-duration="3000"  src="img/bg3.jpg" alt="Image" class="w-full h-auto">
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-left">
                                <h1 class="text-4xl font-bold">CONTACT US</h1>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Akhir Backgroundg--}}


                {{-- Form Contact  --}}
                <div class="bg-white h-screen flex items-center justify-center">

                  <div class="bg-gray-200 p-8 rounded shadow-md w-full max-w-xl mx-auto">
                    <div class="bg-white p-8 rounded shadow-md">
                      <h1 class="text-2xl font-bold mb-4 text-center">Contact Us</h1>

                      <form action="#" method="post">
                        <div class="mb-4">
                          <label for="name" class="block text-sm font-medium text-gray-600">Your Name</label>
                          <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <div class="mb-4">
                          <label for="email" class="block text-sm font-medium text-gray-600">Your Email</label>
                          <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <div class="mb-4">
                          <label for="message" class="block text-sm font-medium text-gray-600">Message</label>
                          <textarea id="message" name="message" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
                        </div>

                        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md w-full">Send Message</button>
                      </form>
                    </div>
                  </div>

                </div>
                {{-- FAkhir Formcontact --}}


              {{-- Section Adrees --}}

              <div class="bg-gray-900">

                  <section class="container mx-auto mt-8 flex flex-wrap items-center justify-center w-full">
                      <!-- Address Section (Left) -->
                      <div class="w-full md:w-1/2 p-4">
                          <h1 class="text-white text-3xl font-bold mb-4">SIAPIH FRESHLY BAKED</h1>
                          <p class="text-white mb-2">📍Jl. Sariwangi Dalam 28 Blok 23/64,</p>
                          <p class="text-white mb-2">Bandung, Indonesia</p>
                          <p class="text-white">40559</p>
                      </div>

                      <!-- Image Section (Right) -->
                      <div class="w-full md:w-1/2 p-4">
                          <img data-aos="zoom-in" data-aos-duration="3000" src="img/maps2.png" alt="Company Location" class="w-full h-auto rounded-md">
                      </div>
                  </section>

              </div>

              {{-- Akhir Section Adress --}}


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
