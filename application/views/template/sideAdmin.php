<div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 
flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
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
                    <a href="<?= base_url('home') ?>">
						<div class="hover:p-5 mb-3 capitalize font-medium text-sm transition-all duration-500">
							<i class="fad fa-chart-pie text-xs mr-2"></i> Analisis Dashboard
						</div>
					</a>
                    <!-- end link -->
                    <!-- link -->
                    <!-- <a href="./index-1.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                        <i class="fad fa-shopping-cart text-xs mr-2"></i> ecommerce dashboard </a> -->
                    <!-- end link -->

                    <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"> Booking </p>
                    <!-- link -->
                    <?php
                        if ($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '1') {
                            //admin
                            echo '<a href="'.base_url('home/pageRequestRuangan').'" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                            <i class="fad fa-envelope-open-text text-xs mr-2"></i> Request Ruangan Admin</a>';
                        } else if ($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '2') {
                            echo '<a href="'.base_url('home/pageRequestRuangan').'" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                            <i class="fad fa-envelope-open-text text-xs mr-2"></i> Request Ruangan User </a>';
                        }
                    ?>
                    <!-- end link -->
                    <!-- link -->
                    <?php
                        if ($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '1') {
                            //admin
                            echo '<a href="'.base_url('home/pageInputUser').'" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                            <i class="fad fa-comments text-xs mr-2"></i> Data User </a>';
                        } else if ($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '2') {
                            //user
                            echo '';
                        }
                    ?>
                    <!-- end link -->
                    <!-- link -->
                    <?php
                        if ($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '1') {
                            //admin
                            echo '<a href="'.base_url('home/pageInputRuangan').'" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                            <i class="fad fa-comments text-xs mr-2"></i> Data Ruangan </a>';
                        } else if ($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '2') {
                            //user
                            echo '';
                        }
                    ?>
                    <!-- end link -->
                    <?php
                        if ($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '1') {
                            //admin
                            echo '<p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"> Admin Menu </p>';
                        } else if ($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '2') {
                            //user
                            echo '<p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider"> User Menu </p>';
                        }
                    ?>
                    
                    <!-- link -->
                    <?php
                        if ($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '1') {
                            //admin
                            echo '<a href="./typography.html" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                            <i class="fad fa-text text-xs mr-2"></i> Setting </a>';
                        } else if ($this->session->userdata('status') == 'login' && $this->session->userdata('level') == '2') {
                            //user
                            echo '';
                        }
                    ?>
                    <!-- end link -->
                    <!-- link -->
                    <a href="
                            <?php if ($this->session->userdata('status') == 'login') {
                                echo base_url('User/logout');
                            } else {
                                echo '#';
                            } ?>" class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                        <i class="fad fa-whistle text-xs mr-2"></i> Logout </a>
                    <!-- end link -->
                </div>
                <!-- end sidebar content -->
            </div>