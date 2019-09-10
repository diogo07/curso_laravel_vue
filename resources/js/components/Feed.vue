<template>
  <div>
    <div class="card mb-3" style="max-width: 100%;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img :src="imagePath(url)" class="card-img img_size" alt="..." />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{titulo}}</h5>
            <p class="card-text">{{descricao}}</p>
            <p class="card-text">
              <small class="text-muted">{{atualizacao}}</small>
            </p>
            <a class="btn btn-info" :href="'noticia/'+id">Ver mais</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
    props:['id', 'url', 'titulo', 'descricao', 'atualizacao'],
    methods:{
        imagePath: function (url) {
            return require('../../assets/' + url + '.jpg')
        }
    }
};
</script>

