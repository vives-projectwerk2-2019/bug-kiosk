<template>
  <div id="dongles">
    <Dongles :uid = 'uid' :admin = 'admin' :dongles='dongles' />
  </div>
</template>

<script>
import Dongles from '../components/Dongles.vue'

export default {
  name: 'dongles',
  props: ['uid','admin','dongles'],
  components: {
    Dongles
  },
  mounted () {
    this.$mqtt.subscribe('kiosk/#');
  }
}
</script>