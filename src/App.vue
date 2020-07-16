<template>
  <div class="vue-tempalte">
    <!-- Navigation -->

    <Navigation></Navigation>

    <!-- Main -->
    <div class="App">
      <div class="vertical-center">
        <div class="inner-block">
          <router-view />
        </div>
      </div>
    </div>
    <Footer></Footer>
  </div>
</template>

<script>
import Navigation from "./components/Navigation";
import Footer from "./components/Footer";
export default {
  name: "app",
  components: {
    Navigation: Navigation,
    Footer: Footer
  }
};
</script>
                
<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
@font-face {
  font-family: Lekton;
  src: url(Lekton-Regular.ttf);
}
@font-face {
  font-family: Lekton;
  src: url(Lekton-Bold.ttf);
  font-weight: bold;
}
@font-face {
  font-family: Lekton;
  src: url(Lekton-Regular.ttf);
}
@font-face {
  font-family: "Ubuntu Nerd Font";
  src: url(UbuntuMediumNerdFontComplete.ttf);
}
</style>
