<template>
  <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125" :src="src" :alt="alt">
</template>

<script>
export default {
  name: "Tool",
  props: {
    src: {
      type: String,
      required: true
    },
    alt: {
      type: String,
      required: true
    }
  }
};
</script>