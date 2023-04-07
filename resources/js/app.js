import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Services from './views/services'
import About from './views/about'
import Contact from './views/contact'
import Portfolio from './views/portfolio'
import Portfolio_item from './views/portfolio-item'
import Service_item from './views/service-item'
import Home from './views/home'
import NotFound from './views/notfound'

//import AOS from 'aos'
//import 'aos/dist/aos.css'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/services',
            name: 'services',
            component: Services
        },
        {
            path: '/services/:id',
            name: 'service-item',
            component: Service_item,
            meta: { transitionName: 'zoom' },
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact
        },
        {
            path: '/portfolio',
            name: 'portfolio',
            component: Portfolio
        },
        {
            path: '/portfolio/:id',
            name: 'portolio-item',
            component: Portfolio_item,
        },
        {
            path: '*',
            name: 'notfound',
            component: NotFound
        }
    ],
});


const app = new Vue({
    el: '#app',
    components: { App },
    router,
});