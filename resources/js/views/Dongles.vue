<template>
  <div id="dongles">
    <Dongles/>
  </div>
</template>

<script>
import Dongles from '../components/Dongles.vue'

export default {
  name: 'dongles',
  components: {
    Dongles
  },
  mounted () {
    this.$mqtt.subscribe('TTN');
  }
}
</script>