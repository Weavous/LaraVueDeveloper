<template>
  <Navigation>
    <slot></slot>
  </Navigation>
</template>

<script>
import Navigation from "../Shared/Navigation/Navigation.vue";

export default {
  name: "Main",
  components: { Navigation },
};
</script>