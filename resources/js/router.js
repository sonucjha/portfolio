import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.VITE_BASE_URL || '/'),
  routes: [
    
  ]
})

// {
//     path: '/',
//     name: 'home',
//     component: () => import('../views/HomeView.vue')
//   },

export default router

