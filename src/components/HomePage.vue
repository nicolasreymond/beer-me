<template>
  <div class="home-page">
    <div class="presentation">
      <b-card>
        <b-media>
          <template v-slot:aside>
            <b-img :src="require('../assets/BeerMe.svg')" width="64" alt="placeholder"></b-img>
          </template>

          <h2 class="mt-0">Présentation de BeerMe</h2>
          <p>
            I'm baby bespoke shabby chic lyft, brunch cold-pressed migas tbh pour-over raclette forage trust fund pop-up flexitarian echo park quinoa. Marfa scenester offal la croix wayfarers try-hard street art migas sartorial cliche. Bushwick ramps man bun church-key. Austin enamel pin meggings, banh mi skateboard semiotics pork belly kale chips waistcoat venmo flexitarian four dollar toast tumblr hoodie art party.<br/>

            Bushwick small batch raw denim pop-up, trust fund franzen raclette pork belly air plant whatever iPhone disrupt. Disrupt raw denim post-ironic, put a bird on it cronut tilde shoreditch pickled health goth lumbersexual palo santo chia fanny pack microdosing try-hard. Vaporware intelligentsia hell of narwhal lyft, drinking vinegar kogi messenger bag. 3 wolf moon yuccie helvetica food truck, mixtape tofu single-origin coffee butcher whatever actually keffiyeh authentic tumblr meggings. Roof party portland man braid air plant distillery vegan la croix.<br/>
$
            DIY mustache tote bag godard retro gluten-free copper mug schlitz crucifix taxidermy hella before they sold out VHS blog vape. Enamel pin actually brunch literally godard. Mumblecore meditation forage, coloring book ethical single-origin coffee fingerstache mlkshk pork belly leggings pour-over. Pabst meggings offal post-ironic fingerstache.
          </p>
        </b-media>
        <b-button v-b-toggle.display-beer-of-the-month>Bières du mois !</b-button>
      </b-card>
    </div>

    <div class="beer-of-the-month">
        <b-sidebar id="display-beer-of-the-month" title="Bières du mois" right shadow>
          <div class="px-3 py-2">
            <h5>Bière Lorem</h5>
            <p>
              Taxidermy readymade pop-up jianbing lomo bitters green juice church-key live-edge offal cardigan small batch shaman forage umami. Actually banjo neutra flexitarian, celiac mustache vinyl literally intelligentsia. Art party listicle edison bulb yuccie, asymmetrical flannel twee ugh shoreditch celiac.
            </p>

            <h5>Bière Ipsum</h5>
            <p>
              Lyft mustache pok pok gentrify. Freegan before they sold out kombucha drinking vinegar paleo vape wolf knausgaard. Intelligentsia austin narwhal drinking vinegar selfies activated charcoal hot chicken blue bottle chicharrones hexagon slow-carb. Pop-up vice woke, unicorn vinyl hell of fam leggings before they sold out cornhole craft beer.
            </p>

            <h5>Bière Leffe</h5>
            <p>
              Wayfarers chartreuse distillery, succulents food truck mixtape disrupt forage asymmetrical. Pour-over pickled flannel vegan listicle bushwick fanny pack DIY edison bulb bespoke kinfolk cold-pressed. Drinking vinegar pour-over artisan truffaut chartreuse copper mug banh mi keffiyeh.
            </p>

          </div>
        </b-sidebar>
    </div>
  </div>
</template>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1,
h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
