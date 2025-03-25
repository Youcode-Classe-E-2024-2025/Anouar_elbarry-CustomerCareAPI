<template>
  <div>
    <h1>{{ title }}</h1>
    <p>This is an example Vue 3 component in your Laravel project.</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: 'Welcome to Vue 3'
    }
  }
}
</script>

<style scoped>
h1 {
  color: #42b983;
}
</style>