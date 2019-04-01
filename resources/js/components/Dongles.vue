<template>
    <div class="dongles">
        <h1 id="under-navbar">My dongles</h1>
        <div class="row ">
            <div class="dongle-white"></div>
            <div class="dongle col s1 tooltipped" data-position="top" data-tooltip="Test test test test test">Dongle 1</div>
            <div class="dongle-white"></div>
            <div class="dongle col s1 tooltipped" data-position="top" data-tooltip="Test test test test test">Dongle 2</div>
            <div class="dongle-white"></div>
            <div class="dongle col s1 tooltipped" data-position="top" data-tooltip="Test test test test test">Dongle 3</div>
            <div class="dongle-white"></div>
        </div>
        <div class="container">
          <button class="waves-effect waves-light btn-large" id="button" v-on:click="sendID">SendID</button>
        </div>
    </div>
</template>


<script>
export default {
  name: 'Dongles',
  props: {
    msg: String,
    uid: Number,
  },
  mounted() {
      console.log('Dongles mounted.')
  },
  data () {
    return {
      //UserID: this.id
    }
  },
  methods: {
      sendID(){
        console.log(this.uid);
        this.$mqtt.publish('hardware','{\"id\":' + this.uid + '}');
      }
  }
}
</script>