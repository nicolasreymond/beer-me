<template>
  <div>
    <b-navbar toggleable="lg" type="dark" variant="info">
      <b-navbar-brand href="Home">NavBar</b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav>
          <b-nav-item v-for="routes in links" v-bind:key="routes.id" :to="`${routes.page}`">{{routes.text}}</b-nav-item>
        </b-navbar-nav>

        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-nav-item-dropdown right>
            <!-- Using 'button-content' slot -->
            <template v-slot:button-content>
              <em>User</em>
            </template>
            <b-dropdown-item href="/login">Login</b-dropdown-item>
            <b-dropdown-item href="Register">Register</b-dropdown-item>
          </b-nav-item-dropdown>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </div>

  <!-- <b-nav tabs fill>
      <router-link
        v-for="routes in links"
        v-bind:key="routes.id"
        :to="`${routes.page}`"
      >{{routes.text}}</router-link>
  </b-nav>-->
</template>

<script>
export default {
  name: "Navigation",
  data() {
    return {
      links: [
        {
          id: 0,
          text: "Home",
          page: "/Home"
        },
        {
          id: 1,
          text: "News",
          page: "/News"
        },
        {
          id: 2,
          text: "Contact",
          page: "/Contact"
        },
        {
          id: 3,
          text: "Login",
          page: "/Login"
        },
        {
          id: 4,
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