<template>
  <footer class="bg-[#1E2630] text-white px-6 pt-16 pb-6">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-center items-start gap-x-50">

      <!-- Logo -->
      <div class="mb-10 md:mb-0 flex items-center">
        <img src="/images/logo.png" alt="Logo" class="h-30 mr-4" />
      </div>

      <!-- Menu -->
      <div class="grid grid-cols-3 gap-15 text-sm text-white">
        <div>
          <h4 class="font-semibold mb-3">About us</h4>
          <ul class="space-y-1 text-gray-300">
            <li><a href="#">Team</a></li>
            <li><a href="#">Address</a></li>
            <li><a href="#">Background</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-semibold mb-3">Support</h4>
          <ul class="space-y-1 text-gray-300">
            <li><a href="#">Contact</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Feedback</a></li>
          </ul>
        </div>
        <div>
          <h4 class="font-semibold mb-3">Social</h4>
          <ul class="space-y-1 text-gray-300">
            <li><a href="#">LinkedIn</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Email</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Garis -->
    <div class="border-t border-gray-700 my-6"></div>

    <!-- Bawah: Copyright + Back to Top -->
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center text-sm text-gray-400 px-4">
      <p>copyright © goleja</p>
      <a href="#" class="hover:underline">Back to top ↑</a>
    </div>
  </footer>
</template>
