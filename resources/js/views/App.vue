<template>
  <div id="app">
    <!-- <img alt="BUG logo" src="./assets/logo.png" height="25%" width="25%"> -->
    <BugConsole msg="BUG-console"/>
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
    this.$mqtt.subscribe('TTN')
  }
}
</script>