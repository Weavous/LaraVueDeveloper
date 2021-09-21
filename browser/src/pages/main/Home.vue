<template>
  <Main>
    <div class="container px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
        <h1 class="my-4 text-3xl md:text-5xl text-gray-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">Laravel Developer</h1>
        <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Laravel | Vue | React Native</p>

        <p class="text-gray-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">Contact Me!</p>
        <div class="flex p-3 w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
          <a href="https://github.com/MagicalStrangeQuark" target="_blank">
            <Github class="mr-5 h-10 w-10"></Github>
          </a>
          <a href="https://www.linkedin.com/in/wesleyfloresterres" target="_blank">
            <LinkedIn class="mr-5 h-10 w-10"></LinkedIn>
          </a>
          <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5551996201475" target="_blank">
            <WhatsApp class="mr-5 h-10 w-10"></WhatsApp>
          </a>
        </div>
      </div>
    </div>
  </Main>
</template>

<script>
import Main from "../../layouts/Main/Main.vue";

import Github from "../../components/images/Github.vue";
import LinkedIn from "../../components/images/LinkedIn.vue";
import WhatsApp from "../../components/images/WhatsApp.vue";

export default {
  name: "Home",
  components: { Main, Github, LinkedIn, WhatsApp }
};
</script>
