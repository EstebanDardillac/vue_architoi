import './bootstrap';
import { createApp } from 'vue';

import ExampleComponent from './components/ExampleComponent.vue';
import FormComponent from './components/FormComponent.vue';

import axios from 'axios';

const app = createApp({});

app.config.globalProperties.$axios = axios
window.axios = axios
app.component('example-component', ExampleComponent);
app.component('form-component', FormComponent);


app.mount('#app');
