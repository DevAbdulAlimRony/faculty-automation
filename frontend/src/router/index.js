import {createRouter, createWebHistory} from 'vue-router';
import store from '../store';

import AuthLayout from "../components/layouts/AuthLayout.vue";
import AdminLayout from "../components/layouts/AdminLayout.vue";

import Login from "../views/Login.vue";
import AdminDashboard from '../views/admin/AdminDashboard.vue';
import EventView from '../views/admin/EventView.vue';
import EventCreate from '../views/admin/EventCreate.vue';

// Test Cases
import DataTable from '../views/admin/DataTable.vue';

const routes = [
    {
        path: '/auth',
        redirect: '/login',
        name: 'Auth',
        component: AuthLayout,
        meta: {isGuest: true},
        children: [
            {
                path: '/login',
                name: 'Login',
                component: Login
            }
        ]
    },

    {
        path: '/',
        redirect: '/dashboard',
        component: AdminLayout,
        meta: {requiresAuth: true},
        children: [
            {path: '/dashboard', name: 'Dashboard', component: AdminDashboard},

            {path: '/events', name: 'Event', component: EventView},
            {path: '/events/create', name: 'EventManipulate', component: EventCreate},
            {path: '/events/update/:id', name: 'EventManipulate', component: EventCreate},
        ]
    },


            {path: '/data', name: 'DataTable', component: DataTable},
            {path: '/data/create', name: 'EventCreate', component: EventCreate},
            {path: '/data/update/:id', name: 'EventUpdate', component: EventCreate},


    // {
    //     path: '/data',
    //     component: DataTable,
    //     name: DataTable,
    // },

];

const router = createRouter({
    history: createWebHistory(),
    routes
});

// router.beforeEach((to, from, next) => {
//     if(to.meta.requiresAuth && !store.state.user.token){
//         next({name: 'Login'});
//     }
//     else if(store.state.user.token && (to.meta.isGuest)){
//         next({name: 'Dashboard'});
//     }
//     else{
//         next();
//     }
// });

export default router;
