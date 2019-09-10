<template>
    <div >
        <nav id="menu" class="navbar navbar-dark bg-dark">
            <a href="/" class=".navbar-light">{{titulo}}</a>
            <a v-if="login" href="/login">Entrar</a>
            
        </nav>
    </div>
</template>


<script>
export default {
    props:['titulo', 'login']
}
</script>

<style media="screen">
    a{
        color: white;
        font-weight: bold;
    }

    #menu{
        height: 60px;
        margin-bottom: 30px;
    }
</style>