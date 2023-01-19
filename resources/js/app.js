import './bootstrap';

import {createApp} from 'vue';
import App from './components/App.vue'; //import du composant
import Header from './components/Header.vue';
import { create } from 'lodash';


createApp(App) //composant principale vue
.mount('#app') // monté sur élément DOM id=app
.mount ('#header')