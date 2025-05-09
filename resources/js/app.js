import { createApp } from 'vue';
import router from './routes/routes'
import App from './components/App.vue';
import 'bootstrap/dist/js/bootstrap.js';
import 'bootstrap/dist/css/bootstrap.css';

const app = createApp(App);
app.use(router);
app.mount('#app');
