import { createRouter, createWebHistory } from 'vue-router'
import base from '@/views/base.vue'
import home from '@/views/home.vue'

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
      ],
    },
  ],
})

export default router
