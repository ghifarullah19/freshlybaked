<aside class="fixed inset-y-0 left-0 bg-gray-300 shadow-md max-h-screen w-60">
    <div class="flex flex-col justify-between h-full">
        <div class="flex-grow">
            <div class="px-4 py-6 text-center border-b">
                <h1 class="text-xl font-bold leading-none">
                    <img src="/img/freshlybaked.png" alt="Logo Dashboard" class="inline-block mb-2 h-12 w-12 rounded-xl items-center">
                    <span class="text-red-500">Freshly</span>Baked </h1>
            </div>
            <div class="p-4">
                <ul class="space-y-1">
                    <li>
                        <a href="/dashboard" class="flex `items-center bg-gray-500 rounded-xl font-bold text-sm text-yellow-900 py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z"/>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/products" class="flex bg-gray-400 hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                            </svg>Product list
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/categories" class="flex bg-gray-400 hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                            </svg>Category
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="flex bg-gray-400 hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>Tags
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="p-4 bg-gray-400 pb-1">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="mt-2 inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="" viewBox="0 0 16 16">
                        <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                </button>
                <span class="font-bold text-sm ml-2">Logout</span>
            </form>
        </div>
    </div>
</aside>


{{--<div class="flex min-h-screen bg-gray-100">--}}
{{--    <!-- Sidebar -->--}}
{{--    <div class="bg-gray-900 text-white w-64 min-h-screen">--}}
{{--       <div class="flex justify-center items-center mt-4">--}}
{{--         <img src="/img/freshlybaked.png" alt="Logo Dashboard" class="h-16 w-16 rounded-xl">--}}
{{--       </div>--}}
{{--       <ul class="mt-4">--}}
{{--         <li class="p-2">--}}
{{--           <a href="/dashboard" class="flex items-center space-x-2">--}}
{{--             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>--}}
{{--             <span>Dashboard</span>--}}
{{--           </a>--}}
{{--         </li>--}}
{{--         <li class="p-2">--}}
{{--           <a href="/dashboard/products" class="flex items-center space-x-2">--}}
{{--             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M3 7v10c0 2.21 1.79 4 4 4h13c2.21 0 4-1.79 4-4V7c0-2.21-1.79-4-4-4H7c-2.21 0-4 1.79-4 4zm13 2h-2v-2h2zm0-4h-2V7h2v2z"></path></svg>--}}
{{--             <span>Product</span>--}}
{{--           </a>--}}
{{--         </li>--}}
{{--         <li class="p-2">--}}
{{--           <a href="/dashboard/categories" class="flex items-center space-x-2">--}}
{{--             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5"><path d="M3 7v10c0 2.21 1.79 4 4 4h13c2.21 0 4-1.79 4-4V7c0-2.21-1.79-4-4-4H7c-2.21 0-4 1.79-4 4zm13 2h-2v-2h2zm0-4h-2V7h2v2z"></path></svg>--}}
{{--             <span>Categories</span>--}}
{{--           </a>--}}
{{--         </li>--}}
{{--       </ul>--}}
{{--       <hr class="border-t border-gray-600 my-4"> <!-- Separator line -->--}}
{{--       <form action="/logout" method="POST">--}}
{{--          @csrf--}}
{{--         <button type="submit" class="text-white border-none px-4 py-2 rounded-md justify-center items-center flex mt-4">--}}
{{--           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 mr-2">--}}
{{--            <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"></path>--}}
{{--            <polyline points="16 17 21 12 16 7"></polyline>--}}
{{--            <line x1="21" y1="12" x2="9" y2="12"></line>--}}
{{--          </svg> Logout--}}
{{--        </button>--}}
{{--      </form>--}}
{{--    </div>--}}
    <!-- Content -->
{{--<div class="flex flex-col items-center w-40 h-full overflow-hidden text-gray-400 bg-gray-900 rounded">--}}
{{--    <a class="flex items-center w-full px-3 mt-3" href="#">--}}
{{--        <img src="/img/freshlybaked.png" alt="logo" class="w-8 h-8 fill-current rounded-full">--}}
{{--        <span class="ml-2 text-sm font-bold">Freshly Baked</span>--}}
{{--    </a>--}}
{{--    <div class="w-full px-2">--}}
{{--        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-700">--}}
{{--            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">--}}
{{--                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">Dasboard</span>--}}
{{--            </a>--}}
{{--            <a class="flex items-center w-full h-12 px-3 mt-2 text-gray-200 bg-gray-700 rounded" href="#">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">--}}
{{--                    <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4">--}}
{{--                        <path d="M44 14L24 4L4 14v20l20 10l20-10z"/>--}}
{{--                        <path stroke-linecap="round" d="m4 14l20 10m0 20V24m20-10L24 24M34 9L14 19"/>--}}
{{--                    </g>--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">Product</span>--}}
{{--            </a>--}}
{{--            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="/dashboard/categories">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">--}}
{{--                    <path fill="currentColor" d="M14 25h14v2H14zm-6.83 1l-2.58 2.58L6 30l4-4l-4-4l-1.42 1.41zM14 15h14v2H14zm-6.83 1l-2.58 2.58L6 20l4-4l-4-4l-1.42 1.41zM14 5h14v2H14zM7.17 6L4.59 8.58L6 10l4-4l-4-4l-1.42 1.41z"/>--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">Categories</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="flex flex-col items-center w-full mt-2 border-t border-gray-700">--}}
{{--            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">--}}
{{--                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">Status Penjualan</span>--}}
{{--            </a>--}}
{{--            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">--}}
{{--                <svg class="w-6 h-6 stroke-current"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">Settings</span>--}}
{{--            </a>--}}
{{--            <a class="relative flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-700 hover:text-gray-300" href="#">--}}
{{--                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">Messages</span>--}}
{{--                <span class="absolute top-0 left-0 w-2 h-2 mt-2 ml-2 bg-indigo-500 rounded-full"></span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-800 hover:bg-gray-700 hover:text-gray-300" href="#">--}}
{{--        <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />--}}
{{--        </svg>--}}
{{--        <span class="ml-2 text-sm font-medium">Account</span>--}}
{{--    </a>--}}
{{--</div>--}}
