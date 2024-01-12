<?php $this->load->view('template/headerUser'); ?>
<!-- strat wrapper -->
<div class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="w-full max-w-sm transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
      <div class="bg-white rounded-lg shadow-xl p-6">
        <h1 class="text-lg font-medium mb-4 text-center">Login</h1>
         <?php
					echo $this->session->flashdata('notif'); 
					?>
					<form action="/User/aksi_login" method="post">
          <div class="mb-4">
            <label class="block font-medium text-gray-700 mb-2" for="username">
              NIP/NIM
            </label>
            <input
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
              type="text"
              id="username"
              name="user"
            />
          </div>
          <div class="mb-6">
            <label class="block font-medium text-gray-700 mb-2" for="password">
              Password
            </label>
            <input
              class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
              type="password"
              id="password"
              name="pass"
            />
          </div>
          <div class="flex items-center justify-between">
            <button
              class="bg-purple-500 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:shadow-outline"
              type="submit"
            >
              Login
            </button>
            <a class="inline-block align-baseline font-medium text-sm text-purple-500 hover:text-purple-800" href="#">
              Forgot Password?
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</html>