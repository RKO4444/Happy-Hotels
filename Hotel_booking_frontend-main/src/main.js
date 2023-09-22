import { createApp } from 'vue';
import router from "./router.js";
import store from './store/index.js'
import App from './App.vue'


const app= createApp(App)
//app.vue is our main page
app.use(router);
app.use(store);

app.mount('#app');
