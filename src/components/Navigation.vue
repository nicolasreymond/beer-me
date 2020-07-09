<template>
  <div>
    <b-navbar toggleable="lg" type="dark" variant="info">
      <b-navbar-brand to="Home"><b-img :src="require('../assets/BeerMe.svg')" width="40" alt="placeholder"></b-img></b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav>
          <b-nav-item
            v-for="routes in linksL"
            v-bind:key="routes.id"
            :to="`${routes.page}`"
          >{{routes.text}}</b-nav-item>
        </b-navbar-nav>

        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-nav-item
            right
            v-for="routes in linksR"
            v-bind:key="routes.id"
            :to="`${routes.page}`"
          >{{routes.text}}</b-nav-item>
          <b-avatar></b-avatar>
          <!-- Using 'button-content' slot -->
          <!-- <template v-slot:button-content>
              <em>User</em>
            </template>
            <b-dropdown-item><router-link :to="{links.id: 1}">Login</router-link></b-dropdown-item>
          <b-dropdown-item>Register</b-dropdown-item>-->
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </div>
</template>

<script>
export default {
  name: "Navigation",
  data() {
    return {
      linksL: [
        {
          id: 0,
          text: "News",
          page: "/News"
        },
        {
          id: 1,
          text: "Contact",
          page: "/Contact"
        },
        {
          id: 2,
          text: "Drinks",
          page: "/drinks"
        }
      ],

      linksR: [
        {
          id: 0,
          text: "Login",
          page: "/Login"
        },
        {
          id: 1,
          text: "Register",
          page: "/register"
        }
      ]
    };
  }
};
</script>

<style>
.spacing {
  margin-right: 10%;
}
</style>