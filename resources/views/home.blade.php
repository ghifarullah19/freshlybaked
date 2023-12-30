

@extends('layouts.main')

@section('container')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

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
            <h2 data-aos="zoom-out" data-aos-duration="3000" class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold  mb-1 italic">Freshly Baked</h2>
            <p data-aos="zoom-out" data-aos-duration="3000" class="text-sm md:text-md lg:text-lg xl:text-xl mb-4 italic">Baking Private & Made By Order</p>
        </div>
    </section>
    {{-- Akhir Header --}}

    {{-- Awal Highlight Produk --}}
    <div class="container mx-auto pt-10 md:pt-20 mb-10 md:mb-24" id="highlight">
        <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl text-center highlight-title">HIGHLIGHT</h1>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mx-5 md:mx-0">
            @foreach ($menus as $menu)
                <div class="bg-[#85603F] w-full md:w-72 h-96 shadow-md m-3 hover:-translate-y-5 transition rounded-2xl">
                    <div class="h-3/4 w-full rounded-t-2xl overflow-hidden">
                        <img class="w-full h-full object-cover rounded-t" src="/img/1.jpg" alt="piña">
                    </div>
                    <div class="w-full h-1/4 p-3 bg-amber-800/[0.7] rounded-b-2xl">
                        <span class="text-lg font-semibold text-white uppercase tracking-wide">{{ $menu->name }}</span>
                        <p class="text-gray-300 text-sm leading-5 mt-1">{{ $menu->category->name }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex flex-col md:flex-row items-center justify-center mt-3">
            <button onclick="window.location.href='products'" class="px-4 md:px-6 lg:px-8 py-2 md:py-3 lg:py-3 xl:py-4 bg-[#454545] text-white rounded-full hover:bg-[#b57810] focus:outline-none focus:shadow-outline-yellow active:bg-[#f59918] font-bold mx-auto mt-3 md:mt-0">Shop Now ➲</button>
        </div>
    </div>

    {{-- Akhir Highlight --}}



    {{-- About Us RUMAH --}}
    <div class="font-sans  bg-[#FAEED1]">

        <!-- Toko Section -->
        <section class="flex items-center justify-center min-h-screen">
            <div class="text-center mx-auto max-w-2xl">
                <!-- Gambar Toko -->
                <div class="relative inline-block">
                    <img  src="img/g.jpg" alt="Toko" class="w-full h-auto mb-4 rounded-xl">
                    <a  href="about" class="absolute bottom-0 right-0 mb-2 mr-2 p-1 border border-white bg-black rounded-lg text-gray-300 font-bold hover:text-blue-200 hover:border-blue-500 hover:bg-black transition duration-300 text-sm">Baca Lebih Lanjut ➥</a>
                </div>

                <!-- Deskripsi Toko -->
                <p class="text-base md:text-lg lg:text-xl text-gray-900 italic mx-auto ">
                    Freshly Baked Adalah Sebuah Toko Yang Menjual Berbagai Macam Kue.
                    <br>
                    Didirikan pada tahun 2017, Freshly Baked by Origin Bakery didirikan karena kami melihat potensi pertumbuhan industri roti di Indonesia melalui perubahan gaya hidup. Namun, saat ini pilihan roti yang lebih sehat sangat sedikit dan kemungkinan besar harganya mahal.
                </p>
            </div>
        </section>

    </div>
    {{-- akhir About Us Rumah --}}

    {{-- Siapih --}}
    {{-- <section id="" class="pt-10 bg-[#50382b] pb-20">
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
                                    <img class=" h-250 mx-auto border-4 rounded-lg" src="img/siapih2.jpg" alt="Image">
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
    </section> --}}
    {{-- Siapih --}}



    {{-- Contact Us --}}
    <section class="text-white body-font relative mb-10">
        <div class="absolute inset-0 bg-gray-300" id="contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126754.16878830967!2d107.43259844335937!3d-6.88248469999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b7c62b117b%3A0x5afbf7beb8b7a5d7!2sSi%20Apih%20freshly%20baked!5e0!3m2!1sid!2sid!4v1703387343381!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container px-5 py-10 md:py-20 mx-5 md:mx-10 shadow-2xl flex flex-col md:flex-row mt-[-40]">
            <div class="lg:w-1/3 bg-[#BD9354] rounded-lg p-6 flex flex-col md:ml-auto w-full md:w-1/2 mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-white text-2xl md:text-3xl mb-1 font-medium title-font">Hubungi Kami</h2>
                <p class="leading-relaxed mb-5 text-gray-600"></p>
                <form name="Freshlybaked-Contactform">
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-white">Nama</label>
                        <input type="text" id="name" name="nama" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Masukkan Nama Anda" required>
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-white">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Masukkan Email Anda" required>
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-white">Pesan</label>
                        <textarea id="message" name="pesan" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" placeholder="Masukkan Pesan Anda"></textarea>
                    </div>
                    <button type="submit" class="text-white py-2.5 px-5 me-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm mb-2 dark:bg-blue-600 focus:outline-none">Kirim</button>
                </form>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbwbdPPJvwvZTVKvJPsUbyUy61lxNEMYQDK4PtVAu4UencuyCy7I_tdZtMj--9QHzplHVQ/exec'
        const form = document.forms['Freshlybaked-Contactform']

        form.addEventListener('submit', e => {
            e.preventDefault()

            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => {
                    form.reset();
                    return submitForm(this);
                    console.log('Success!', response);
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>
    <script>
        function submitForm(form) {
            Swal.fire({
                title: "Pesan telah terkirim !",
                text: "Terimakasih",
                icon: "success"
            });
        }
    </script>

    {{-- Contact --}}
    {{-- <section class="min-h-screen bg-[#50382b]">
        <div class="container px-6 py-10 mx-auto">
            <div class="lg:flex lg:items-center lg:-mx-10">
                <div class="lg:w-1/2 lg:mx-10">
                    <h1 class="text-2xl font-bold text-gray-100 capitalize lg:text-3xl ">CONTACT US</h1>

                    <p class="mt-4 text-gray-200">
                        Ask us everything and we would love
                        to hear from you
                    </p>

                    <form class="mt-12">
                        <div class="-mx-2 md:items-center md:flex">
                            <div class="flex-1 px-2">
                                <label class="block mb-2 text-sm text-gray-100">Full Name</label>
                                <input type="text" placeholder=". . . . . ." class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-300 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="flex-1 px-2 mt-4 md:mt-0">
                                <label class="block mb-2 text-sm text-gray-100">Email address</label>
                                <input type="email" placeholder=". . . . . ." class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-300 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
                        </div>

                        <div class="w-full mt-4">
                            <label class="block mb-2 text-sm text-gray-100">Message</label>
                            <textarea class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md md:h-56 dark:placeholder-gray-600 dark:bg-gray-300 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Message"></textarea>
                        </div>

                        <button class="w-full px-6 py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            Send Message
                        </button>
                    </form>
                </div>

                <div class="mt-12 lg:flex lg:mt-0 lg:flex-col lg:items-center lg:w-1/2 lg:mx-10">
                    <img class="hidden object-cover mx-auto rounded-full lg:block shrink-0 w-96 h-96 border" src="img/CP.jpg" alt="">

                    <div class="mt-6 space-y-8 md:mt-8">
                        <p class="flex items-start -mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>

                            <span class="mx-2 text-gray-100 truncate w-72">
                                Jl. Sarijadi Raya No.64 blok 23, 40164
                            </span>
                        </p>

                        <p class="flex items-start -mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>

                            <span class="mx-2 text-gray-100 truncate w-72">(257) 563-7401</span>
                        </p>

                        <p class="flex items-start -mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>

                            <span class="mx-2 text-gray-100 truncate w-72">info.siapihfreshlybaked@gmail.com</span>
                        </p>
                    </div>

                    <div class="mt-6 w-80 md:mt-8">
                        <h3 class="text-gray-100 font-semibold">Follow us</h3>

                        <div class="flex mt-4 -mx-1.5 ">
                            <a class="mx-1.5 text-gray-300 transition-colors duration-300 transform hover:text-blue-500" href="https://www.instagram.com/siapih_freshly_baked/">
                                <svg class="w-10 h-10 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.6668 6.67334C18.0002 7.00001 17.3468 7.13268 16.6668 7.33334C15.9195 6.49001 14.8115 6.44334 13.7468 6.84201C12.6822 7.24068 11.9848 8.21534 12.0002 9.33334V10C9.83683 10.0553 7.91016 9.07001 6.66683 7.33334C6.66683 7.33334 3.87883 12.2887 9.3335 14.6667C8.0855 15.498 6.84083 16.0587 5.3335 16C7.53883 17.202 9.94216 17.6153 12.0228 17.0113C14.4095 16.318 16.3708 14.5293 17.1235 11.85C17.348 11.0351 17.4595 10.1932 17.4548 9.34801C17.4535 9.18201 18.4615 7.50001 18.6668 6.67268V6.67334Z" />
                                </svg>
                            </a>

                            <a class="mx-1.5 text-gray-300 transition-colors duration-300 transform hover:text-blue-500" href="https://www.instagram.com/siapih_freshly_baked/">
                                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.2 8.80005C16.4731 8.80005 17.694 9.30576 18.5941 10.2059C19.4943 11.1061 20 12.327 20 13.6V19.2H16.8V13.6C16.8 13.1757 16.6315 12.7687 16.3314 12.4687C16.0313 12.1686 15.6244 12 15.2 12C14.7757 12 14.3687 12.1686 14.0687 12.4687C13.7686 12.7687 13.6 13.1757 13.6 13.6V19.2H10.4V13.6C10.4 12.327 10.9057 11.1061 11.8059 10.2059C12.7061 9.30576 13.927 8.80005 15.2 8.80005Z" fill="currentColor" />
                                    <path d="M7.2 9.6001H4V19.2001H7.2V9.6001Z" fill="currentColor" />
                                    <path d="M5.6 7.2C6.48366 7.2 7.2 6.48366 7.2 5.6C7.2 4.71634 6.48366 4 5.6 4C4.71634 4 4 4.71634 4 5.6C4 6.48366 4.71634 7.2 5.6 7.2Z" fill="currentColor" />
                                </svg>
                            </a>

                            <a class="mx-1.5 text-gray-300 transition-colors duration-300 transform hover:text-blue-500" href="https://www.instagram.com/siapih_freshly_baked/">
                                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 10.2222V13.7778H9.66667V20H13.2222V13.7778H15.8889L16.7778 10.2222H13.2222V8.44444C13.2222 8.2087 13.3159 7.9826 13.4826 7.81591C13.6493 7.64921 13.8754 7.55556 14.1111 7.55556H16.7778V4H14.1111C12.9324 4 11.8019 4.46825 10.9684 5.30175C10.1349 6.13524 9.66667 7.2657 9.66667 8.44444V10.2222H7Z" fill="currentColor" />
                                </svg>
                            </a>

                            <a class="mx-1.5 text-gray-300 transition-colors duration-300 transform hover:text-blue-500" href="https://www.instagram.com/siapih_freshly_baked/">
                                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.9294 7.72275C9.65868 7.72275 7.82715 9.55428 7.82715 11.825C7.82715 14.0956 9.65868 15.9271 11.9294 15.9271C14.2 15.9271 16.0316 14.0956 16.0316 11.825C16.0316 9.55428 14.2 7.72275 11.9294 7.72275ZM11.9294 14.4919C10.462 14.4919 9.26239 13.2959 9.26239 11.825C9.26239 10.354 10.4584 9.15799 11.9294 9.15799C13.4003 9.15799 14.5963 10.354 14.5963 11.825C14.5963 13.2959 13.3967 14.4919 11.9294 14.4919ZM17.1562 7.55495C17.1562 8.08692 16.7277 8.51178 16.1994 8.51178C15.6674 8.51178 15.2425 8.08335 15.2425 7.55495C15.2425 7.02656 15.671 6.59813 16.1994 6.59813C16.7277 6.59813 17.1562 7.02656 17.1562 7.55495ZM19.8731 8.52606C19.8124 7.24434 19.5197 6.10901 18.5807 5.17361C17.6453 4.23821 16.51 3.94545 15.2282 3.88118C13.9073 3.80621 9.94787 3.80621 8.62689 3.88118C7.34874 3.94188 6.21341 4.23464 5.27444 5.17004C4.33547 6.10544 4.04628 7.24077 3.98201 8.52249C3.90704 9.84347 3.90704 13.8029 3.98201 15.1238C4.04271 16.4056 4.33547 17.5409 5.27444 18.4763C6.21341 19.4117 7.34517 19.7045 8.62689 19.7687C9.94787 19.8437 13.9073 19.8437 15.2282 19.7687C16.51 19.708 17.6453 19.4153 18.5807 18.4763C19.5161 17.5409 19.8089 16.4056 19.8731 15.1238C19.9481 13.8029 19.9481 9.84704 19.8731 8.52606ZM18.1665 16.5412C17.8881 17.241 17.349 17.7801 16.6456 18.0621C15.5924 18.4799 13.0932 18.3835 11.9294 18.3835C10.7655 18.3835 8.26272 18.4763 7.21307 18.0621C6.51331 17.7837 5.9742 17.2446 5.69215 16.5412C5.27444 15.488 5.37083 12.9888 5.37083 11.825C5.37083 10.6611 5.27801 8.15832 5.69215 7.10867C5.97063 6.40891 6.50974 5.8698 7.21307 5.58775C8.26629 5.17004 10.7655 5.26643 11.9294 5.26643C13.0932 5.26643 15.596 5.17361 16.6456 5.58775C17.3454 5.86623 17.8845 6.40534 18.1665 7.10867C18.5843 8.16189 18.4879 10.6611 18.4879 11.825C18.4879 12.9888 18.5843 15.4916 18.1665 16.5412Z" fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- Akhir Contact --}}

    <script>
    AOS.init();
    </script>

@endsection
