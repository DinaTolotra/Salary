import { createApp } from 'vue';
import router from './components/routes/route.js'
import App from './components/App.vue';
import 'bootstrap/dist/js/bootstrap.js';
import 'bootstrap/dist/css/bootstrap.css';

console.log('Vue démarre !') // ← vérifie si ça s'affiche dans F12
const app = createApp(App);
app.use(router);
app.mount('#app');







