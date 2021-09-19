<template>
  <Status :bg="this.bg" :text="this.text">Active</Status>
</template>

<script>
import Status from "../templates/Status.vue";

import templates from "../../../../../services/components/generic-display/status/templates.js";

export default {
  name: "Active",
  components: { Status },
  data() {
    return {
      bg: templates.purple.bg,
      text: templates.purple.text,
    };
  },
};
</script>