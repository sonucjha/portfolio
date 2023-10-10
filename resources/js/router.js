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
    ],
});

// {
//     path: '/',
//     name: 'home',
//     component: () => import('./views/HomeView.vue')
//   },

export default router;
