<template>
  <div class="home-page">
    <div class="beer-of-the-month">
      <b-carousel id="carousel-fade" fade interval="2000" indicators>
        <b-carousel-slide
          caption="Promo du mois !"
          img-src="https://picsum.photos/1024/480/?image=10"
        ></b-carousel-slide>
        <b-carousel-slide
          caption="Goutez la nouvelle bière !"
          img-src="https://picsum.photos/1024/480/?image=12"
        ></b-carousel-slide>
        <b-carousel-slide
          caption="Bières populaires !"
          img-src="https://picsum.photos/1024/480/?image=22"
        ></b-carousel-slide>
      </b-carousel>
    </div>
    <div class="presentation">
      <b-card>
        <b-media>
          <template v-slot:aside></template>

          <h1 class="mt-0">
            <span class="underline">
              <span class="stabilo">Présentation de BeerMe</span>
            </span>
          </h1>
          <p>
            I'm baby bespoke shabby chic lyft, brunch cold-pressed migas tbh pour-over raclette forage trust fund pop-up flexitarian echo park quinoa. Marfa scenester offal la croix wayfarers try-hard street art migas sartorial cliche. Bushwick ramps man bun church-key. Austin enamel pin meggings, banh mi skateboard semiotics pork belly kale chips waistcoat venmo flexitarian four dollar toast tumblr hoodie art party.
            <br />Bushwick small batch raw denim pop-up, trust fund franzen raclette pork belly air plant whatever iPhone disrupt. Disrupt raw denim post-ironic, put a bird on it cronut tilde shoreditch pickled health goth lumbersexual palo santo chia fanny pack microdosing try-hard. Vaporware intelligentsia hell of narwhal lyft, drinking vinegar kogi messenger bag. 3 wolf moon yuccie helvetica food truck, mixtape tofu single-origin coffee butcher whatever actually keffiyeh authentic tumblr meggings. Roof party portland man braid air plant distillery vegan la croix.
            <br />$50
            DIY mustache tote bag godard retro gluten-free copper mug schlitz crucifix taxidermy hella before they sold out VHS blog vape. Enamel pin actually brunch literally godard. Mumblecore meditation forage, coloring book ethical single-origin coffee fingerstache mlkshk pork belly leggings pour-over. Pabst meggings offal post-ironic fingerstache.
          </p>
        </b-media>
      </b-card>
    </div>
  </div>
</template>

 
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1,
h2 {
  font-family: "Ubuntu Nerd Font";
  font-weight: bold;
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
p {
  font-family: Lekton;
}
span.stabilo {
  padding-right: 10px;
  background: linear-gradient(0deg, #ffe300 50%, #fff0 50%);
}
span.underline {
  padding-left: 70px;
  border-bottom: 5px solid #000;
}
.carousel-item {
  height: 700px;
  text-shadow: 0px 0px 2px #000;
}
</style>
