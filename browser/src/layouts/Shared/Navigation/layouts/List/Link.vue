<template>
  <router-link :to="to" class="h-16 px-6 flex flex justify-center items-center w-full focus:text-orange-500">
    <slot></slot>
  </router-link>
</template>

<script>
export default {
  name: "Link",
  props: {
    to: {
      type: String,
      required: true
    }
  }
};
</script>
