<template>
  <span :class="this.style">
    <slot></slot>
  </span>
</template>

<script>
import { render } from "../../../../../services/components/generic-display/status/render.js";

export default {
  name: "Status",
  props: {
    bg: {
      type: String,
      required: true,
    },
    text: {
      type: String,
      required: true,
    },
  },
  data() {
    return {
      style: render(this.bg, this.text),
    };
  },
};
</script>