<template>
  <ul>
    <Li>
      <Link to="/main/developer">
        <Bookmark></Bookmark>
      </Link>
    </Li>

    <Li>
      <Link to="/main/trash">
        <Trash></Trash>
      </Link>
    </Li>

    <Li>
      <Link to="/main/cart">
        <Cart></Cart>
      </Link>
    </Li>

    <Li>
      <Link to="/main/settings">
        <Settings></Settings>
      </Link>
    </Li>

    <Li>
      <Link to="/main/bell">
        <Bell></Bell>
      </Link>
    </Li>
  </ul>
</template>

<script>
import Bookmark from "../../../../../components/Navigation/icons/Bookmark.vue";
import Cart from "../../../../../components/Navigation/icons/Cart.vue";
import Settings from "../../../../../components/Navigation/icons/Settings.vue";
import Bell from "../../../../../components/Navigation/icons/Bell.vue";
import Trash from "../../../../../components/Navigation/icons/Trash.vue";

import Li from "../List/Li.vue";
import Link from "../List/Link.vue";

export default {
  name: "List",
  components: { Cart, Settings, Bell, Trash, Bookmark, Li, Link },
};
</script>