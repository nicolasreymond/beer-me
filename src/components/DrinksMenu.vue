<template>
  <div class="">
    <b-card-group deck class="m-2">
      <b-card v-for="beer in beers" v-bind:key="beer.id" :title="beer.name" >
        <!-- <b-card-text>Some quick example text to build on the card title and make up the bulk of the card's content.</b-card-text> -->

        <b-button href="#" variant="primary">2 CHF</b-button>
      </b-card>

      <!-- <b-card
        title="Bière de beauf"
        img-src="https://afriquemidi.com/wp-content/uploads/2018/06/Etes-vous-un-beauf-Faites-le-test.jpg"
        img-alt="Leffe"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2"
      >
        <b-card-text>Some quick example text to build on the card title and make up the bulk of the card's content.</b-card-text>

      <b-button href="#" variant="primary">69 CHF</b-button>-->
      <!-- </b-card> -->
    </b-card-group>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      beers: [],
      errors: []
    };
  },
  created() {
    axios
      .get(`http://localhost:1337/beers.php`)
      .then(response => {
        // JSON responses are automatically parsed.
        this.beers = response.data;
      })
      .catch(e => {
        this.errors.push(e);
      });

    //   methods: {
    //     fetchUsers: function() {
    //       const baseURI = "localhost:1337/beers.php?id=1";

    //       this.$http.get(baseURI).then(result => {
    //         this.beer = result.data;
    //       });
    //     }
  }
};
</script>