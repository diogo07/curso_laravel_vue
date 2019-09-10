<template>
  <div>
    <slot></slot>
    <div class="container">
      <feed-principal :lista="listaNoticiasPrincipais"></feed-principal>

      <div id="sem_destaque" v-for="noticia in listaNoticiasSemDestaque">
        <feed
          :id="noticia.id"
          :url="noticia.path_image"
          :titulo="noticia.titulo"
          :descricao="noticia.descricao"
          :atualizacao="noticia.created_at"
        ></feed>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  computed: {
    listaNoticiasPrincipais: function() {
      return this.$store.state.noticiasPrincipais;
    },

    listaNoticiasSemDestaque: function() {
      return this.$store.state.noticiasSemDestaque;
    }
  },

  mounted: function() {
    axios.get("/api/noticias").then(response => {
      var list = response.data.data;
      this.$store.commit("setNoticiasPrincipais", list);
    });

    axios.get("/api/noticias?page=2").then(response => {
      var list = response.data.data;
      this.$store.commit("setNoticiasSemDestaque", list);
    });
  }
};
</script>


<style media="screen">
    #sem_destaque{
        margin-top: 40px;
    }
</style>