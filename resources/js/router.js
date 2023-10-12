import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
    history: createWebHistory(import.meta.env.VITE_BASE_URL || "/"),
    routes: [
        // Intro routes start
        {
            path: "/intro",
            name: "intro",
            component: () => import("./views/Intro/IntroView.vue"),
        },
        {
            path: "/intro-add",
            name: "introAdd",
            component: () => import("./views/Intro/IntroAddView.vue"),
        },
        {
            path: "/intro-edit",
            name: "introEdit",
            component: () => import("./views/Intro/IntroEditView.vue"),
        },
        // Intro routes end

         // About routes start
         {
            path: "/about",
            name: "about",
            component: () => import("./views/About/AboutView.vue"),
        },
        {
            path: "/about-add",
            name: "aboutAdd",
            component: () => import("./views/About/AboutAddView.vue"),
        },
        {
            path: "/about-edit",
            name: "aboutEdit",
            component: () => import("./views/About/AboutEditView.vue"),
        },
        // About routes end
    ],
});

// {
//     path: '/',
//     name: 'home',
//     component: () => import('./views/HomeView.vue')
//   },

export default router;
