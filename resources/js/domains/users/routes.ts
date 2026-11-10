import UserHome from './pages/HomePage.vue';
import UserAuthenticate from './pages/UserAuthenticate.vue';

export const userRoutes = [
    { path: '/home', component: UserHome, name: 'users.home' },
    { path: '/authenticate', component: UserAuthenticate, name: 'users.authenticate' },
]