import { createRouter, createWebHistory } from 'vue-router'
import base from '@/views/base.vue'
import home from '@/views/home.vue'
import about from '@/views/pages/about.vue'
import services from '@/views/pages/services.vue'
import contact from '@/views/pages/contact.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
     {
      path: "/",
      component: base,
      children: [
        {
          path: "",
          name: "Home",
          component: home,
        },
        {
          path: "/about",
          name: "About",
          component: about,
        },
        {
          path: "/services",
          name: "Service",
          component: services,
        },
        {
          path: "/contact-us",
          name: "Contact",
          component: contact,
        },
      ],
    },
  ],
})

export default router
