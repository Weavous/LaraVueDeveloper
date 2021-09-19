<template>
  <div class="h-screen w-screen flex">
    <aside class="flex flex-col items-center bg-white text-gray-700 shadow h-full">
      <div class="h-16 flex items-center w-full">
        <router-link class="h-6 w-6 mx-auto" to="developer">
          <Laravel></Laravel>
        </router-link>
      </div>

      <List></List>

      <div class="mt-auto h-16 flex items-center w-full">
        <button class="h-16 w-10 mx-auto flex flex justify-center items-center w-full focus:text-orange-500 hover:bg-red-200 focus:outline-none">
          <router-link to="login"><Logout></Logout></router-link>
        </button>
      </div>
    </aside>

    <main class="h-screen w-screen flex justify-center p-3">
      <slot></slot>
    </main>
  </div>
</template>

<script>
import Footer from "../Footer/Footer.vue";

import Laravel from "../../../components/images/Laravel.vue";

import List from "../Navigation/layouts/List/List.vue";

import Logout from "../../../components/Navigation/icons/Logout.vue";

export default {
  name: "Navigation",
  components: { Footer, Laravel, List, Logout },
};
</script>