<template>
  <div id="dongles">
    <Dongles :uid = 'uid' :admin = 'admin'/>
  </div>
</template>

<script>
import Dongles from '../components/Dongles.vue'

export default {
  name: 'dongles',
  props: ['uid','admin'],
  components: {
    Dongles
  },
  mounted () {
    this.$mqtt.subscribe('kiosk/#');
  }
}
</script>