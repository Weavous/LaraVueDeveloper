<template>
  <Status :bg="this.bg" :text="this.text">Scheduled</Status>
</template>

<script>
import Status from "../templates/Status.vue";

import templates from "../../../../../services/components/generic-display/status/templates.js";

export default {
  name: "Scheduled",
  components: { Status },
  data() {
    return {
      bg: templates.yellow.bg,
      text: templates.yellow.text,
    };
  },
};
</script>