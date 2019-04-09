<template>
    <div class="dongles">
      <h1 id="under-navbar">Program dongle</h1>
      <div class="container">
        <div class="row ">
          <div class="col s1">
            <h2 class="center-align">Station 1</h2>
            <img class="station-icon" data-position="top" v-bind:src="'images/kiosk/' + pi1Image" >
            <button class="waves-effect waves-light btn-large col s12 center-align" id="profile-button" v-on:click="sendIDPi1">Send ID
              <i class="material-icons right">send</i>
            </button>
          </div>
          <div class="dongle-white"></div>
          <div class="col s1">
            <h2 class="center-align">Station 2</h2>
            <img class="station-icon" data-position="top" v-bind:src="'images/kiosk/'+ pi2Image" >
            <button class="waves-effect waves-light btn-large col s12 center-align" id="profile-button" v-on:click="sendIDPi2">Send ID
              <i class="material-icons right">send</i>
            </button>
          </div>
          <div class="dongle-white"></div>
          <div class="col s1">
            <h2 class="center-align">Station 3</h2>
            <img class="station-icon" data-position="top" v-bind:src="'images/kiosk/'+ pi3Image" >
            <button class="waves-effect waves-light btn-large col s12 center-align" id="profile-button" v-on:click="sendIDPi3">Send ID
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </div>
    </div>
</template>


<script>
export default {
  name: 'Dongles',
  props: {
    msg: String,
    uid: String,
  },
  mounted() {
      console.log('Dongles mounted.');
  },
  data () {
    return {
      pi1:false,
      pi2:false,
      pi3:false,
      pi1Image:'wait.png',
      pi2Image:'wait.png',
      pi3Image:'wait.png',
      timer1:null,
      timer2:null,
      timer3:null
    }
  },
  mqtt: {
    'ping/pi1' (data) {
      this.pi1Image = 'checked.png';
      if (this.timer1) {
          clearTimeout(this.timer1); //cancel the previous timer.
          this.timer1 = null;
      }
      this.timer1 = setTimeout(() => {
        this.pi1Image = 'error.png';
      }, 30 * 1000);
    },
    'ping/pi2' (data) {
      this.pi2Image = 'checked.png';
      if (this.timer2) {
        clearTimeout(this.timer2); //cancel the previous timer.
        this.timer2 = null;
      }
      this.timer2 = setTimeout(() => {
        this.pi2Image = 'error.png';
      }, 30 * 1000);
    },
    'ping/pi3' (data) {
      this.pi3Image = 'checked.png';
      if (this.timer3) {
          clearTimeout(this.timer3); //cancel the previous timer.
          this.timer3 = null;
      }
      this.timer3 = setTimeout(() => {
        this.pi3Image = 'error.png';
      }, 30 * 1000);
    },
  },
  methods: {
      sendIDPi1(){
        this.$mqtt.publish('program-dongle/pi1','{\"id\":\"' + this.uid + '\"}');
      },
      sendIDPi2(){
        this.$mqtt.publish('program-dongle/pi2','{\"id\":\"' + this.uid + '\"}');
      },
      sendIDPi3(){
        this.$mqtt.publish('program-dongle/pi3','{\"id\":\"' + this.uid + '\"}');
      },
    }
  }

</script>