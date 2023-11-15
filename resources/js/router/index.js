import Vue from 'vue';
import VueRouter from 'vue-router';

import GrillaPrincipal from '../components/GrillaPrincipal.vue';
import Crear from '../components/Crear.vue';
import Editar from '../components/Editar.vue';

Vue.use(VueRouter);

const routes = [
    { path: '/', component: GrillaPrincipal },
    { path: '/crear', component: Crear },
    { path: '/editar/:id', component: Editar },
  ];

const router = new VueRouter({
  routes,
});

export default router;
