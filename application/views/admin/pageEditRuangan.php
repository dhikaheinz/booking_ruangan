<?php $this->load->view('template/headerAdmin'); ?>
<div class="h-screen flex flex-row flex-wrap">
    <!-- start sidebar -->
    <?php $this->load->view('template/sideAdmin'); ?>
    <div class="bg-gray-100 flex-1 flex-row p-6 md:mt-24">
        <?php
            echo $this->session->flashdata('notif'); 
        ?>
        <!-- <div class="flex flex-row justify-start">
            <div>
                <button id="btnInputRuangan" onclick="popUpInputRuangan()" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
                    font-medium rounded-lg text-sm w-full px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit Ruangan</button>
            </div>
        </div> -->
        <div id="formEditRuangan" class="w-96 md:w-full">
            <h1 class="text-2xl">Edit Ruangan</h1><br>
            <form action="/ruangan/updateRuangan/<?= $data_ruangan->id_room ?>" method="post">
            <div class="grid gap-5 mb-6 md:grid-cols-2">
            <div>
                        <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nama Ruangan</label>
                        <input type="text" name="nama_room" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                        focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                        dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Ruangan" value="<?= $data_ruangan->nama_room ?>" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Kuota Ruangan</label>
                        <input type="text" name="kuota_room" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                            focus:border-blue-500 block w-full p-1 md:p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                            dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Kuota Ruangan" value="<?= $data_ruangan->kuota_room ?>" required>
                        </div>
                        <div>
                            <label for="company" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Gedung Ruangan</label>
                            <input type="text" name="gedung_room" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                            focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                            dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Gedung Ruangan" value="<?= $data_ruangan->gedung_room ?>" required>
                        </div>  
                        <!-- <div>
                            <label for="phone" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Status Ruangan</label>
                            <input type="tel" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                            focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                            dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan " required>
                        </div> -->
                        <div>
                            <label for="website" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Ruangan</label>
                            <input type="text" name="deskripsi_room" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                            focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white 
                            dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Deskripsi" value="<?= $data_ruangan->deskripsi_room ?>" required>
                        </div>
                    </div>
                    <div class="flex flex-row gap-3">
                        <button id="btnCloseInputRuangan" onclick="closePopUpEditRuangan()" type="button" class="text-white bg-yellow-600 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
                        font-medium rounded-lg text-sm w-full px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tutup</button>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 
                        font-medium rounded-lg text-sm w-full px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </form>
        </div>
            <!-- Tabel -->
            <div class="w-full mt-5">
                <h1 class="text-2xl">Data Ruangan</h1><br>
                <!-- Button trigger modal -->
                <?php 
                // print_r($viewDataRuangan);
                ?>
                <table id="example" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Ruangan</th>
                        <th>Kuota Ruangan</th>
                        <th>Geudng Ruangan</th>
                        <th>Deskripsi Ruangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($viewDataRuangan as $row) { ?>
                      <tr>
                        <td><?php echo $row->nama_room; ?></td>
                        <td><?php echo $row->kuota_room;?></td>
                        <td><?php echo $row->gedung_room;?></td>
                        <td><?php echo $row->deskripsi_room;?></td>
                        <td>
                        <div class="flex flex-row my-2 gap-1">
                            <div class="pt-1 px-1 bg-blue-200 hover:bg-blue-500 text-black font-bold rounded-lg">
                                <a href="/ruangan/editRuangan/<?= $row->id_room ?>"><i class='bx bxs-edit bx-tada text-2xl' ></i></a>
                            </div>
                            <div class="pt-1 px-1 bg-orange-200 hover:bg-orange-500 text-black font-bold rounded-lg">
                                <a href="/ruangan/deleteRuangan/<?= $row->id_room ?>"><box-icon name='trash' type='solid' animation='tada' ></box-icon></a>
                            </div>
                        </div>
                    </td>
                      </tr>
                    </div>
                    <?php } ?>
                </tbody>
                </table>
            </div>
            <!-- end tabel -->
    </div>
        <!-- end content -->
    </div>
        <!-- end wrapper -->
        <!-- Modal -->
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Modal title</h5>
                <button type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                Modal body text goes here.
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button" class="px-6
                py-2.5
                bg-purple-600
                text-white
                font-medium
                text-xs
                leading-tight
                uppercase
                rounded
                shadow-md
                hover:bg-purple-700 hover:shadow-lg
                focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
                active:bg-purple-800 active:shadow-lg
                transition
                duration-150
                ease-in-out" data-bs-dismiss="modal">Close</button>
                <button type="button" class="px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out
            ml-1">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <?php $this->load->view('template/footer'); ?>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                scrollX: true,
            });
        });

        var btnInputRuangan = document.getElementById("btnInputRuangan");
        var formEditRuangan = document.getElementById("formEditRuangan");
        // var btnCloseInputRuangan = document.getElementById("btnCloseInputRuangan");

        function popUpEditRuangan(){
            // form
            formEditRuangan.classList.add("block");
			formEditRuangan.classList.remove("hidden");
            // btn
            btnInputRuangan.classList.add("hidden");
			btnInputRuangan.classList.remove("block");
        }

        function closePopUpEditRuangan(){
            // form
            formEditRuangan.classList.add("hidden");
			// formEditRuangan.classList.remove("hidden");
            // btn
            // btnInputRuangan.classList.add("block");
			// btnInputRuangan.classList.remove("hidden");
        }

        $('.hide-it').delay(3000).fadeOut(1000);
    </script>
    <!-- end script -->
</body>
</html>