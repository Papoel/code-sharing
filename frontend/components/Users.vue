<template>
  <div class="container-fluid">
    <table class="table table-hover">
      <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">prénom</th>
        <th scope="col">Pseudo</th>
        <th scope="col">Adresse</th>
        <th scope="col">CP</th>
        <th scope="col">Ville</th>
        <th scope="col">Pays</th>
        <th scope="col">Email</th>
        <th scope="col">Roles</th>
        <th scope="col">Actif</th>
        <th scope="col">Inscription</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <!--
                  <td>{{ user.nom }}</td>
                  <td>{{ user.prenom }}</td>
                  <td>{{ user.pseudo }}</td>
                  <td>{{ user.adresse }}</td>
                  <td>{{ user.code_postal }}</td>
                  <td>{{ user.ville }}</td>
                  <td>{{ user.pays }}</td>
                  <td>{{ user.email }}</td>
                  <td>{{ user.roles }}</td>
                  <td>{{ user.actif }}</td>
                  <td>{{ user.inscription }}</td>
        -->
        <td>Nom1</td>
        <td>Prenom1</td>
        <td>pseudo1</td>
        <td>adresse1</td>
        <td>CP1</td>
        <td>Ville1</td>
        <td>Pays1</td>
        <td>Email1</td>
        <td>roles1</td>
        <td>actif1</td>
        <td>inscription1</td>

      </tr>
      </tbody>
    </table>

    <div v-bind:key="user.id" v-for="(user, users) in users">
      {{ user.pseudo }}
    </div>

  </div>
</template>

<script>
  import axios from 'axios'

  export default {
    name: "Users",
    data() {
      return {
        users: null,
      }
    },
    mounted () {
      axios
        .get('https://localhost/api/users/')
        .then(response => {
          this.users = response.data;
          console.log(response)
        })
    }
  }
</script>
