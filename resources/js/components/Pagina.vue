<template>
  <div>
    <slot></slot>
    <div class="container">
      <span v-if="this.loading == false">
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

           <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item" @click="alterarPagina(dados.first_page_url)"><a class="page-link">Primeiro</a></li>
              <li v-if="dados.prev_page_url" class="page-item" @click="alterarPagina(dados.prev_page_url)"><a class="page-link">{{dados.current_page - 1}}</a></li>
              <li class="page-item active"><a class="page-link">{{dados.current_page}}</a></li>
              <li v-if="dados.next_page_url" class="page-item" @click="alterarPagina(dados.next_page_url)"><a class="page-link">{{dados.current_page + 1}}</a></li>
              <li class="page-item" @click="alterarPagina(dados.last_page_url)"><a class="page-link">Último</a></li>
            </ul>
          </nav>

      </span>
        
      <span class="load" v-else>
        <div class="lds-dual-ring"></div>
      </span>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      loading:true,
      dados: []
    }
  },
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
      this.dados = response.data;
      let list = response.data.data;
      this.$store.commit("setNoticiasPrincipais", list);
    });

    axios.get("/api/noticias?page=2").then(response => {
      let list = response.data.data;
      this.$store.commit("setNoticiasSemDestaque", list);
      this.loading = false;
    });

    
  },

  methods:{
    alterarPagina: function(link){
      this.loading = true;
      axios.get(link).then(response => {
      let lista = response.data.data;
      this.dados = response.data;
      this.$store.commit("setNoticiasSemDestaque", lista);
      this.loading = false;
    });
    }
  }
};
</script>


<style media="screen">
    #sem_destaque{
        margin-top: 40px;
    }

    .load{
      padding-left: 50%;
    }

    .page-link{
      cursor: pointer;
    }

    .lds-dual-ring {
      margin-top: 25vh;
      margin-bottom: 25vh;
      display: inline-block;
      width: 64px;
      height: 64px;
    }
.lds-dual-ring:after {
  content: " ";
  display: block;
  width: 46px;
  height: 46px;
  margin: 1px;
  border-radius: 50%;
  border: 5px solid #000;
  border-color: #000 transparent #000 transparent;
  animation: lds-dual-ring 1.2s linear infinite;
}
@keyframes lds-dual-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>