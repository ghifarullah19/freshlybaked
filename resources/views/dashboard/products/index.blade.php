<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/style.css">
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://cdn.tailwindcss.com"></script>

@include('dashboard.layouts.header')
@include('dashboard.layouts.sidebar')

<body class="relative bg-[#6B240C] overflow-hidden max-h-screen">
<div class="text-4xl font-bold mb-4 mx-3 my-3"></div>
<hr class="border-t border-gray-600 my-4 mx-4 px-[610px]"> <!-- Separator line -->

<main class="ml-60 pt-8 max-h-screen overflow-auto">
    <div class="px-6 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-3xl shadow-gray-900 drop-shadow-2xll p-8 mb-5">
                @if (session()->has('success'))
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-green-400" role="alert">
                        <span class="font-medium">Success!</span>
                        {{ session('success') }}
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ session('loginError') }}
                    </div>
                @endif

                   {{-- modal button product --}}
                    <div class="block text-black mb-5 text-center font-semibold">
                        Tabel Produk
                    </div>

                    <!-- Modal toggle -->
                    <div class="flex flex-row">
                        <button data-modal-target="modal-product" data-modal-toggle="modal-product" class="mr-1 block text-white bg-[#994D1C] hover:bg-[#E48F45] focus:ring-4 focus:outline-none focus:ring-[#994D1C] font-medium rounded-lg text-sm px-5 py-2.5 text-center h-fit" type="button">
                            Tambah Data
                        </button>
                       {{-- end modal toggle --}}
                       
                       {{-- button urut --}}
                       <form action="/dashboard/products" class="inline">
                           <select name="col" for="col" id="col" class="text-white bg-[#994D1C] hover:bg-[#E48F45] focus:ring-4 focus:outline-none focus:ring-[#994D1C] font-medium rounded-lg text-sm pl-2 py-2.5">
                               <option value="">Kolom</option>
                               <option value="name">Nama</option>
                               <option value="category">Kategori</option>
                               <option value="price">Harga</option>
                           </select>
                           <select name="sort" for="sort" id="sort" class="text-white bg-[#994D1C] hover:bg-[#E48F45] focus:ring-4 focus:outline-none focus:ring-[#994D1C] font-medium rounded-lg text-sm pl-2 py-2.5">
                                <option value="">Urutan</option>
                                <option value="asc">Menaik</option>
                                <option value="desc">Menurun</option>
                            </select>
                           <button class="text-white bg-gray-800 hover:bg-gray-600-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">
                               Urut
                           </button>
                       </form>
                    </div>
                    

                    <!-- Main modal -->
                    <div id="modal-product" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full transition ease-in-out delay-150  pt-10 hover:-translate-y-1 hover:scale-110 duration-300">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                    <h3 class="text-lg font-semibold text-gray-900">
                                        Tambah Produk
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="modal-product">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form method="POST" action="/dashboard/products" class="max-w-2xl my-4 mx-4" enctype="multipart/form-data" class="p-4 md:p-5" >
                                   @csrf
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product name" required>
                                            @error('name')
                                            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                                                <span class="font-medium">Danger alert!</span>
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-span-2">
                                            <label for="slug" class="block mb-2 text-sm font-medium text-gray-900">Slug</label>
                                            <input type="text" name="slug" id="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product name" required>
                                            @error('slug')
                                            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                                                <span class="font-medium">Danger alert!</span>
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                                            <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="$2999" required>
                                            @error('email')
                                            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                                                <span class="font-medium">Danger alert!</span>
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                       {{-- dropdown sorting --}}
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900   ">Category</label>
                                            <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                                <option selected="">Select category</option>
                                                <option value="1">Cake</option>
                                                <option value="2">Bread</option>
                                                <option value="3">Signature</option>
                                            </select>
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="counter-input" class="block mb-1 text-sm font-medium text-black">Choose quantity:</label>
                                            <div class="relative flex items-center">
                                                <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                    <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                    </svg>
                                                </button>
                                                <input type="text" id="quantity" name="quantity" data-input-counter data-input-counter-min="1" data-input-counter-max="10" class="flex-shrink-0 text-black border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="1" required>
                                                <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="flex-shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                    <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="image">Post Image</label>
                                            <input type="file" id="image" name="image" onchange="previewImage()">
                                            <img class="mt-3 img-preview">
                                            @error('image')
                                            <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                                                <span class="font-medium">Danger alert!</span>
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-span-2">
                                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Product Description</label>
                                            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write product description here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-span-2 pb-5">
                                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                            Add new product
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- end modal button product --}}
                <div class="flex overflow-x-auto shadow-md sm:rounded-lg mx-3 mt-5">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-800 ">
                        <tr>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                No
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Nama Produk
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Kategori
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Harga
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-center text-xs font-semibold text-white uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($menus as $menu)
                            <tr>
                                {{-- Isi Tabel No --}}
                                <th scope="row" class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $loop->iteration }}
                                </th>
                                {{-- Isi Tabel Name --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $menu->name  }}
                                </td>
                                {{-- Isi Tabel Categories --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{ $menu->category->name }}
                                </td>
                                {{-- Isi Tabel Price --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    Rp.{{ $menu->price }}
                                </td>
                                {{-- Isi Tabel Button --}}
                                <td class="px-6 flex">
                                <td class="px-6 ml-10 my-2 py-1 inline-flex bg-transparent">
                                    <button onclick="window.location.href='/dashboard/products/{{ $menu->slug }}'" type="button" class="ml-2 px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-s-lg hover:bg-blue-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                        <svg class="w-3 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                                <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z"/>
                                            </g>
                                        </svg>
                                    </button>
                                    <button onclick="window.location.href='/dashboard/products/{{ $menu->slug }}/edit'" type="submit" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-gray-900 hover:bg-amber-400 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                        <svg class="w-3 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 16">
                                            <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                                            <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
                                        </svg>
                                    </button>
                                    <form action="/dashboard/products/{{ $menu->slug }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Are you sure?')" type="submit" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-e-lg hover:bg-red-600 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                            <svg class="w-3 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
      fetch('/dashboard/products/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
    // document.addEventListener('trix-file-accept', function(e) {
    //   e.preventDefault();
    // });

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
</body>
