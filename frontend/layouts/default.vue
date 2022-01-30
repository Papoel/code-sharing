<template>
  <div>
    <AppHeader />
    <Nuxt />
  </div>
</template>

<script>
  import AppHeader from "~/components/inc/AppHeader";

  export default {
    name: "default",
    components: {AppHeader}
  }
</script>
