<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon" />
        <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
		<!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <title>Booking Ruangan PKJ</title>
    </head>
    <body class="bg-gray-100">
        <!-- start navbar -->
        <div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
            <!-- logo -->
            <div class="flex-none w-56 flex flex-row items-center">
                <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block xl:block mr-3">
                    <i class="fad fa-list-ul"></i>
                </button>
                <img src="../assets/img/logo.png" class="w-10 flex-none" />
                <strong class="capitalize ml-3 flex-1 block xl:hidden">PolkesJaSa</strong>
                <strong class="capitalize ml-3 flex-1 hidden xl:block">PolkesJaSa</strong>
                <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block xl:hidden">
                    <i class="fad fa-list-ul"></i>
                </button>
            </div>
            <!-- end logo -->
            <!-- navbar content toggle -->
            <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
                <!-- <i class="fad fa-chevron-double-down"></i> -->
            </button>
            <!-- end navbar content toggle -->
            <!-- navbar content -->
            <div id="navbar" class="animated sm:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
                <!-- left -->
                <div class="text-gray-600 md:w-full sm:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">
                    <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900 uppercase font-bold" href="#" title="email">Booking Ruangan Poltekkes Jakarta 1</a>
                </div>
                <!-- end left -->
                <!-- right -->
                <div class="flex flex-row-reverse items-center">
                    <!-- user -->
                    <div class="dropdown relative md:static">
                        <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                            <div class="w-8 h-8 overflow-hidden rounded-full">
                                <img class="w-full h-full object-cover" src="../assets/img/user.svg" />
                            </div>
                            <div class="ml-2 capitalize flex">
                                <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none"> Dhika </h1>
                                <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                            </div>
                        </button>
                        <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>
                        <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">
                            <!-- item -->
                            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                                <i class="fad fa-user-edit text-xs mr-1"></i> edit my profile </a>
                            <!-- end item -->
                            <!-- item -->
                            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                                <i class="fad fa-inbox-in text-xs mr-1"></i> my inbox </a>
                            <!-- end item -->
                            <!-- item -->
                            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                                <i class="fad fa-badge-check text-xs mr-1"></i> tasks </a>
                            <!-- end item -->
                            <!-- item -->
                            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                                <i class="fad fa-comment-alt-dots text-xs mr-1"></i> chats </a>
                            <!-- end item -->
                            <hr />
                            <!-- item -->
                            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                                <i class="fad fa-user-times text-xs mr-1"></i> log out </a>
                            <!-- end item -->
                        </div>
                    </div>
                    <!-- end user -->
                </div>
                <!-- end right -->
            </div>
            <!-- end navbar content -->
        </div>
        <!-- end navbar -->
        <!-- strat wrapper -->
        <div class="h-screen flex flex-row flex-wrap">
            <!-- start sidebar -->
            <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
                <!-- sidebar content -->
                <div class="flex flex-col">
                    <!-- sidebar toggle -->
                    <div class="text-right hidden md:block mb-4">
                        <button id="sideBarHideBtn">
                            <i class="fad fa-times-circle"></i>
                        </button>
                    </div>
                    <!-- end sidebar toggle -->
                    <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider"> homes </p>
                    <!-- link -->
                    <a href="./index.html">
						<div class="hover:p-5 mb-3 capitalize font-medium text-sm transition-all duration-500">
							<i class="fad fa-chart-pie text-xs mr-2"></i> Analisis Dashboard
						</div>
					</a>
                    <!-- end link -->
                    <!-- link -->
                    <a href="./index-1.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                        <i class="fad fa-shopping-cart text-xs mr-2"></i> ecommerce dashboard </a>
                    <!-- end link -->

                    <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"> Booking </p>
                    <!-- link -->
                    <a href="./email.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                        <i class="fad fa-envelope-open-text text-xs mr-2"></i> Request Ruangan </a>
                    <!-- end link -->
                    <!-- link -->
                    <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                        <i class="fad fa-comments text-xs mr-2"></i> Data User </a>
                    <!-- end link -->
                    <!-- link -->
                    <a href="#" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                        <i class="fad fa-shield-check text-xs mr-2"></i> Data Ruangan </a>
                    <!-- end link -->
                    <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"> Admin </p>
                    <!-- link -->
                    <a href="./typography.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                        <i class="fad fa-text text-xs mr-2"></i> Setting </a>
                    <!-- end link -->
                    <!-- link -->
                    <a href="./alert.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                        <i class="fad fa-whistle text-xs mr-2"></i> Logout </a>
                    <!-- end link -->
                </div>
                <!-- end sidebar content -->
            </div>
            <!-- end sidbar -->
            <!-- strat content -->
            <div class="bg-gray-100 flex-1 p-6 md:mt-24">
                <!-- General Report -->
                <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">
                    <!-- card -->
                    <div class="report-card">
                        <div class="card">
                            <div class="card-body flex flex-col">
                                <!-- top -->
                                <div class="flex flex-row justify-between items-center">
                                    <div class="h6 text-indigo-700 fad fa-book"></div>
                                    <!-- <span class="rounded-full text-white badge bg-teal-400 text-xs"> 12% <i class="fal fa-chevron-up ml-1"></i> -->
                                    </span>
                                </div>
                                <!-- end top -->
                                <!-- bottom -->
                                <div class="mt-8">
                                    <h1 class="h5">12</h1>
                                    <p>Request Ruangan</p>
                                </div>
                                <!-- end bottom -->
                            </div>
                        </div>
                        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                    </div>
                    <!-- end card -->
                    <!-- card -->
                    <div class="report-card">
                        <div class="card">
                            <div class="card-body flex flex-col">
                                <!-- top -->
                                <div class="flex flex-row justify-between items-center">
                                    <div class="h6 text-red-700 fad fa-store"></div>
                                    <!-- <span class="rounded-full text-white badge bg-red-400 text-xs"> 6% <i class="fal fa-chevron-down ml-1"></i> -->
                                    </span>
                                </div>
                                <!-- end top -->
                                <!-- bottom -->
                                <div class="mt-8">
                                    <h1 class="h5">30</h1>
                                    <p>Jumlah Ruangan</p>
                                </div>
                                <!-- end bottom -->
                            </div>
                        </div>
                        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                    </div>
                    <!-- end card -->
                    <!-- card -->
                    <div class="report-card">
                        <div class="card">
                            <div class="card-body flex flex-col">
                                <!-- top -->
                                <div class="flex flex-row justify-between items-center">
                                    <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                                    <!-- <span class="rounded-full text-white badge bg-teal-400 text-xs"> 72% <i class="fal fa-chevron-up ml-1"></i> -->
                                    </span>
                                </div>
                                <!-- end top -->
                                <!-- bottom -->
                                <div class="mt-8">
                                    <h1 class="h5">10</h1>
                                    <p>Ruang Kosong</p>
                                </div>
                                <!-- end bottom -->
                            </div>
                        </div>
                        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                    </div>
                    <!-- end card -->
                    <!-- card -->
                    <div class="report-card">
                        <div class="card">
                            <div class="card-body flex flex-col">
                                <!-- top -->
                                <div class="flex flex-row justify-between items-center">
                                    <div class="h6 text-green-700 fad fa-users"></div>
                                    <!-- <span class="rounded-full text-white badge bg-teal-400 text-xs"> 150% <i class="fal fa-chevron-up ml-1"></i> -->
                                    </span>
                                </div>
                                <!-- end top -->
                                <!-- bottom -->
                                <div class="mt-8">
                                    <h1 class="h5">23</h1>
                                    <p>Ruangan Digunakan</p>
                                </div>
                                <!-- end bottom -->
                            </div>
                        </div>
                        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- End General Report -->
                <!-- start quick Info -->
                <div class="grid grid-cols-3 gap-6 mt-6 xl:grid-cols-1">
                    <!-- Start Recent Sales -->
                    <div class="card col-span-4 xl:col-span-1 overflow-x-auto">
                        <div class="card-header">Request Ruangan</div>
                        <table class="table-auto w-full text-left">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border-r">Tanggal</th>
                                    <th class="px-4 py-2 border-r">Nama Ruangan</th>
                                    <th class="px-4 py-2 border-r">Kegiatan</th>
                                    <th class="px-4 py-2 border-r">Jam Mulai</th>
                                    <th class="px-4 py-2 border-r">Jam Selesai</th>
                                    <th class="px-4 py-2 border-r">Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600">
                                <tr>
                                    <td class="border border-l-0 px-4 py-2"> 21-08-2024 </td>
                                    <td class="border border-l-0 px-4 py-2"> Ruang 312 </td>
                                    <td class="border border-l-0 px-4 py-2"> Meeting </td>
                                    <td class="border border-l-0 px-4 py-2"> 13:00 </td>
                                    <td class="border border-l-0 px-4 py-2"> 15:00 </td>
                                    <td class="border border-l-0 px-4 py-2"> <div class="bg-red-400 xl:w-full w-1/3"><span class="p-3">Waiting</span></div></td>
                                </tr>
                                <tr>
                                    <td class="border border-l-0 px-4 py-2"> 21-08-2024 </td>
                                    <td class="border border-l-0 px-4 py-2"> Ruang 315 </td>
                                    <td class="border border-l-0 px-4 py-2"> Seminar </td>
                                    <td class="border border-l-0 px-4 py-2"> 10:00 </td>
                                    <td class="border border-l-0 px-4 py-2"> 15:00 </td>
                                    <td class="border border-l-0 px-4 py-2"> <div class="bg-green-400 xl:w-full w-1/3"><span class="p-3">Approve</span></div></td>
                                </tr>
                                <tr>
                                    <td class="border border-l-0 px-4 py-2"> 21-08-2024 </td>
                                    <td class="border border-l-0 px-4 py-2"> Ruang Aula </td>
                                    <td class="border border-l-0 px-4 py-2"> Pembelajaran </td>
                                    <td class="border border-l-0 px-4 py-2"> 12:00 </td>
                                    <td class="border border-l-0 px-4 py-2"> 15:00 </td>
                                    <td class="border border-l-0 px-4 py-2"> <div class="bg-green-400 xl:w-full w-1/3"><span class="p-3">Approve</span></div></td>
                                </tr>
                                <tr>
                                    <td class="border border-l-0 px-4 py-2"> 21-08-2024 </td>
                                    <td class="border border-l-0 px-4 py-2"> Ruang Aula Direktorat </td>
                                    <td class="border border-l-0 px-4 py-2"> Praktek </td>
                                    <td class="border border-l-0 px-4 py-2"> 08:00 </td>
                                    <td class="border border-l-0 px-4 py-2"> 15:00 </td>
                                    <td class="border border-l-0 px-4 py-2"> <div class="bg-red-400 xl:w-full w-1/3"><span class="p-3">Waiting</span></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Recent Sales -->
                </div>
                <!-- end quick Info -->
            </div>
            <!-- end content -->
        </div>
        <!-- end wrapper -->
        <!-- script -->
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="../assets/js/scripts.js"></script>
        <!-- end script -->
    </body>
</html>