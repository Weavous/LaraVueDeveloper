<template>
    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125" :src="src">
</template>

<script>
export default {
  name: "RandomUser",
  data() {
    return {
      src: `https://randomuser.me/api/portraits/${parseInt(Math.random() * 2) === 0 ? "men" : "women"}/${parseInt(Math.random() * 100)}.jpg`
    }
  }
};
</script>