<template>
  <div class="container-fluid bg-dark text-indigo-500 py-5">
    <ul>

      <li class="link">
        <nuxt-link to="/">Accueil</nuxt-link>
      </li>

      <li class="link">
        <nuxt-link to="/users">Utilisateurs</nuxt-link>
      </li>

      <li class="link">
        <a href="#">MammaMia</a>
      </li>

    </ul>
  </div>
</template>

<script>
  export default {
    name: "AppHeader"
  }
</script>

<style scoped>

.container {
  width: 100%;
  padding-right: var(--bs-gutter-x, .75rem);
  padding-left: var(--bs-gutter-x, .75rem);
  margin-right: auto;
  margin-left: auto
}

@media (min-width:576px) {
  .container {
    max-width: 540px
  }
}

@media (min-width:768px) {
  .container {
    max-width: 720px
  }
}

@media (min-width:992px) {
  .container {
    max-width: 960px
  }
}

@media (min-width:1200px) {
  .container {
    max-width: 1140px
  }
}

@media (min-width:1400px) {
  .container {
    max-width: 1320px
  }
}

li {
  list-style:none;
  font-size:20px;
  display:inline;
  -webkit-transition:all .7s cubic-bezier(.93, .71, .58, 1);
  padding:5px;
  border-bottom:1px solid transparent;
}

li:hover {
  color: #DC134C;
  border-bottom:1px solid #DC134C;
}

a {
  color:inherit;
  text-decoration:none;
}

</style>
