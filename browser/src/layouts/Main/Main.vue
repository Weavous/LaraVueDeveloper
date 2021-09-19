<template>
  <Navigation>
    <slot></slot>
  </Navigation>
</template>

<script>
import Navigation from "../Shared/Navigation/Navigation.vue";

import auth from "../../services/auth.js";

export default {
  name: "Main",
  components: { Navigation },
  mounted() {
    if (auth.check() === false) {
      this.$router.push({ path: "login" });
    }
  }
};
</script>
