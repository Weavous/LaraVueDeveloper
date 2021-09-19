<template>
  <Main>
    <div class="w-full h-full flex justify-center font-sans">
      <div class="w-full">
        <div class="bg-white shadow-md rounded my-6">
          <GenericDisplay></GenericDisplay>
        </div>
      </div>
    </div>
  </Main>
</template>

<script>
import Main from "../layouts/Main/Main.vue";

import GenericDisplay from "../components/GenericDisplay/templates/GenericDisplay.vue";

export default {
  name: "Developer",
  components: { Main, GenericDisplay },
};
</script>