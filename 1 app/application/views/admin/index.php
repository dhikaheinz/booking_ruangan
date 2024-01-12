<?php $this->load->view('template/headerAdmin'); ?>
<!-- strat wrapper -->
<div class="h-screen flex flex-row flex-wrap">
    <!-- start sidebar -->
    <?php $this->load->view('template/sideAdmin'); ?>
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
                                    <h1 class="h5"><?= $viewTotalRequestRoom ?></h1>
                                    <p class="text-base font-bold text-black">Total Permintaan Ruangan</p>
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
                                    <h1 class="h5"><?= $viewTotalDataRuangan ?></h1>
                                    <p class="text-base font-bold text-black">Jumlah Ruangan</p>
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
                                    <h1 class="h5"><?= $viewRequestRoomTotalApprove ?></h1>
                                    <p class="text-base font-bold text-black">Total Permintaan Sudah di Terima</p>
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
                                    <h1 class="h5"><?= $viewRequestRoomTotalPending ?></h1>
                                    <p class="text-base font-bold text-black">Total Permintaan Menunggu</p>
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
                            <h1 class="text-2xl font-bold lg:text-base">Jadwal Kegiatan</h1><br>
                        </div>
                        <div class="mx-7">
                            <h1 class="text-2xl lg:text-base my-1">Hari : <?php 
                                // print_r($viewTglDataBooking);
                                if (!empty($viewTglDataBooking->tgl_mulai)) {
                                    $dateIndo = $viewTglDataBooking->tgl_mulai;
                                    $ex = explode("-",$dateIndo);
                            
                                    $tgl = $ex[2].'-'.$ex[1].'-'.$ex[0];
                                    echo $tgl;
                                } else if (!empty($viewDataBooking)) {
                                    echo date("d-m-Y");
                                } else {
                                    echo "Tidak Ada Kegiatan Hari ini";
                                }
                                
                                // echo $viewTglDataBooking->tgl_mulai;
                            ?></h1>
                        </div>
                        <form action="/home/filterTanggalAdmin" method="post">
                        <div>Search Tanggal : <input type="date" class="w-52 px-1 py-1 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600 shadow-sm" name="tgl_cari">
                        <button type="submit" class="bg-green-600 rounded-md hover:bg-green-900 mt-2 mx-1 text-white p-2">Cari</button></div>
                        </form>
                    </div>
                    <!-- Button trigger modal -->
                    <?php 
                    // print_r($viewDataRuangan);
                    ?>
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
                        foreach ($viewDataBooking as $row) { 
                            // print_r($row);
                            ?>
                        <tr>
                            <td><?php
                            $dateIndo = $row->tgl_mulai;
                            $ex = explode("-",$dateIndo);
                    
                            $tgl = $ex[2].'-'.$ex[1].'-'.$ex[0];
                            echo $tgl;
                            ?></td>
                            <td><?php echo $row->nama_room; ?></td>
                            <td><?php echo $row->kegiatan; ?></td>
                            <td><?php echo $row->jam_mulai .' - '. $row->jam_selesai;?></td>
                            <td><?php echo $row->nama_user; ?></td>
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
        <script src="../assets/js/scripts.js"></script>
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