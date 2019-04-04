<template>
  <div id="app">
    <BugConsole msg = "BUG-console"/>
  </div>
</template>

<script>
import BugConsole from '../components/BugConsole.vue'

export default {
  name: 'app',
  components: {
    BugConsole
  },
  mounted () {
    this.$mqtt.subscribe('logger');
  }
}
</script>