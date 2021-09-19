<template>
  <Status :bg="this.bg" :text="this.text">Pending</Status>
</template>

<script>
import Status from "../templates/Status.vue";

import templates from "../../../../../services/components/generic-display/status/templates.js";

export default {
  name: "Pending",
  components: { Status },
  data() {
    return {
      bg: templates.red.bg,
      text: templates.red.text,
    };
  },
};
</script>