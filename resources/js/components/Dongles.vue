<template>
    <div class="dongles">
        <h1 id="under-navbar">Program dongle</h1>
        <div class="row">
          <div class="container">
            <button class="waves-effect waves-light btn-large col s2 offset-s5 center-align" id="profile-button" v-on:click="sendID">Send ID
              <i class="material-icons right">send</i>
            </button>
          </div>
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
    }
  },
  methods: {
      sendID(){
        console.log(this.uid);
        this.$mqtt.publish('program-dongle','{\"id\":' + this.uid + '}');
      }
  }
}
</script>