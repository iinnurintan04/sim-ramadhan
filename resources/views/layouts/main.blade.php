<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/style.css">


</head>

</nav>
<nav class="relative w-full flex flex-wrap items-center justify-between py-4 bg-gray-100 text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-lg">
    <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
        <div class="container-fluid">
            <a class="flex items-center text-gray-900 hover:text-gray-900 focus:text-gray-900 mt-2 lg:mt-0 mr-1" href="#">
                <img src="img/RamadhanKu_logo.png" style="height: 20px" alt="" loading="lazy" />
            </a>
        </div>
        <div class="flex justify-end">
            <button class="navbar-toggler text-gray-500 border-0 hover:shadow-none hover:no-underline py-2 px-2.5 bg-transparent focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
            <button class="space-x-3.5">
                <a href="/logout">Logout</a>
                </path>
                </svg>
            </button>
        </div>
</nav>

<!-- Component -->

<div class="flex flex-wrap bg-gray-100 w-full h-screen">
    <div class="w-3/12 bg-white rounded p-3 shadow-lg">
        <div class="flex items-center space-x-4 p-2 mb-5">
            <!-- div space -->
            <div class="bg-white py-12"></div>
            <!-- div list fitur -->
            <div>
                <span class="text-sm tracking-wide flex items-center space-x-1">
                </span>
            </div>
        </div>
        <ul class="space-y-2 text-sm">
            <div>
                <li>
                    <button href="/home" type="dropdown" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-black " aria-controls="dropdown-dashboard" data-collapse-toggle="dropdown-dashboard">
                        <img src="img/dashboard.png" alt="" class="h-5">
                        <span class="flex-1 ml-1 text-left  text-gray-700 p-2 rounded-md font-medium focus:bg-gray-200 focus:shadow-outline" sidebar-toggle-item>Dashboard</span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-dashboard" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/" class="flex items-center w-full p-2 text-base font-medium text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100  pl-11">TPA</a>
                        </li>
                        <li>
                            <a href="/" class="flex items-center w-full p-2 text-base whitespace-nowrap font-medium text-gray-700 transition duration-75 rounded-lg group hover:bg-gray-200 pl-11 ">Kelola Konsumsi</a>
                        </li>
                        <li>
                            <a href="/" class="flex items-center w-full p-2 text-base font-medium text-gray-700 transition duration-75 rounded-lg group hover:bg-gray-100  pl-11">Tarawih</a>
                        </li>
                        <li>
                            <a href="/" class="flex items-center w-full p-2 text-base font-medium text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100  pl-11">Tadarus</a>
                        </li>
                    </ul>
                </li>
            </div>
            <li>
                <a href="/tpa" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline active:bg-gray-200 ">
                    <span class="text-black">
                        <img src="img/quran_tadarus.png" alt="" class="h-5">
                    </span>
                    <span>TPA</span>
                </a>
            </li>
            <li>
                <a href="/kelola_konsumsi" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline active:bg-gray-200 ">
                    <span class="text-black">
                        <img src="img/kelola_konsumsi.png" alt="" class="h-5">
                    </span>
                    <span>Kelola Konsumsi</span>
                </a>
            </li>
            <li>
                <a href="/tarawih" class="flex items-center space-x-3 text-gray-700 p-1 rounded-md font-medium hover:bg-gray-200 active:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:ring focus:ring-gray-200 cursor-pointer">
                    <span class="text-black">
                        <img src="img/tarawih.png" alt="" class="h-6 w-7">
                    </span>
                    <span>Tarawih</span>

                </a>
            </li>
            <li>
                <a href="/tadarus" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-black">
                        <img src="img/quran_tadarus.png" alt="" class="h-5">
                    </span>
                    <span>Tadarus</span>
                </a>
            </li>
            <li>
                <a href="/khataman" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <img src="img/khataman.png" alt="" class="h-5">
                    </span>
                    <span class="pl-1">Khataman & Nuzulul Quran</span>
                </a>
            </li>
            <li>
                <a href="/zakat" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class=" text-gray-600">
                        <img src="img/zakat.png" alt="" class="h-5 w-5">
                    </span>
                    <span class="pl-0.5">Zakat</span>
                </a>
            </li>
            <li>
                <a href="/takbiran" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <img src="img/takbiran.png" alt="" class="h-5">
                    </span>
                    <span>Takbiran</span>
                </a>
            </li>
            <li>
                <a href="/sholatied" class="flex items-center space-x-3 text-gray-700 p-1 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-black">
                        <img src="img/tarawih.png" alt="" class="h-6 w-7">
                    </span>
                    <span>Sholat ied</span>
                </a>
            </li>
            <li>
                <a href="/warga" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                    <span class="text-gray-600">
                        <img src="img/warga.png" alt="" class="h-5">
                        </svg>
                    </span>
                    <span>Warga</span>
                </a>
            </li>

            <!-- start debug -->
                <button href="/home" type="dropdown" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-black " aria-controls="dropdown-laporan" data-collapse-toggle="dropdown-laporan">
                        <img src="img/laporan.png" alt="" class="h-5">
                        <span class="flex-1 ml-1 text-left  text-gray-700 p-2 rounded-md font-medium focus:bg-gray-200 focus:shadow-outline" sidebar-toggle-item>Laporan</span>
                        <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-laporan" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/" class="flex items-center w-full p-2 text-base font-medium text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100  pl-11">Jadwal Bilal</a>
                        </li>
                        <li>
                            <a href="/" class="flex items-center w-full p-2 text-base whitespace-nowrap font-medium text-gray-700 transition duration-75 rounded-lg group hover:bg-gray-200 pl-11 ">Jadwal Imam Tarawih</a>
                        </li>
                        <li>
                            <a href="/" class="flex items-center w-full p-2 text-base font-medium text-gray-700 transition duration-75 rounded-lg group hover:bg-gray-100  pl-11">Jadwal Pengisi Tarawih</a>
                        </li>
                        <li>
                            <a href="/" class="flex items-center w-full p-2 text-base font-medium text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100  pl-11">Jadwal Konsumsi</a>
                        </li>
                    </ul>
            
            <!-- end debug -->

        </ul>
    </div>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <div class="w-9/12">
        <div class="p-4 text-gray-500 pl-20 py-8">
            @yield('container')
        </div>
    </div>
</div>

<script src="script/script.js"></script>
@vite('resource/js/app.js')

</body>

</html>