<template>
    <div class="h-screen w-screen flex">

    <aside class="flex flex-col items-center bg-white text-gray-700 shadow h-full">
      <div class="h-16 flex items-center w-full">
        <a class="h-6 w-6 mx-auto" href="/developer">
          <img class="h-6 w-6 mx-auto" src="https://cdn.iconscout.com/icon/premium/png-256-thumb/home-2107457-1778388.png" alt="svelte logo">
        </a>
      </div>

      <ul>
        <li class="hover:bg-gray-100">
          <a href="#" class="h-16 px-6 flex flex justify-center items-center w-full focus:text-orange-500">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
              <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
            </svg>
          </a>
        </li>

        <li class="hover:bg-gray-100">
          <a href="#" class="h-16 px-6 flex flex justify-center items-center w-full focus:text-orange-500">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
            </svg>
          </a>
        </li>

        <li class="hover:bg-gray-100">
          <a href="#" class="h-16 px-6 flex flex justify-center items-center w-full focus:text-orange-500">
              <Trash></Trash>
          </a>
        </li>

        <li class="hover:bg-gray-100">
          <a href="#" class="h-16 px-6 flex flex justify-center items-center w-full focus:text-orange-500">
            <Cart></Cart>
          </a>
        </li>

        <li class="hover:bg-gray-100">
          <a href="#" class="h-16 px-6 flex flex justify-center items-center w-full focus:text-orange-500">
            <Settings></Settings>
          </a>
        </li>

        <li class="hover:bg-gray-100">
          <a href="#" class="h-16 px-6 flex flex justify-center items-center w-full focus:text-orange-500">
            <Bell></Bell>
          </a>
        </li>
      </ul>

      <div class="mt-auto h-16 flex items-center w-full">
        <button class="h-16 w-10 mx-auto flex flex justify-center items-center w-full focus:text-orange-500 hover:bg-red-200 focus:outline-none">
          <svg class="h-5 w-5 text-red-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
            <polyline points="16 17 21 12 16 7"></polyline>
            <line x1="21" y1="12" x2="9" y2="12"></line>
          </svg>
        </button>
      </div>
	  </aside>

    <main class="h-screen w-screen flex justify-center p-3">
      <slot></slot>
    </main>
  </div>
</template>

<script>
import Footer from "../Shared/Footer.vue";
import Cart from "../../components/icons/Cart.vue";
import Settings from "../../components/icons/Settings.vue";
import Bell from "../../components/icons/Bell.vue";
import Trash from "../../components/icons/Trash.vue";

export default {
  name: "Navigation",
  components: { Footer, Cart, Settings, Bell, Trash },
};
</script>