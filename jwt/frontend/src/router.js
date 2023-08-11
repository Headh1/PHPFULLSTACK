import { createRouter,createWebHistory } from 'vue-router';
import Main from './components/MainComponent.vue'
import Login from './components/LoginComponent.vue'
import Home from './components/HomeComponent.vue'
import TokenController from './js/TokenController';

const configFlg = {
    home:false,
    main: true, 
    login: false
}

const beforeAuth = path => (from, to, next) => {
    const isToken = TokenController.getToken();
    const flg = configFlg[path];

    if(isToken) {
        if(path == 'login') {
                next('/main');
        }
        
        return next();
    } 
    else {
        if(flg) {
            next('/login');
        }
        
        return next();
    }
};

const routes = [
    {
        path: "/main",
        name: "main",
        component: Main,
        beforeEnter: beforeAuth('main')
    },
    {
        path: "/login",
        name: "login",
        component: Login,
        beforeEnter: beforeAuth('login')

    },
    {
        path: "/",
        name: "home",
        component: Home,
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;