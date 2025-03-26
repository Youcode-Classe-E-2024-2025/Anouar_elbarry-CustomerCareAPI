import { createRouter, createWebHistory  } from "vue-router";
import HomeComponent from "./components/home.vue";
import NavComponent from "./components/nav.vue";
import FooterComponent from "./components/footer.vue";
import tickets from "./pages/tickets.vue";
import Auth from "./pages/auth.vue";

const routes = [
    {
        path : '/',
        name : 'home',
        components : {
            default : HomeComponent,
            navbar : NavComponent,
            footer : FooterComponent
        }
    },{
        path : '/tickets',
        name : 'tickets',
        components : {
            default : tickets,
            navbar : NavComponent,
            footer : FooterComponent
        }
    },{
        path : '/auth',
        name : 'auth',
        components : {
            default : Auth,
            navbar : NavComponent,
            footer : FooterComponent
        }
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router