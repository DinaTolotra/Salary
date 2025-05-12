import { createWebHistory, createRouter } from 'vue-router';

import WelcomeView from '../WelcomeView.vue';
import LoginView from '../LoginView.vue';
import AddView from '../AddView.vue';
import ListView from '../ListView.vue';
import SummaryView from '../SummaryView.vue';


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
