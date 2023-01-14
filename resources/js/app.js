import './bootstrap';

import {createApp} from 'vue';
import App from './components/App.vue'; //import du composant


createApp(App) //composant principale vue
.mount('#app') // monté sur élément DOM id=app