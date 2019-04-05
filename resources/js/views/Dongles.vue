<template>
  <div id="dongles">
    <Dongles :uid = 'uid'/>
  </div>
</template>

<script>
import Dongles from '../components/Dongles.vue'

export default {
  name: 'dongles',
  props: ['uid'],
  components: {
    Dongles
  }
}
</script>