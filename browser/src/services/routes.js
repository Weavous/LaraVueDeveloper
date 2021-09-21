import VueRouter from "vue-router";

import Developer from "../pages/main/Developer.vue";
import Home from "../pages/main/Home.vue";
import Profile from "../pages/main/Profile.vue";

import Login from "../pages/auth/Login.vue";
import Register from "../pages/auth/Register.vue";
import NoAuth from "../pages/auth/NoAth.vue";

export default new VueRouter({
  mode: "history",
  routes: [
    { path: "/", component: Home },
    { path: "/main/developer", component: Developer },
    { path: "/main/profile", component: Profile },
    { path: "/auth/login", component: Login },
    { path: "/auth/register", component: Register },
    { path: "/auth/no-auth", component: NoAuth }
  ]
});
