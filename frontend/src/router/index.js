import {createRouter, createWebHistory} from 'vue-router';
import Login from "../views/Login.vue";
import Dashboard from "../views/admin/Dashboard.vue";

const routes = [
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard
    },

    {
        path: '/login',
        name: 'login',
        component: Login
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
