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
                                    <h1 class="h5"><?= $viewRequestRoomUser ?></h1>
                                    <p>Total Data yang Anda Minta</p>
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
                                    <h1 class="h5"><?= $viewRuanganTotal ?></h1>
                                    <p>Total Kegiatan</p>
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
                                    <h1 class="h5"><?= $viewRuanganToday ?></h1>
                                    <p>Kegiatan Event Hari Ini</p>
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
                            <h1 class="text-2xl lg:text-base">Tanggal Hari ini: <?php echo date("d-m-Y"); ?></h1><br>
                        </div>
                    </div>
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
        <?php $this->load->view('template/footer'); ?>
        <!-- end script -->
        <script>
            $(document).ready(function () {
                $('#example').DataTable({
                    scrollX: true,
                });
            });
        </script>
    </body>
</html>