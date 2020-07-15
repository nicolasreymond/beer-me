<template>
  <div>
    <b-navbar toggleable="lg">
      <b-navbar-brand to="Home">
        <b-img :src="require('../assets/BeerMe.svg')" width="60" alt="placeholder"></b-img>
      </b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav>
          <b-nav-item
            v-for="routes in linksL"
            v-bind:key="routes.id"
            :to="`${routes.page}`"
            class="yellow"
            router-link-active
          >{{routes.text}}</b-nav-item>
        </b-navbar-nav>

        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-nav-item
            right
            v-for="routes in linksR"
            v-bind:key="routes.id"
            :to="`${routes.page}`"
            router-link-active
            class="yellow"
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
.navbar {
  background-color: rgb(0, 0, 0);
}
.nav-link {
  font-family: "Lekton";
  font-weight: bold;
  margin-right: 10%;
  color: white !important;
}

.nav-item {
  text-decoration: none;
  letter-spacing: 0.1em;
  display: inline-flex;
  padding: 0px 5px;
  position: relative;
}
.nav-item:hover {
  background-color: rgba(231, 219, 52);
}
.router-link-active {
  background-color: rgba(231, 219, 52);
}
</style>