import Vue from 'vue'
import Router from 'vue-router'
import HomePage from '@/components/HomePage'
import NewsPage from '@/components/NewsPage'
import LoginPage from '@/components/LoginPage'
import Register from '@/components/RegisterPage'
import ContactPage from '@/components/ContactPage'
import DrinksMenu from '@/components/DrinksMenu'
import AperoPage from '@/components/AperoPage'
import ProjectPage from '@/components/ProjectPage'
import GiftPage from '@/components/GiftPage'
Vue.use(Router)

export default new Router({
  routes: [{
      path: '/home',
      name: 'HomePage',
      component: HomePage
    },
    {
      path: '/news',
      name: 'NewsPage',
      component: NewsPage
    },
    {
      path: '/login',
      name: 'LoginPage',
      component: LoginPage
    },
    {
      path: '/register',
      name: 'Register',
      component: Register
    },
    {
      path: '/contact',
      name: 'ContactPage',
      component: ContactPage
    },
    {
      path: '/drinks',
      name: 'DrinksMenu',
      component: DrinksMenu
    },
    {
      path: '/apero',
      name: 'AperoPage',
      component: AperoPage
    },
    {
      path: '/project',
      name: 'ProjectPage',
      component: ProjectPage
    },
    {
      path: '/gift',
      name: 'GiftPage',
      component: GiftPage
    },
    // otherwise redirect to home
    {
      path: '*',
      redirect: '/home'
    }
  ]
})
