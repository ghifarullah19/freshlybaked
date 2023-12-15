@extends('dashboard.layouts.main')

@section('container')
<body class="relative bg-gray-700 overflow-hidden max-h-screen">
@include('dashboard.layouts.sidebar')
<main class="ml-60 max-h-screen overflow-auto">
    <div class="px-6 py-7">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-3xl p-8 mb-5">
                <h1 class="text-3xl font-bold mb-10">Halaman Status Transaksi</h1>
                <div class="flex items-center justify-between">
                    <div class="flex items-stretch">
                        <div class="text-gray-400 text-xs">Admin {{ Auth()->user()->name }}<br>connected</div>
                        <div class="h-100 border-l mx-4"></div>
                        <div class="flex flex-nowrap -space-x-3">
                            <div class="h-9 w-9">
                                <img class="object-cover w-full h-full rounded-full" src="https://ui-avatars.com/api/?background=random">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-x-2">
                        <button type="button"    class="inline-flex items-center justify-center h-9 px-5 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                            Setting
                        </button>
                    </div>
                </div>
                <hr class="my-5">
                <div class="grid grid-cols-2 gap-x-20">
                    <div>
                        <h2 class="text-2xl font-bold mb-4">Status</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-2">
                                <div class="p-4 bg-green-100 rounded-xl">
                                    <div class="font-bold text-xl text-gray-800 leading-none">Antrian Pesanan</div>
                                    <div class="mt-5">
                                        <button type="button" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                                            Lihat Selengkapnya
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                                <div class="font-bold text-2xl leading-none">5</div>
                                <div class="mt-2">Pesanan Selesai</div>
                            </div>
                            <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                                <div class="font-bold text-2xl leading-none">3</div>
                                <div class="mt-2">Antrian tersisa</div>
                            </div>
                            <div class="col-span-2">
                                <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                                    <div class="font-bold text-xl leading-none">Maksimal Pesanan Perhari</div>
                                    <div class="mt-2">5 of 8 selesai</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold mb-4">Histori Pesanan</h2>

                        <div class="space-y-4">
                            <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                <div class="flex justify-between">
                                    <div class="text-gray-400 text-xs">Antrian 1</div>
                                    <div class="text-gray-400 text-xs">4h</div>
                                </div>
                                <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">Cheezy Cake</a>
                            </div>
                            <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                <div class="flex justify-between">
                                    <div class="text-gray-400 text-xs">Antrian 2</div>
                                    <div class="text-gray-400 text-xs">3h</div>
                                </div>
                                <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">Redvelvet Cake</a>
                            </div>
                            <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                <div class="flex justify-between">
                                    <div class="text-gray-400 text-xs">Antrian 3</div>
                                    <div class="text-gray-400 text-xs">2h</div>
                                </div>
                                <a href="javascript:void(0)" class="font-bold hover:text-yellow-800 hover:underline">Normal Cake</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
@endsection
