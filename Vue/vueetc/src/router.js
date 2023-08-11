import { createWebHistory ,createRouter } from "vue-router";
import Container from "./components/Container.vue";
import Post from "./components/Post.vue";

const routes = [
    {
        path: '/',
        component: Container,
    },
    {
        path: '/post',
        component: Post,
    }
];

const router = createRouter({
    history  :createWebHistory(),
    routes,
});

export default router;
