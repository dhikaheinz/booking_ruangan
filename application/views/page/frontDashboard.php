<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon" />
        <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css" />
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
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
                <img src="./assets/img/logo.png" class="w-10 flex-none" />
                <strong class="capitalize ml-3 flex-1">PolkesJaSa</strong>
                <!-- <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
                    <i class="fad fa-list-ul"></i>
                </button> -->
            </div>
            <!-- end logo -->
            <!-- navbar content toggle -->
			<a href="<?= base_url("home/pageLogin") ?>" id="navbarToggle" class="group hidden md:block md:fixed right-0 mr-6 capitalize hover:bg-gray-400 p-4 rounded-md transition-all">
                    <h1 class="text-sm text-gray-800 group-hover:text-white font-semibold m-0 p-0 leading-none uppercase"> Login </h1>
                    <!-- <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i> -->
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
<!-- strat wrapper -->
        <div class="h-screen flex flex-row flex-wrap">
            <!-- strat content -->
            <div class="bg-gray-100 flex-1 p-6 md:mt-24">
                <!-- General Report -->
                <div class="grid grid-cols-4 gap-6 xl:grid-cols-1">
                    <!-- card -->
                    <a href="<?= base_url("home/pageLogin") ?>" class="report-card w-full">
                    <!-- <div > -->
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
                                <div class="mt-3">
                                    <h1 class="h3">Request Ruangan</h1>
                                    <p>Login Terlebih Dahulu</p>
                                </div>
                                <!-- end bottom -->
                            </div>
                        </div>
                        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                    <!-- </div> -->
                    </a>
                    <!-- card -->
                    <div class="report-card w-full">
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
                                <div class="mt-3">
                                    <h1 class="h3">30</h1>
                                    <p>Jumlah Ruangan</p>
                                </div>
                                <!-- end bottom -->
                            </div>
                        </div>
                        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                    </div>
                    <!-- end card -->
                    <!-- card -->
                    <div class="report-card w-full">
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
                                <div class="mt-3">
                                    <h1 class="h3">10</h1>
                                    <p>Ruang Kosong</p>
                                </div>
                                <!-- end bottom -->
                            </div>
                        </div>
                        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                    </div>
                    <!-- end card -->
                    <!-- card -->
                    <div class="report-card w-full">
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
                                <div class="mt-3">
                                    <h1 class="h3">23</h1>
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
                <div class="w-full mt-5 bg-orange-100 p-3 rounded-md shadow-md">
                    <div class="flex justify-between">
                        <div class="mx-7">
                            <h1 class="text-2xl font-bold lg:text-base">Jadwal Kegiatan</h1>
                        </div>
                        <div class="mx-7">
                            <h1 class="text-2xl lg:text-base my-1">Tanggal Hari ini: <?php echo date("d-m-Y"); ?></h1>
                        </div>
                    </div>
                    <!-- <div class="flex justify-between">
                        <div class="mx-7">
                            <a href="#" class="bg-green-200 p-2">
                            <h1 class="text-base font-bold lg:text-base mb-5"></h1>
                            </a>
                        </div>
                    </div> -->
                    <!-- Button trigger modal -->
                    <table id="example" class="display nowrap" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Tgl Kegiatan</th>
                            <th>Nama Ruangan</th>
                            <th>Kegiatan</th>
                            <th>Jam Kegiatan</th>
                            <th>Peminjam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($viewDataBooking as $row) { ?>
                        <tr>
                            <td><?php echo $row->tgl_mulai; ?></td>
                            <td><?php echo $row->nama_room; ?></td>
                            <td><?php echo $row->kegiatan; ?></td>
                            <td><?php echo $row->jam_mulai .' - '. $row->jam_selesai;?></td>
                            <td><?php echo $row->id_profil; ?></td>
                        </tr>
                        </div>
                        <?php } ?>
                    </tbody>
                    </table>
                </div>
                <!-- end quick Info -->
            </div>
            <!-- end content -->
        </div>
        <!-- end wrapper -->
        <!-- script -->
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="./assets/js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable({
                    scrollX: true,
                });
            });
        </script>
        <!-- end script -->
    </body>
</html>