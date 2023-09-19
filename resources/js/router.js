import { createRouter, createWebHistory } from 'vue-router'
import ProductList from './components/ProductList.vue';
import ProductForm from './components/ProductForm.vue';
import Product from './components/Product.vue';

import BeforeLoginPage from "./components/BeforeLoginPage.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.VITE_BASE_URL || '/'),
  routes: [
    {
      path: '/before-login', 
      name: 'before-login', 
      component: BeforeLoginPage
    },
    {
        path: '/product-list', 
        name: 'product-list', 
        component: ProductList
    },
    {
        path: '/product', 
        name: 'product', 
        component: Product
    },
    {
        path: '/product-form', 
        name: 'product-form', 
        component: ProductForm
    }
  ]
})

// {
//     path: '/',
//     name: 'home',
//     component: () => import('../views/HomeView.vue')
//   },
export default router

