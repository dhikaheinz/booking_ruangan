<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="shortcut icon" href="../assets/img/logo.png" type="image/x-icon" />
        <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" />
		<!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.0-rc.4/dist/css/tom-select.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.0.0-rc.4/dist/js/tom-select.complete.min.js"></script>
        <title>Halaman Depan | Booking Ruangan PKJ</title>
    </head>
    <body class="bg-gray-100">
        <!-- start navbar -->
        <div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">
            <!-- logo -->
            <div class="flex-none w-56 flex flex-row items-center">
                <img src="../assets/img/logo.png" class="w-10 flex-none" />
                <strong class="capitalize ml-3 flex-1">PolkesJaSa</strong>
                <!-- <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
                    <i class="fad fa-list-ul"></i>
                </button> -->
            </div>
            <!-- end logo -->
            <!-- navbar content toggle -->
			<a href="<?= base_url("home/pageLogin") ?>">
                <div class="group hidden md:block md:fixed right-0 mr-6 capitalize hover:bg-gray-400 p-4 rounded-md transition-all">
                        <h1 class="text-sm text-gray-800 group-hover:text-white font-semibold m-0 p-0 leading-none uppercase"> Login </h1>
                        <!-- <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i> -->
                </div>
            </a>
            <!-- end navbar content toggle -->
            <!-- navbar content -->
            <div id="navbar" class="animated sm:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
                <!-- left -->
                <div class="text-gray-600 md:w-full sm:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">
                    <a class="mr-2 transition duration-500 ease-in-out hover:text-gray-900 uppercase font-bold" href="<?= base_url() ?>" title="email">Booking Ruangan Poltekkes Jakarta 1</a>
                </div>
                <!-- end left -->
                <!-- right -->
                <div class="flex flex-row-reverse items-center">
                    <!-- user -->
                    <div class="dropdown relative md:static">
                        <button class="menu-btn flex flex-wrap items-center">
                            <!-- <div class="w-8 h-8 overflow-hidden rounded-full">
                                <img class="w-full h-full object-cover" src="./assets/img/user.svg" />
                            </div> -->
                            <a href="<?= base_url("home/pageLogin") ?>" class="group ml-2 capitalize flex hover:bg-gray-400 p-4 rounded-md transition-all">
                                <h1 class="text-sm text-gray-800 group-hover:text-white font-semibold m-0 p-0 leading-none uppercase"> Login </h1>
                                <!-- <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i> -->
                            </a>
                        </button>
                        <!-- <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>
                        <div class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">
                            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                                <i class="fad fa-user-edit text-xs mr-1"></i> edit my profile </a>
                            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                                <i class="fad fa-inbox-in text-xs mr-1"></i> my inbox </a>
                            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                                <i class="fad fa-badge-check text-xs mr-1"></i> tasks </a>
                            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                                <i class="fad fa-comment-alt-dots text-xs mr-1"></i> chats </a>
                            <hr />
                            <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out" href="#">
                                <i class="fad fa-user-times text-xs mr-1"></i> log out </a>
                        </div> -->
                    </div>
                    <!-- end user -->
                </div>
                <!-- end right -->
            </div>
            <!-- end navbar content -->
        </div>
        <!-- end navbar -->