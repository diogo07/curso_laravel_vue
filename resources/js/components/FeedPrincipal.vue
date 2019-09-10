<template>
  <div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img :src="imagePath(lista[0].path_image)" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <a :href="'/noticia/' + lista[0].id">
              <h5>{{lista[0].titulo}}</h5>
              <p>{{lista[0].descricao}}</p>
            </a>
          </div>
        </div>

        <div class="carousel-item">
          <img :src="imagePath(lista[1].path_image)" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <a :href="'/noticia/' + lista[1].id">
              <h5>{{lista[1].titulo}}</h5>
              <p>{{lista[1].descricao}}</p>
            </a>
          </div>
        </div>

        <div class="carousel-item">
          <img :src="imagePath(lista[2].path_image)" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <a :href="'/noticia/' + lista[2].id">
              <h5>{{lista[2].titulo}}</h5>
              <p>{{lista[2].descricao}}</p>
            </a>
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</template>

<script>
export default {
  props: ["lista"],
  methods: {
    imagePath: function(url) {
      return require("../../assets/" + url + ".jpg");
    }
  }
};
</script>

<style media="screen">

p,
h5 {
  /* color: white; */
  /* background-color: black; */
}

a:hover{
  text-decoration: none;
  color: white;
}

/* .carousel-caption{
  
  
} */
</style>