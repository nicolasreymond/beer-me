<template>
  <div class="drink-cards">
    <b-card-group deck class="m-2">
      <b-card
        title="Leffe"
        img-src="https://images.interdrinks.com/v5/img/p/1304-50351-w786-h540-transparent.png"
        img-alt="Leffe"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2"
      >
        <b-card-text>Some quick example text to build on the card title and make up the bulk of the card's content.</b-card-text>

        <b-button href="#" variant="primary">2 CHF</b-button>
      </b-card>

      <b-card
        title="Bière de beauf"
        img-src="https://afriquemidi.com/wp-content/uploads/2018/06/Etes-vous-un-beauf-Faites-le-test.jpg"
        img-alt="Leffe"
        img-top
        tag="article"
        style="max-width: 20rem;"
        class="mb-2"
      >
        <b-card-text>Some quick example text to build on the card title and make up the bulk of the card's content.</b-card-text>

        <b-button href="#" variant="primary">69 CHF</b-button>
      </b-card>
    </b-card-group>
  </div>
</template>

<script>
export default {
  data() {
    return {
      beer: []
    };
  },
  methods: {
    fetchUsers: function() {
      const baseURI = "localhost:1337";
      this.$http.get(baseURI).then(result => {
        this.users = result.data;
      });
    }
  }
};
</script>