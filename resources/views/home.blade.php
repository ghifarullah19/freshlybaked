

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
            <button onclick="window.location.href='products'" class="px-4 md:px-6 lg:px-8 py-2 md:py-3 lg:py-3 xl:py-4 bg-[#b57810] text-white rounded-full hover:bg-[#994D1C] focus:outline-none focus:shadow-outline-yellow active:bg-[#f59918] font-bold mx-auto mt-3 md:mt-0">Shop Now ➲</button>
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
                    <a  href="about" class="absolute bottom-0 right-0 mb-8 mr-2 p-1 border border-white bg-black rounded-lg text-gray-300 font-bold hover:text-blue-200 hover:border-blue-500 hover:bg-black transition duration-300 text-sm">Baca Lebih Lanjut ➥</a>
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


    <script>
    AOS.init();
    </script>

@endsection
