require('./bootstrap');

window.Vue = require('vue');
import Vuex from 'Vuex';

Vue.use(Vuex);

const store = new Vuex.Store({
    state:{
        noticiasPrincipais : {},
        noticiasSemDestaque : {}
    },

    mutations:{
        setNoticiasPrincipais(state, obj){
            state.noticiasPrincipais = obj;
        },

        setNoticiasSemDestaque(state, obj){
            state.noticiasSemDestaque = obj;
        },
    }
});


Vue.component('pagina', require('./components/Pagina.vue').default);
Vue.component('feed-principal', require('./components/FeedPrincipal.vue').default);
Vue.component('topo', require('./components/MenuTopo.vue').default);
Vue.component('feed', require('./components/Feed.vue').default);
Vue.component('rodape', require('./components/Rodape.vue').default);
Vue.component('login', require('./components/FormLogin.vue').default);
Vue.component('noticia', require('./components/Noticia.vue').default);
Vue.component('container', require('./components/Container.vue').default);

const app = new Vue({
    el: '#app',
    store
});
