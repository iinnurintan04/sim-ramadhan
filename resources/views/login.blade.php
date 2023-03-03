<script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
@vite('resources/css/app.css')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>

<!-- container -->
<div class="flex flex-wrap min-h-screen w-full content-center justify-center bg-gray-200 py-10 text-black">
 <!-- login component -->
  <div class="flex shadow-md">
    <!-- login form -->
    <div class="flex flex-wrap content-center justify-center rounded-l-md bg-white" style="width: 24rem; height: 32rem;">
    <div class="w-72">
      <!-- heading -->
      <h1  class="text-3xl font-semibold"> Selamat Datang!</h1>
      <!-- form -->
      <small class="font-semibold">Silahkan masukkan data anda.</small>

        <!-- Form -->
        <form class="mt-4">
          <div class="mb-3">
            <label class="mb-2 block text-1xl font-semibold ">Email</label>
            <input type="email" placeholder="Enter your email" class="block w-full rounded-md border border-gray-300 focus:border-slate-100 focus:outline-none focus:ring-1 focus:ring-slate-100 py-1 px-1.5 bg-slate-300 text-black" />
          </div>

          <div class="mb-3 text-black">
            <label class="mb-2 block text-1xl font-semibold ">Password</label>
            <input type="password" placeholder="*****" class="block w-full rounded-md border border-gray-300 focus:border-slate-100 focus:outline-none focus:ring-1 focus:ring-slate-100 py-1 px-1.5 bg-slate-300  text-black" />
          </div>

          <div class="mb-3 flex flex-wrap content-center">
            <input id="remember" type="checkbox" class="mr-1 checked:bg-slate-700" /> <label for="remember" class="mr-auto text-xs font-semibold">Remember for 30 days</label>
            <a href="#" class="text-xs font-semibold text-slate-700">Forgot password?</a>
          </div>

          <div class="mb-3">
            <button href="/home" class="mb-1.5 block w-full text-center text-white bg-slate-800 hover:bg-slate-900 px-2 py-1.5 rounded-md font-semibold">Sign in</button>
            <button class="flex flex-wrap justify-center w-full border border-gray-300 hover:border-gray-500 px-2 py-1.5 rounded-md font-semibold">
              <img class="w-5 mr-2" src="https://lh3.googleusercontent.com/COxitqgJr1sJnIDe8-jiKhxDx1FrYbtRHKJ9z_hELisAlapwE9LUPh6fcXIfb5vwpbMl4xl9H9TRFPc5NOO8Sb3VSgIBrfRYvW6cUA">
              Sign in with Google
            </button>
          </div>
        </form>

        <!-- Footer -->
        <div class="text-center">
          <span class="text-xs text-gray-400 font-semibold">Don't have account?</span>
          <a href="#" class="text-xs font-semibold text-black">Sign up</a>
        </div>
      </div>
    </div>

    <!-- Login banner -->
    <div class="flex flex-wrap content-center justify-center rounded-r-md" style="width: 24rem; height: 32rem;">
      <img class="w-full h-full bg-center bg-no-repeat bg-cover rounded-r-md" src="bg/login.png">
    </div>

    </div>

    </div>

  </div>
</div>

</html>
