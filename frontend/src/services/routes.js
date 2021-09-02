import VueRouter from 'vue-router';

import About from '../pages/About.vue';
import Developer from '../pages/Developer.vue';
import Home from '../pages/Home.vue';
import Profile from '../pages/Profile.vue';
import Login from '../pages/Login.vue';

export default new VueRouter({
    mode: "history",
    routes: [
        { path: "/", component: Home },
        { path: "/about", component: About },
        { path: "/developer", component: Developer },
        { path: "/profile", component: Profile },
        { path: "/login", component: Login }
    ]
});