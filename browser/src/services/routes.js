import VueRouter from "vue-router";

import Developer from "../pages/Developer.vue";
import Home from "../pages/Home.vue";
import Profile from "../pages/Profile.vue";

import Login from "../pages/Login.vue";
import Register from "../pages/Register.vue";
import NoAuth from "../pages/NoAth.vue";

export default new VueRouter({
  mode: "history",
  routes: [
    { path: "/", component: Home },
    { path: "/developer", component: Developer },
    { path: "/profile", component: Profile },
    { path: "/login", component: Login },
    { path: "/register", component: Register },
    { path: "/no-auth", component: NoAuth }
  ]
});
