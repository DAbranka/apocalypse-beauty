import "./bootstrap";

import { createApp } from "vue";
import App from "./components/App.vue"; //import du composant
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";

createApp(App) //composant principale vue
    .mount("#app"); // monté sur élément DOM id=app
