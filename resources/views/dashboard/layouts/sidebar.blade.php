<aside class="fixed inset-y-0 left-0 bg-[#F5CCA0] shadow-md max-h-screen w-60">
    <div class="flex flex-col justify-between h-full">
        <div class="flex-grow">
            <div class="px-4 py-6 text-center border-b">
                <h1 class="text-xl font-bold leading-none">
                    <img src="/img/logo.jpg" alt="Logo Dashboard" class="inline-block mb-2 h-12 w-12 rounded-xl items-center">
                    <span class="text-red-500">Freshly</span>Baked </h1>
            </div>
            <div class="p-4">
                <ul class="space-y-1">
                    <li>
                        <a href="/dashboard" class="flex items-center bg-[#E48F45] hover:bg-[#6B240C] rounded-xl font-bold text-sm text-white py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mr-1">
                                <path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z"/>
                            </svg>
                            <div class="ml-2">Home</div>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/products" class="flex bg-[#E48F45] hover:bg-[#6B240C] rounded-xl font-bold text-sm text-white py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                            </svg>Product list
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/categories" class="flex bg-[#E48F45] hover:bg-[#6B240C] rounded-xl font-bold text-sm text-white py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                            </svg>Category
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/users" class="flex bg-[#E48F45] hover:bg-[#6B240C] rounded-xl font-bold text-sm text-white py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>Account
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/pdf" class="flex bg-[#E48F45] hover:bg-[#6B240C] rounded-xl font-bold text-sm text-white py-3 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 28 28"><g fill="currentColor"><path d="M14 2v8a2 2 0 0 0 2 2h7.999l.001.078V23.6a2.4 2.4 0 0 1-2.4 2.4H6.4A2.4 2.4 0 0 1 4 23.6V4.4A2.4 2.4 0 0 1 6.4 2z"/>
                                    <path d="M15.5 2.475V10a.5.5 0 0 0 .5.5h7.502a2.739 2.739 0 0 0-.307-.366l-7.431-7.431a2.401 2.401 0 0 0-.264-.228"/>
                                </g>
                            </svg>
                            <div class="ml-3">PDF Reporting</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="p-4 bg-[#994D1C] pb-1">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="mt-2 inline-flex items-center justify-center h-9 px-4 rounded-xl bg-[#F5CCA0] text-gray-300 hover:text-white text-sm font-semibold transition">
                    <svg class="text-[#6B240C] hover:" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                </button>
                <span class="font-bold text-sm text-white ml-2">Logout</span>
            </form>
        </div>
    </div>
</aside>
