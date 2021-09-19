<template>
  <Status :bg="this.bg" :text="this.text">Completed</Status>
</template>

<script>
import Status from "../templates/Status.vue";

import templates from "../../../../../services/components/generic-display/status/templates.js";

export default {
  name: "Completed",
  components: { Status },
  data() {
    return {
      bg: templates.green.bg,
      text: templates.green.text,
    };
  },
};
</script>