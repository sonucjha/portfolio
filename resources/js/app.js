import { createApp } from 'vue'
import { createPinia } from 'pinia'
// import { createRouter, createWebHistory } from 'vue-router';
import router from './router'
// Import components
import App from './components/App.vue'
import MainComponent from "./components/Dashboard/Main.vue"
import common from './common'

const pinia = createPinia()

const app = createApp(App)

app.component("mainComponent", MainComponent)

app.use(pinia)
app.use(router)
app.mixin(common)
app.mount('.page-wrapper')