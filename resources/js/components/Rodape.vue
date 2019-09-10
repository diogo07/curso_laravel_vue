<template>
<footer class="page-footer font-small bg-dark pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <h5 class="text-uppercase">{{titulo}}</h5>
        <p>{{descricao}}</p>

      </div>

      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-3 mb-md-0 mb-3">

      </div>
      <div class="col-md-3 mb-md-0 mb-3">
      </div>

    </div>

  </div>
  <div class="footer-copyright text-center py-3">© {{ano}} Copyright:
    <a :href="link">{{titulo}}</a>
  </div>

</footer>
</template>

<script>
export default {
    props:['titulo', 'descricao', 'ano', 'link']
}
</script>

<style media="screen">
  .page-footer p, .page-footer h5, .footer-copyright{
    color: white;
  }
</style>