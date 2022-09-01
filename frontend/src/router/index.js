import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter)

const routes = [

    {
        path: '/home',
        name: 'home',
        component: () =>
            import ('../views/Home.vue')
    },
    {
        path: '/login',
        name: 'login',
        component: () =>
            import ('../views/LoginCustomer.vue')
    },
    {
        path: '/register',
        name: 'regiter',
        component: () =>
            import ('../views/RegisterCustomer.vue')
    },
    {
        path: '/logout',
        name: 'logout',
        component: () =>
            import ('../views/RegisterCustomer.vue')
    },
    {
        path: '/product/:slug',
        name: 'product',
        component: () =>
            import ('../views/Product.vue')
    },
    {
        path: '/cart',
        name: 'cart',
        component: () =>
            import ('../views/Cart.vue')
    }




]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router