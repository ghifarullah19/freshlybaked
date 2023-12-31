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

<main class="ml-64 pt-8 max-h-screen overflow-auto">
    <div class="px-6 py-8">
        <div class="max-w-screen mx-auto">
            <div class="bg-white rounded-3xl p-5 mb-5">
                <div class="block text-black text-center font-semibold">
                    Tabel User
                </div>

                <div class="flex flex-row">
                    {{-- button urut --}}
                    <form action="/dashboard/users">
                        <select name="col" for="col" id="col" class="text-white bg-[#994D1C] hover:bg-[#E48F45] focus:ring-4 focus:outline-none focus:ring-[#994D1C] font-medium rounded-lg text-sm pl-2 py-2.5">
                            <option value="">Kolom</option>
                            <option value="name">Nama</option>
                            <option value="username">Username</option>
                            <option value="email">Email</option>
                            <option value="is_admin">Admin</option>
                            <option value="created_at">Dibuat Pada</option>
                            <option value="updated_at">Diubah Pada</option>
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

                <div class="flex overflow-x-auto shadow-md sm:rounded-lg mt-5">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-400 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                No
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Nama
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Username
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Admin
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Dibuat Pada
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Diubah Pada
                            </th>
                            <th scope="col" class="px-5 py-3 border-b-2 border-gray-200 bg-[#6B240C] text-left text-xs font-semibold text-white uppercase tracking-wider">
                                Action
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                {{-- Isi Tabel No --}}
                                <th scope="row" class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-black">
                                    {{ $loop->iteration }}
                                </th>
                                {{-- Isi Tabel Name --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-black">
                                    {{ $user->name  }}
                                </td>
                                {{-- Isi Tabel Username --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-black">
                                    {{ $user->username  }}
                                </td>
                                {{-- Isi Tabel Email --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-black">
                                    {{ $user->email }}
                                </td>
                                {{-- Isi Tabel Is admin --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-black">
                                    @if ($user->is_admin == 1)
                                    {{ "true" }}
                                    @else
                                    {{ "false" }}
                                    @endif
                                </td>
                                {{-- Isi Tabel Created at --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-black">
                                    {{ $user->created_at }}
                                </td>
                                {{-- Isi Tabel Updated at --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-black">
                                    {{ $user->updated_at }}
                                </td>
                                {{-- Isi Tabel Button --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm tex">
                                    <button onclick="window.location.href='/dashboard/users/{{ $user->username }}'" type="button" class="ml-2 px-4 py-2.5 text-sm font-medium text-white bg-blue-700 border border-white rounded-xl mb-2 hover:bg-blue-500 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
                                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                                <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z"/>
                                            </g>
                                        </svg>
                                    </button>
                                    <form action="/dashboard/users/{{ $user->username }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button onclick="return confirm('Are you sure?')" type="submit" class="px-4 py-2 text-sm font-medium text-white bg-red-700 border border-white hover:bg-red-600 hover:text-white rounded-xl focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                                            <svg class="w-3 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
