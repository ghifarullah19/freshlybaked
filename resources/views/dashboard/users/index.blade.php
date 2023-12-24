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

{{-- Button Add Product --}}
{{--<div class="mt-5 mx-3">--}}
{{--    <button type="button" class="flex py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><a href="/dashboard/products.create">Add New Product</a></button>--}}
{{--</div>--}}

<main class="ml-60 pt-8 max-h-screen overflow-auto">
    <div class="px-6 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-3xl p-5 mb-5">
                <div class="block text-black text-center font-semibold">
                    Tabel User
                </div>
                <div class="flex overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-400 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-white">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 text-white">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3 text-white">
                                Email
                            </th>
                            {{-- <th scope="col" class="px-6 py-3 text-white">
                                Password
                            </th> --}}
                            <th scope="col" class="px-6 py-3 text-white">
                                Admin
                            </th>
                            <th scope="col" class="px-6 py-3 text-white">
                                Action
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                            <tr class="odd:bg-white odd:dark:bg-amber-50 even:bg-gray-50 even:dark:bg-gray-300 dark:border-gray-700 border-b-2">
                                {{-- Isi Tabel No --}}
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </th>
                                {{-- Isi Tabel Name --}}
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $user->name  }}
                                </td>
                                {{-- Isi Tabel Categories --}}
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $user->email }}
                                </td>
                                {{-- Isi Tabel Price --}}
                                {{-- <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $user->password }}
                                </td> --}}
                                {{-- Isi Tabel Price --}}
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    @if ($user->is_admin == 1)
                                        {{ "true" }}
                                    @else
                                        {{ "false" }}
                                    @endif
                                </td>
                                {{-- Isi Tabel Button --}}
                                <td class="px-4 my-2 py-1 inline-flex bg-transparent">
                                    <button onclick="window.location.href='/dashboard/users/{{ $user->username }}'" type="button" class="ml-2 px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-s-lg hover:bg-blue-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                        <svg class="w-3 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                                <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z"/>
                                            </g>
                                        </svg>
                                    </button>
{{--                                    <button onclick="window.location.href='/dashboard/users/{{ $user->username }}/edit'" type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-gray-900 hover:bg-amber-400 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">--}}
{{--                                        <svg class="w-3 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 16">--}}
{{--                                            <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>--}}
{{--                                            <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>--}}
{{--                                        </svg>--}}
{{--                                    </button>--}}
                                    <form action="/dashboard/users/{{ $user->username }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Are you sure?')" type="submit" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-e-lg hover:bg-red-600 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                            <svg class="w-3 h-4 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                        </button>
                                    </form>
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
{{-- Tabel --}}
{{--<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-3">--}}
{{--    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">--}}
{{--        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">--}}
{{--            <tr>--}}
{{--                <th scope="col" class="px-6 py-3">--}}
{{--                    No--}}
{{--                </th>--}}
{{--                <th scope="col" class="px-6 py-3">--}}
{{--                    Name--}}
{{--                </th>--}}
{{--                <th scope="col" class="px-6 py-3">--}}
{{--                    Category--}}
{{--                </th>--}}
{{--                <th scope="col" class="px-6 py-3">--}}
{{--                    Price--}}
{{--                </th>--}}
{{--                <th scope="col" class="px-6 py-3">--}}
{{--                    Action--}}
{{--                </th>--}}
{{--            </tr>--}}
{{--        </thead>--}}
{{--         Isi Tabel --}}
{{--        <tbody>--}}
{{--            @foreach ($menus as $menu)--}}
{{--            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">--}}
{{--                 Isi Tabel No --}}
{{--                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">--}}
{{--                    {{ $loop->iteration }}--}}
{{--                </th>--}}
{{--                 Isi Tabel Name --}}
{{--                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">--}}
{{--                    {{ $menu->name  }}--}}
{{--                </td>--}}
{{--                 Isi Tabel Categories --}}
{{--                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">--}}
{{--                    {{ $menu->category }}--}}
{{--                </td>--}}
{{--                 Isi Tabel Price --}}
{{--                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">--}}
{{--                    Rp.{{ $menu->price }}--}}
{{--                </td>--}}
{{--                 Isi Tabel Button --}}
{{--                <td class="px-6 flex">--}}
{{--                    <td class="px-6 my-2 py-1 inline-flex bg-transparent">--}}
{{--                        <button onclick="window.location.href='#'" type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-s-lg hover:bg-blue-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-blue-500 dark:focus:bg-blue-500">--}}
{{--                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">--}}
{{--                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">--}}
{{--                                  <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>--}}
{{--                                  <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z"/>--}}
{{--                                </g>--}}
{{--                              </svg>--}}
{{--                          </button>--}}
{{--                          <button onclick="window.location.href='#'" type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-yellow-300 dark:focus:bg-yellow-300">--}}
{{--                            <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">--}}
{{--                                <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>--}}
{{--                                <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                        <button onclick="window.location.href='#'" type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-e-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-red-500 dark:focus:bg-red-500">--}}
{{--                            <svg class="w-4 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">--}}
{{--                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>--}}
{{--                            </svg>--}}
{{--                        </button>--}}
{{--                    </td>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}
{{--@endsection--}}
