<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">


<body class="bg-custom min-h-screen login ">
    <div class="flex items-center justify-center min-h-full">
        <div class="bg-gray-900 bg-opacity-60  rounded-lg shadow p-8 w-full max-w-md justify-center">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-50 dark:text-white">
                <img class="w-8 h-8 mr-2 rounded-full" src="img/logo.jpg" alt="logo">
                Freshly Baked
            </a>
            <form>
                <div class="mb-4">
                    <label for="email" class="block mb-1 font-semibold text-gray-50">Email</label>
                    <input type="email" id="email" name="email" class="w-full border p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-1 font-semibold text-gray-50">Password</label>
                    <input type="password" id="password" name="password" class="w-full border p-2 rounded" required>
                </div>
                <button type="submit" class=" block mx-auto align-middlebg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded items-center">
                    Login
                </button>
            </form>
            <hr class="border-gray-300 my-4">
            <div class="text-center mt-4">
                <a href="/register" class="text-white hover:text-blue-500">
                    <p class="block font-sans text-sm relative w-max one text-center">
                        <span>Create account</span>
                        <span class="absolute -bottom-1 left-0 w-0 transition-all h-1 bg-yellow-400"></span>
                    </p>

                </a>
            </div>
            <!-- "" -->
            <!-- login with socialite -->
            <div class="text-center mt-4">
                <p class="text-gray-50">Or login with</p>
            </div>
            <div class="align-middle block mt-3">
                <button onclick="window.location.href='{{ route('google.login') }}'" class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 rounded-lg font-medium relative mx-auto border-2">
                    <span class="block left-3">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path fill="#EA4335 " d="M5.26620003,9.76452941 C6.19878754,6.93863203 8.85444915,4.90909091 12,4.90909091 C13.6909091,4.90909091 15.2181818,5.50909091 16.4181818,6.49090909 L19.9090909,3 C17.7818182,1.14545455 15.0545455,0 12,0 C7.27006974,0 3.1977497,2.69829785 1.23999023,6.65002441 L5.26620003,9.76452941 Z" />
                            <path fill="#34A853" d="M16.0407269,18.0125889 C14.9509167,18.7163016 13.5660892,19.0909091 12,19.0909091 C8.86648613,19.0909091 6.21911939,17.076871 5.27698177,14.2678769 L1.23746264,17.3349879 C3.19279051,21.2936293 7.26500293,24 12,24 C14.9328362,24 17.7353462,22.9573905 19.834192,20.9995801 L16.0407269,18.0125889 Z" />
                            <path fill="#4A90E2" d="M19.834192,20.9995801 C22.0291676,18.9520994 23.4545455,15.903663 23.4545455,12 C23.4545455,11.2909091 23.3454545,10.5272727 23.1818182,9.81818182 L12,9.81818182 L12,14.4545455 L18.4363636,14.4545455 C18.1187732,16.013626 17.2662994,17.2212117 16.0407269,18.0125889 L19.834192,20.9995801 Z" />
                            <path fill="#FBBC05" d="M5.27698177,14.2678769 C5.03832634,13.556323 4.90909091,12.7937589 4.90909091,12 C4.90909091,11.2182781 5.03443647,10.4668121 5.26620003,9.76452941 L1.23999023,6.65002441 C0.43658717,8.26043162 0,10.0753848 0,12 C0,13.9195484 0.444780743,15.7301709 1.23746264,17.3349879 L5.27698177,14.2678769 Z" />
                        </svg>
                    </span>
                    <span class="block right-2 text-white ml-2">Sign in with Google</span>
                </button>
            </div>
            <!-- end login with socialite -->
            <!-- register button -->

        </div>
    </div>
</body>