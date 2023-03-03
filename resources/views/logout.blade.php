<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel = "stylesheet" href="css/style.css">
    <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
</head>

</nav>
  <nav class="relative w-full flex flex-wrap items-center justify-between py-4 bg-gray-100 text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-lg ">
  <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
    <div class="container-fluid">
      <a class="flex items-center text-gray-900 hover:text-gray-900 focus:text-gray-900 mt-2 lg:mt-0 mr-1" href="#">
        <img src="img/RamadhanKu_logo.png" style="height: 20px" alt="" loading="lazy" />
      </a>
  </div>
  <div class="flex justify-end">
        <button class="navbar-toggler text-gray-500 border-0 hover:shadow-none hover:no-underline py-2 px-2.5 bg-transparent focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
        <button class="space-x-3.5">
            <a href="/login">Login</a>
            </path>
            </svg>
        </button>
    </div>
</nav>

<!-- carousel -->
<div
  id="carouselExampleIndicators"
  class="relative"
  data-te-carousel-init
  data-te-carousel-slide>
  <div
    class="absolute right-0 bottom-0 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0 h-[20px]" 
    data-te-carousel-indicators>
    <button
      type="button"
      data-te-target="#carouselExampleIndicators"
      data-te-slide-to="0"
      data-te-carousel-active
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-gray-100 bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-current="true"
      aria-label="Slide 1"></button>
    <button
      type="button"
      data-te-target="#carouselExampleIndicators"
      data-te-slide-to="1"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-gray-100 bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 2"></button>
    <button
      type="button"
      data-te-target="#carouselExampleIndicators"
      data-te-slide-to="2"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-gray-100 bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 3"></button>
  </div>
  <div
    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
    <div
      class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item
      data-te-carousel-active>
      <img
        src="bg/1.png"
        class="block w-full"
        alt="mosque" class=""/>
    </div>
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item>
      <img
        src="bg/2.jpeg"
        class="block w-full"
        alt="Light" />
    </div>
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item>
      <img
        src="bg/3.jpeg"
        class="block w-full"
        alt="Qur'an" />
    </div>
  </div>
  <button
    class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselExampleIndicators"
    data-te-slide="prev">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Previous</span>
  </button>
  <button
    class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselExampleIndicators"
    data-te-slide="next">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Next</span>
  </button>
</div>
<div class="bg-gray-100">
  <!-- component -->
  <div class="">
    <h1 class="text-neutral-900 font-semibold text-3xl text-center bg-gray-100 py-3">Agenda Kegiatan Ramadhan</h1>
  </div>
  <!-- Fitur Pertama-->

  <div class="flex m-5 justify-center">
      <!-- fitur tpa -->
      
      <div class="block max-w-sm justify-center">
        <div class="flex flex-col items-center">
          <a href="#!" class="">
            <img
              class="rounded-t-lg items-center"
              src="img/btn-home/tpa.png"
              alt="Qur'an-icon" />
          </a>
        </div>
        <div class="p-6">
          <h5
            class="mb-2 text-xl font-medium leading-tight text-slate-800 dark:text-black text-center">
            TPA
          </h5>
          <p class="mb-4 m-5 text-base text-neutral-600 dark:text-black text-center ">
          Agenda kegiatan TPA yang akan dilaksanakan pada bulan ramadhan
          </p>
            <div class="flex justify-center">
              <button
                type="button"
                class="flex flex-col justify-center rounded m-5 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white space-x-2
                bg-slate-800 transition duration-150 ease-in-out hover:bg-black focus:bg-primary-600  focus:outline-none focus:ring-0 active:bg-primary-700"
                data-te-ripple-init
                data-te-ripple-color="light">
                Selengkapnya
              </button>
            </div>
        </div>
      </div>

      <!-- fitur konsumsi ramadhan -->
      <div class="block max-w-sm justify-center">
        <div class="flex flex-col items-center">
          <a href="#!" class="">
            <img
              class="rounded-t-lg items-center"
              src="img/btn-home/konsum.png"
              alt="food" />
          </a>
        </div>
        <div class="p-6">
          <h5
            class="mb-2 text-xl font-medium leading-tight text-slate-800 dark:text-black text-center">
            Kelola Konsumsi
          </h5>
          <p class="mb-4 m-5 text-base text-neutral-600 dark:text-black text-center ">
          Pengelolaan konsumsi untuk takjil, jabur dan buka bersama pada bulan ramadhan
          </p>
            <div class="flex justify-center">
              <button
                type="button"
                class="flex flex-col justify-center rounded m-5 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white space-x-2
                bg-slate-800 transition duration-150 ease-in-out hover:bg-black focus:bg-primary-600  focus:outline-none focus:ring-0 active:bg-primary-700"
                data-te-ripple-init
                data-te-ripple-color="light">
                Selengkapnya
              </button>
            </div>
        </div>
      </div>
      
      <!-- Fitur Tarawih -->
      <div class="block max-w-sm justify-center">
        <div class="flex flex-col items-center">
          <a href="#!" class="">
            <img
              class="rounded-t-lg items-center"
              src="img/btn-home/tarawih.png"
              alt="people" />
          </a>
        </div>
        <div class="p-6">
          <h5
            class="mb-2 text-xl font-medium leading-tight text-slate-800 dark:text-black text-center">
            Tarawih
          </h5>
          <p class="mb-4 m-5 text-base text-neutral-600 dark:text-black text-center ">
          Agenda kegiatan Sholat Tarawih berjamaah yang akan dilaksanakan pada bulan ramadhan
          </p>
            <div class="flex justify-center">
              <button
                type="button"
                class="flex flex-col justify-center rounded m-5 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white space-x-2
                bg-slate-800 transition duration-150 ease-in-out hover:bg-black focus:bg-primary-600  focus:outline-none focus:ring-0 active:bg-primary-700"
                data-te-ripple-init
                data-te-ripple-color="light">
                Selengkapnya
              </button>
            </div>
        </div>
      </div>
      <div class="block max-w-sm justify-center">
        <div class="flex flex-col items-center">
          <a href="#!" class="">
            <img
              class="rounded-t-lg items-center"
              src="img/btn-home/tadarus.png"
              alt="people" />
          </a>
        </div>
        <div class="p-6">
          <h5
            class="mb-2 text-xl font-medium leading-tight text-slate-800 dark:text-black text-center">
            Tadarus
          </h5>
          <p class="mb-4 m-5 text-base text-neutral-600 dark:text-black text-center ">
          Agenda kegiatan Tadarus yang akan dilaksanakan pada bulan ramadhan
          </p>
            <div class="flex justify-center">
              <button
                type="button"
                class="flex flex-col justify-center rounded m-5 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white space-x-2
                bg-slate-800 transition duration-150 ease-in-out hover:bg-black focus:bg-primary-600  focus:outline-none focus:ring-0 active:bg-primary-700"
                data-te-ripple-init
                data-te-ripple-color="light">
                Selengkapnya
              </button>
            </div>
        </div>
      </div>
    </div>

    <!-- fitur kedua -->
    <div class="flex m-5 justify-center">
      
    <!-- fitur khataman -->
      <div class="block max-w-sm justify-center">
        <div class="flex flex-col items-center">
          <a href="#!" class="">
            <img
              class="rounded-t-lg items-center"
              src="img/btn-home/khataman.png"
              alt="Qur'an-icon" />
          </a>
        </div>
        <div class="p-6">
          <h5
            class="mb-2 text-xl font-medium leading-tight text-slate-800 dark:text-black text-center">
            Khataman & Nuzulul Quran
          </h5>
          <p class="mb-4 m-5 text-base text-neutral-600 dark:text-black text-center ">
          Agenda kegiatan Khataman & Nuzulul Quran yang akan dilaksanakan pada bulan ramadhan
          </p>
            <div class="flex justify-center">
              <button
                type="button"
                class="flex flex-col justify-center rounded m-5 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white space-x-2
                bg-slate-800 transition duration-150 ease-in-out hover:bg-black focus:bg-primary-600  focus:outline-none focus:ring-0 active:bg-primary-700"
                data-te-ripple-init
                data-te-ripple-color="light">
                Selengkapnya
              </button>
            </div>
        </div>
      </div>

      <!-- fitur zakat -->
      <div class="block max-w-sm justify-center">
        <div class="flex flex-col items-center">
          <a href="#!" class="">
            <img
              class="rounded-t-lg items-center"
              src="img/btn-home/zakat.png"
              alt="hands" />
          </a>
        </div>
        <div class="p-6">
          <h5
            class="mb-2 text-xl font-medium leading-tight text-slate-800 dark:text-black text-center">
            Zakat
          </h5>
          <p class="mb-4 m-5 text-base text-neutral-600 dark:text-black text-center ">
          Agenda kegiatan pembagian Zakat yang akan dilaksanakan pada bulan ramadhan
          </p>
            <div class="flex justify-center">
              <button
                type="button"
                class="flex flex-col justify-center rounded m-5 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white space-x-2
                bg-slate-800 transition duration-150 ease-in-out hover:bg-black focus:bg-primary-600  focus:outline-none focus:ring-0 active:bg-primary-700"
                data-te-ripple-init
                data-te-ripple-color="light">
                Selengkapnya
              </button>
            </div>
        </div>
      </div>
      
      <!-- Fitur Takbiran -->
      <div class="block max-w-sm justify-center">
        <div class="flex flex-col items-center">
          <a href="#!" class="">
            <img
              class="rounded-t-lg items-center"
              src="img/btn-home/takbiran.png"
              alt="drum" />
          </a>
        </div>
        <div class="p-6">
          <h5
            class="mb-2 text-xl font-medium leading-tight text-slate-800 dark:text-black text-center">
            Takbiran
          </h5>
          <p class="mb-4 m-5 text-base text-neutral-600 dark:text-black text-center ">
          Agenda kegiatan Takbiran yang akan dilaksanakan pada bulan ramadhan
          </p>
            <div class="flex justify-center">
              <button
                type="button"
                class="flex flex-col justify-center rounded m-5 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white space-x-2
                bg-slate-800 transition duration-150 ease-in-out hover:bg-black focus:bg-primary-600  focus:outline-none focus:ring-0 active:bg-primary-700"
                data-te-ripple-init
                data-te-ripple-color="light">
                Selengkapnya
              </button>
            </div>
        </div>
      </div>

      <!-- fitur sholat ied -->
      <div class="block max-w-sm justify-center">
        <div class="flex flex-col items-center">
          <a href="#!" class="">
            <img
              class="rounded-t-lg items-center"
              src="img/btn-home/sholat-ied.png"
              alt="carpet" />
          </a>
        </div>
        <div class="p-6">
          <h5
            class="mb-2 text-xl font-medium leading-tight text-slate-800 dark:text-black text-center">
            Sholat Ied
          </h5>
          <p class="mb-4 m-5 text-base text-neutral-600 dark:text-black text-center ">
          Agenda kegiatan Tadarus yang akan dilaksanakan pada bulan ramadhan
          </p>
            <div class="flex justify-center">
              <button
                type="button"
                class="flex flex-col justify-center rounded m-5 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white space-x-2
                bg-slate-800 transition duration-150 ease-in-out hover:bg-black focus:bg-primary-600  focus:outline-none focus:ring-0 active:bg-primary-700"
                data-te-ripple-init
                data-te-ripple-color="light">
                Selengkapnya
              </button>
            </div>
        </div>
      </div>



    </div>

</div>
</h1>
</div>
