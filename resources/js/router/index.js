import { createRouter, createWebHistory } from 'vue-router';
import Home from '../components/ExampleComponent.vue';
import About from '../components/about_us/about.vue';
import Team from '../components/about-owners/index.vue';
import OurAim from '../components/our-aim/index.vue'
import ContactUs from  '../components/contact-us/index.vue';

const routes = [
  {
    path: '/',
    name: 'ExampleComponent',
    component: Home,
  },
  {
    path: '/about',
    name: 'AboutUs',
    component: About,
  },
  {
    path: '/about-owners',
    name: 'About Owners',
    component: Team,
  },
  {
    path: '/our-aim',
    name: 'Our Aim',
    component: OurAim,
  },
  {
    path: '/contact-us',
    name: 'Contact Us',
    component: ContactUs,
  },
];

const router = createRouter({
  history: createWebHistory(), // Sets history mode for Vue 3
  routes,
});

export default router;
