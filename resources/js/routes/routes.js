import { createWebHistory, createRouter } from 'vue-router';

import WelcomeView from '../views/WelcomeView.vue';
import LoginView from '../views/LoginView.vue';
import AddView from '../views/AddView.vue';
import ListView from '../views/ListView.vue';
import SummaryView from '../views/SummaryView.vue';


const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: WelcomeView,
        },
        {
            path: '/connexion',
            component: LoginView,
        },
        {
            path: '/ajout',
            component: AddView,
        },
        {
            path: '/ajout/:numero',
            component: AddView,
        },
        {
            path: '/list',
            component: ListView,
        },
        {
            path: '/bilan',
            component: SummaryView,
        },
    ]
})

export default router;
