import Vue from 'vue'
import Router from 'vue-router'
import HomePage from '@/components/HomePage'
import NewsPage from '@/components/NewsPage'
import LoginPage from '@/components/LoginPage'
import Signup from '@/components/Signup'
import ContactPage from '@/components/ContactPage'
Vue.use(Router)

export default new Router({
  routes: [{
      path: '/',
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
      path: '/signup',
      name: 'Signup',
      component: Signup
    },
    {
      path: '/contact',
      name: 'ContactPage',
      component: ContactPage
    },
    // otherwise redirect to home
    // {
    //   path: '*',
    //   redirect: '/'
    // }
  ]
})
