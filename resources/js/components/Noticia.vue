<template>
    <div class='artigo'>
        <h2>{{dados.titulo}}</h2>

        <div class="teste">
            <h4>{{dados.descricao}}</h4>

            <img :src="imagePath(dados.path_image)" alt="" srcset="">
        </div>

        <div class="clear"></div>

        <h6 class="conteudo">
            {{dados.conteudo}}
        </h6>
        
    </div>
</template>

<script>
export default {
    props:['dados'],
    methods: {
    imagePath: function(url) {
      return require("../../assets/" + url + ".jpg");
    }
  }
}
</script>

<style media="screen">

    .artigo{
        margin-top: 100px;
        margin-bottom: 100px;
    }

    .artigo h6{
        font-weight: normal;
        font-size: 14pt;
        text-align: justify;
    }

    .teste{
        width: 100%;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .teste h4{
        color: #cecece;
        float: right;
        width: 55%;
        padding: 3px;
    }

    .teste img{
        float: left;
        width: 40%;
        padding: 3px;
    }

    .clear{
        clear: both;
    }

    .conteudo{
        margin-top: 50px;
    }
</style>