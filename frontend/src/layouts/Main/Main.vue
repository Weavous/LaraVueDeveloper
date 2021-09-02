<template>
  <Navigation>
    <slot></slot>
  </Navigation>
</template>

<script>
import Navigation from "../Shared/Navigation.vue";

export default {
  name: "Main",
  components: { Navigation },
};
</script>