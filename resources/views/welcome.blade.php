<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- main.css link -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- flowbite css library -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

    <!-- Lora Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;500;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Title -->
    <title>Ok Garden</title>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded shadow-md">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <!--logo  -->
            <a href="#" class="flex items-center">
                <img src="./images/logo.png" class="mr-3 h-6 sm:h-7" alt="okgarden logo">
            </a>

            <!-- user profile -->
            <div class="flex items-center md:order-2">
                <button type="button" class="flex mr-3 text-sm rounded-full md:mr-0 focus:ring-4 focus:ring-green-700" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow" id="user-dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 496px, 0px);">
                    <div class="py-3 px-4">
                        <span class="block text-sm text-gray-900">Devaldi Caliesta Octadiani</span>
                        <span class="block text-sm font-medium text-gray-500 truncate">dev@okgarden.com</span>
                    </div>
                    <ul class="py-1" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Earnings</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <!-- navlink -->
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
                <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white bg-green-700 rounded md:bg-transparent md:text-gray-700 md:hover:text-green-700  md:p-0 md" aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar1" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 md:w-auto">Layanan
                            <svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar1" class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow">
                            <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100">Layanan 1</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100">Layanan 2</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100">Layanan 3</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar2" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 md:w-auto">Blog <svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar2" class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow">
                            <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100">Blog 1</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100">Blog 2</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100">Blog 3</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar3" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 md:w-auto">Mitra <svg class="ml-1 w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar3" class="hidden z-10 w-44 font-normal bg-white rounded divide-y divide-gray-100 shadow">
                            <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100">Mitra 1</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100">Mitra 2</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100">Mitra 3</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- hero section -->
    <div class="text-center mt-20 px-4 sm:px-4">
        <h1 class="sm:text-5xl text-3xl font-bold text-slate-800">Konsultasi Taman</h1>

        <p class="sm:text-md text-sm text-slate-800 mt-4">klik dibawah ini untuk memilih tanggal & waktu yand tersedia untuk memanggil konsultasi kami</p>
    </div>

    <!-- calendar & waktu section -->
    <div class="container mt-10 sm:flex sm:flex-warp justify-center gap-10 p-4">
        <!-- calendar -->
        <div class="max-w-sm w-full border-2 border-gray-200 rounded-lg mb-10 sm:mb-0">
            <div class="px-4 py-5 bg-white rounded-lg">
                <div class="px-4 flex items-center justify-between">
                    <span tabindex="0" class="focus:outline-none  text-base font-bol text-gray-800">October 2020</span>
                    <div class="flex items-center">
                        <button aria-label="calendar backward" class="focus:text-gray-400 hover:text-gray-400 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="15 6 9 12 15 18" />
                            </svg>
                        </button>
                        <button aria-label="calendar forward" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="9 6 15 12 9 18" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between pt-10 overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800">Mo</p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800">Tu</p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800">We</p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800">Th</p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800">Fr</p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800">Sa</p>
                                    </div>
                                </th>
                                <th>
                                    <div class="w-full flex justify-center">
                                        <p class="text-base font-medium text-center text-gray-800">Su</p>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pt-6">
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                </td>
                                <td class="pt-6">
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                </td>
                                <td class="pt-6">
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">1</p>
                                    </div>
                                </td>
                                <td class="pt-6">
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">2</p>
                                    </div>
                                </td>
                                <td class="pt-6">
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500">3</p>
                                    </div>
                                </td>
                                <td class="pt-6">
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500">4</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">5</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">6</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500font-medium">7</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="w-full h-full">
                                        <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                            <a role="link" tabindex="0" class="focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-cyan-400 focus:bg-cyan-500 hover:bg-cyan-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-cyan-400 rounded-full">8</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">9</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500">10</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500">11</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">12</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">13</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">14</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">15</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">16</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500">17</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500">18</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">19</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">20</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500font-medium">21</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">22</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500font-medium">23</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500">24</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500">25</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">26</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">27</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">28</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">29</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                        <p class="text-base text-gray-500 font-medium">30</p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end calendar -->

        <!-- waktu -->
        <div class="max-w-lg w-full border-2 border-gray-200 rounded-lg">
            <div class="px-4 py-5 bg-white rounded-lg">
                <div class="px-4 text-center">
                    <span tabindex="0" class="focus:outline-none text-base font-bold text-gray-800">Thursday</span>
                    <p tabindex="0" class="focus:outline-none  text-base  text-gray-800">October 8, 2022</p>
                </div>
                <div class=" mt-6 text-left">
                    <span tabindex="0" class="focus:outline-none  text-sm font-bold text-gray-800">Pilih Waktu</span>
                    <p tabindex="0" class="focus:outline-none  text-sm  text-gray-800">durasi konsultasi 30 menit</p>
                </div>

                <div class="mt-4">
                    <div class="grid grid-cols-2 gap-2 md:grid-cols-2 md:gap-4">
                        <div>
                            <button type="button" class="w-full inline-block px-4 py-2 border border-slate-600 text-blue-600 font-medium text-xs leading-normal uppercase rounded-lg hover:bg-blue-600 hover:bg-opacity-25 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                09.00
                            </button>
                        </div>
                        <div>
                            <button type="button" class="w-full inline-block px-4 py-2 border border-slate-600 text-blue-600 font-medium text-xs leading-normal uppercase rounded-lg hover:bg-blue-600 hover:bg-opacity-25 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                13.00
                            </button>
                        </div>
                        <div>
                            <button type="button" class="w-full inline-block px-4 py-2 border border-slate-600 text-blue-600 font-medium text-xs leading-normal uppercase rounded-lg hover:bg-blue-600 hover:bg-opacity-25 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                10.00
                            </button>
                        </div>
                        <div>
                            <button type="button" class="w-full inline-block px-4 py-2 border border-slate-600 text-blue-600 font-medium text-xs leading-normal uppercase rounded-lg hover:bg-blue-600 hover:bg-opacity-25 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                14.00
                            </button>
                        </div>
                        <div>
                            <button type="button" class="w-full inline-block px-4 py-2 border border-slate-600 text-blue-600 font-medium text-xs leading-normal uppercase rounded-lg hover:bg-blue-600 hover:bg-opacity-25 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                11.00
                            </button>
                        </div>
                        <div>
                            <button type="button" class="w-full inline-block px-4 py-2 border border-slate-600 text-blue-600 font-medium text-xs leading-normal uppercase rounded-lg hover:bg-blue-600 hover:bg-opacity-25 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                15.00
                            </button>
                        </div>
                        <div>
                            <button type="button" class="w-full inline-block px-4 py-2 border border-slate-600 text-blue-600 font-medium text-xs leading-normal uppercase rounded-lg hover:bg-blue-600 hover:bg-opacity-25 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                12.00
                            </button>
                        </div>
                        <div>
                            <button type="button" class="w-full inline-block px-4 py-2 border border-slate-600 text-blue-600 font-medium text-xs leading-normal uppercase rounded-lg hover:bg-blue-600 hover:bg-opacity-25 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                                16.00
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end waktu -->
    </div>
    </div>
    </div>
    <!-- end waktu & calendar -->

    <!-- informasi data diri -->

    <div class="container mt-3 items-center justify-center p-4 lg:px-40 content-random">
        <div class="mt-4 relative top-[420px] border  border-t-2"></div>
        <div class="bg-white w-full rounded-lg border-2 border-gray-200 px-28 py-6 content-random">
            <div class="mt-6 mb-100">
                <div class="text-left">
                    <span tabindex="0" class="focus:outline-none text-xl sm:text-3xl font-bold text-gray-800">Informasi Data Diri</span>
                </div>

                <!-- form data diri -->
                <form class="mt-6 mb-100">
                    <div class="sm:flex sm:flex-warp gap-10">
                        <div class="w-full md:w-1/2 mb-6 md:mb-0">
                            <label for="message" class="block mb-2 text-sm font-bold text-gray-700 ">
                                Nama Lengkap
                            </label>
                            <input class="w-full bg-gray-200 text-gray-700 border border-gray-200 
                    rounded py-2.5 px-4 mb-3 focus:bg-white focus:ring-green-700 focus:border-green-700" id="grid-first-name" type="text" placeholder="Nama Lengkap">
                        </div>
                        <div class="w-full md:w-1/2 mb-6">
                            <label for="message" class="block mb-2 text-sm font-bold text-gray-700 ">
                                No HP
                            </label>
                            <input class="form-control block w-full bg-gray-200 text-gray-700 border 
                    border-gray-200 rounded py-2.5 px-4  focus:bg-white 
                    focus:ring-green-700 focus:border-green-700" id="number" type="number" placeholder="+62 1733 7805">
                        </div>
                    </div>
                    <div class="w-ful flex space-x-3">
                        <label for="message" class="block mb-2 text-sm font-bold  text-gray-700 ">Alamat</label>
                        <textarea id="message" class="block p-2 h-[100px] resize-none w-full text-sm text-gray-700 
                            bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-700 focus:border-green-700" placeholder="Alamat">
                        </textarea>
                        <div class="mt-3 flex-none z-10 ">
                            <h1 class="text-green-700 font-bold text-sm underline absolute ml-[-160px] mt-14">Tambah Alamat Baru</h1>
                        </div>

                </form>
            </div>
        </div>

        <!-- informasi -->
        <!-- start container info -->
        <div class="mt-28 pt-12">
            <h1 class="text-xl font-bold">Informasi Konsultasi Diri</h1>
            <h3 class="mt-12 font-medium">Lahan Teman</h3>
            <p class="">Pilih Jumlah Lahan taman yang akan dibuat</p>
            <div class="flex flex-nowrap mt-2 space-x-3">
                <div class="p-2 border-green-600 border rounded-lg border-2 text-green-600 font-medium">1 Lahan Taman</div>
                <div class="p-2 border-green-600 border rounded-lg border-2 text-green-600 font-medium">2 Lahan Taman</div>
                <div class="p-2 border-green-600 border rounded-lg border-2 text-green-600 font-medium">3 Lahan Taman</div>
            </div>

            <h3 class="mt-4 font-medium">Teman Taman</h3>
            <p class="">Pilih Jumlah Lahan taman yang akan dibuat</p>
            <div class="flex p-4 mb-4 mt-2 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800" role="alert">
                <span class="sr-only">Info</span>
                <div>
                    <span class="font-bold">Catatan : </span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores numquam nisi laboriosam repellat neque. Ex dicta eligendi totam modi, odit saepe exercitationem iure dolorum id dignissimos, praesentium, libero tempora veritatis.
                </div>
            </div>
            <!-- card pilihan -->
            <div class="flex flex-wrap space-x-3">

                <div class="w-[236px] bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="./images/taman.jpg" alt="">
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Taman Minimals</h5>
                        </a>
                        <p class="mb-2 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021</p>
                        <a href="#" class="mb-3 float-right  inline-flex items-center py-2 px-3 text-sm font-medium text-center text-green-600">
                            Pilih
                        </a>
                    </div>
                </div>
                <div class="w-[236px] bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="./images/taman.jpg" alt="">
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Taman Minimals</h5>
                        </a>
                        <p class="mb-2 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021</p>
                        <a href="#" class="mb-3 float-right  inline-flex items-center py-2 px-3 text-sm font-medium text-center text-green-600">
                            Pilih
                        </a>
                    </div>
                </div>
                <div class="w-[236px] bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="./images/taman.jpg" alt="">
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Taman Minimals</h5>
                        </a>
                        <p class="mb-2 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021</p>
                        <a href="#" class="mb-3 float-right underline  inline-flex items-center py-2 px-3 text-sm font-medium text-center text-green-600">
                            Pilih
                        </a>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- start list ukuran -->
            <h3 class="mt-12 mb-6 font-medium">Estimasi Ukuran Taman</h3>
            <div class="flex flex-nowrap mt-2 space-x-4">
                <div class="p-2 border-green-600 border rounded-lg border-2 text-green-600 font-medium">
                    <p>
                        <10m2 </p>
                </div>
                <div class="p-2 border-green-600 border rounded-lg border-2 text-green-600 font-medium">
                    <p>11-20m2</p>
                </div>
                <div class="p-2 border-green-600 border rounded-lg border-2 text-green-600 font-medium">
                    <p>21-30m2</p>
                </div>
                <div class="p-2 border-green-600 border rounded-lg border-2 text-green-600 font-medium">
                    <p>31-40m2</p>
                </div>
                <div class="p-2 border-green-600 border rounded-lg border-2 text-green-600 font-medium">
                    <p>41-50m2</p>
                </div>
                <div class="p-2 border-green-600 border rounded-lg border-2 text-green-600 font-medium">
                    <p>51m2</p>
                </div>
                <div class="p-2 border-green-600 border rounded-lg border-2 text-green-600 font-medium">
                    <p>>100m2</p>
                </div>

            </div>

            <!-- button -->

            <div class="mt-24 h-16">
                <div class="flex flex-wrap  float-right">
                    <button type="button" class="focus:outline-none text-green-600 bg-green-100  focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Batal</button>
                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Oke</button>
                </div>

            </div>

            <!-- end container info -->
        </div>

    </div>












</body>
<!-- flowbite js library -->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

</html>