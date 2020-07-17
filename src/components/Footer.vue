<template>
  <v-footer dark>
    <v-container fluid>
      <v-row no-gutters>
        <v-col cols="4" sm="4">
          <b-img :src="require('../assets/Beer_ME_Logo_4_2020_negatif.png')" class="img" alt="placeholder"></b-img>
        </v-col>
        <v-col cols="4" sm="4">
          <v-btn v-for="icon in icons" :key="icon" class="mx-4" dark icon>
            <v-icon size="24px">{{ icon }}</v-icon>
          </v-btn>
        </v-col>
        <v-col cols="4" sm="4">
          <v-card class="pa-6">
            <v-card-text>
              <h2 class="">Contact :</h2>
              <a href="mailto:info@beerme.ch">info@beerme.ch</a>
              <div class="">
                Chemin de la Fontaine 114
                <br />"1040 Echallens"
              </div>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-footer>
</template>


<script>
export default {
  data: () => ({
    icons: ["mdi-facebook", "mdi-youtube", "mdi-instagram"],
    mail: "info@beerme.ch"
  })
};
</script>
  

<style scoped>
footer, .theme--dark{
  background-color: black !important;
}
a{
    text-decoration: none;
    color: white;
}
</style>