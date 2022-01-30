<template>
  <main>
    <div class="py-5 bg-blue-600">
      <h1 class="text-center">Users Page <span class="text-pink-700">&hearts;</span></h1>
    </div>
    <div class="m-5">
      <h2>Liste des utilisateurs de <strong>Code-Sharing</strong></h2>
    </div>
    <Users />
  </main>
</template>

<script>
import Users from '~/components/Users'

export default {
  name: "users"
}
</script>
