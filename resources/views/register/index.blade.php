<link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

<body class="bg-custom min-h-screen">
    <div class="flex items-center justify-center min-h-full">
        <div class="bg-gray-900 bg-opacity-60  rounded-lg shadow p-8 w-full max-w-md justify-center">
            <p href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-50 dark:text-white">
                <img class="w-8 h-8 mr-2 rounded-full" src="img/logo.jpg" alt="logo">
                Freshly Baked
            </p>
            <form class="max-w-sm mx-auto" action="/register" method="POST">
                @csrf
                <div class="mb-5">
                  <label for="name" class="block mb-2 text-sm font-medium text-white">Name</label>
                  <input type="text" id="name" name="name" class="text-sm rounded-lg block w-full p-2.5 bg-white border-black placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" placeholder="Enter Your Username" required value="{{ old('name') }}">
                </div>
                @error('name')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message  }}
                  </div>
                @enderror
                <div class="mb-5">
                  <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                  <input type="email" id="email" name="email" class="text-sm rounded-lg block w-full p-2.5 bg-white border-black placeholder-gray-400 text-white focus:ring-blue-800 focus:border-blue-800 shadow-sm-light" placeholder="Enter your Email" required value="{{ old('email') }}">
                </div>
                @error('email')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message  }}
                  </div>
                @enderror
                <div class="mb-5">
                  <label for="password" class="block mb-2 text-sm font-medium text-white">Your password</label>
                  <input type="password" placeholder="********" id="password" name="password" class="text-sm rounded-lg block w-full p-2.5 bg-white border-black placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500 shadow-sm-light" required>
                </div>
                @error('password')
                    <div class="p-4 mb-4 text-sm bg-gray-800 text-red-400" role="alert">
                        <span class="font-medium">Danger alert!</span>
                        {{ $message  }}
                  </div>
                @enderror
                <button type="submit" class="mb-1.5 block w-full text-center text-white bg-indigo-600 hover:bg-indigo-700 px-2 py-1.5 rounded-md">Register new account</button>
              </form>
            <!-- Login button -->
            <div class="text-center mt-4">
                <span class="text-xs text-gray-400 font-semibold">Already have account?</span>
                <a href="/login" class="text-white text-xs font-semibold hover:text-blue-500">
                    Sign In
                </a>
            </div>
            <!-- login with socialite -->
            <div class="flex justify-center items-center">
                <span class="w-full border border-white"></span>
                <span class="px-4 text-white">Or</span>
                <span class="w-full border border-white"></span>
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
                  <span class="block right-2 text-white ml-2">Register with Google</span>
              </button>
          </div>
        </div>
    </div>
</body>
