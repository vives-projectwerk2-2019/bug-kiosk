<template>
    <div class="dongles">
      <h1 id="under-navbar">Program dongle</h1>
      <div v-if="admin == 1">
        <p> Administrator account</p>
      </div>
      <div class="container">
        <div class="row ">
          <div class="col s1">
            <h2 class="center-align">Station 1</h2>
            <select v-if="admin == 1" class="form-control" v-on:change="setHashPi1($event)" >
              <option
                v-bind:key="dongle" 
                v-for="dongle in dongleNames" 
                >{{ dongle }}
              </option>
            </select>
            <a v-bind:class="pi1Class" v-on:click="sendIDPi1" href="" onclick="return false;">
              <img class="station-icon" data-position="top" v-bind:src="'images/kiosk/' + pi1Image">
            </a>
          </div>
          <div class="dongle-white"></div>
          <div class="col s1">
            <h2 class="center-align">Station 2</h2>
            <select v-if="admin == 1" class="form-control" v-on:change="setHashPi2($event)">
              <option
                v-bind:key="dongle" 
                v-for="dongle in dongleNames" 
                >{{ dongle }}
              </option>
            </select>
            <a v-bind:class="pi2Class" v-on:click="sendIDPi2" href="" onclick="return false;">
              <img class="station-icon" data-position="top" v-bind:src="'images/kiosk/' + pi2Image">
            </a>
          </div>
          <div class="dongle-white"></div>
          <div class="col s1">
            <h2 class="center-align">Station 3</h2>
            <select v-if="admin == 1" class="form-control" v-on:change="setHashPi3($event)" >
              <option
                v-bind:key="dongle" 
                v-for="dongle in dongleNames" 
                >{{ dongle }}
              </option>
            </select>
            <a v-bind:class="pi3Class" v-on:click="sendIDPi3" href="" onclick="return false;">
              <img class="station-icon" data-position="top" v-bind:src="'images/kiosk/' + pi3Image">
            </a>
          </div>
        </div>
      </div>
    </div>
</template>


<script>

export default {
  name: 'Dongles',
  props: {
    uid: String,
    admin: String,
  },
  mounted() {
      console.log('Dongles mounted.');
      this.dongleNames = this.getDongleNames();
  },
  data () {
    return {
      pi1:false,
      pi2:false,
      pi3:false,
      pi1Image:'devbit.png',
      pi2Image:'devbit.png',
      pi3Image:'devbit.png',
      pi1Class: "station-disabled",
      pi2Class: "station-disabled",
      pi3Class: "station-disabled",
      timer1:null,
      timer2:null,
      timer3:null,
      programHashPi1:this.uid,
      programNamePi1:null,
      programHashPi2:this.uid,
      programNamePi2:null,
      programHashPi3:this.uid,
      programNamePi3:null,
      dongleNames:[],
    }
  },
  mqtt: {
    'kiosk/pi1/ping' (data) {
      this.pi1Image = 'add-user.png';
      this.pi1Class = null;
      this.clearTimer1();
      this.timer1 = setTimeout(() => {
        this.pi1Image = 'sad.png';
        this.pi1Class = "station-disabled";
      }, 30 * 1000);
    },
    'kiosk/pi2/ping' (data) {
      this.pi2Image = 'add-user.png';
      this.pi2Class = null;
      this.clearTimer2();
      this.timer2 = setTimeout(() => {
        this.pi2Image = 'sad.png';
        this.pi2Class= "station-disabled";
      }, 30 * 1000);
    },
    'kiosk/pi3/ping' (data) {
      this.pi3Image = 'add-user.png';
      this.pi3Class = null;
      this.clearTimer3();
      this.timer3 = setTimeout(() => {
        this.pi3Image = 'sad.png';
        this.pi3Class= "station-disabled";
      }, 30 * 1000);
    },
    'kiosk/pi1/status' (data) {
      let parsed = JSON.parse(data);
      this.clearTimer1();
      if(parsed.status == "ack"){
        this.pi1Image = 'add-contact.png';
        this.pi1Class= "station-disabled";
      }else if(parsed.status == "busy"){
        this.pi1Image = 'waiting.png'
        this.pi1Class= "station-disabled";
      }else if(parsed.status == "nack"){
        this.pi1Image = 'error.png'
        this.pi1Class= "station-disabled";
      }
    },
    'kiosk/pi2/status' (data) {
      let parsed = JSON.parse(data);
      this.clearTimer2();
      if(parsed.status == "ack"){
        this.pi2Image = 'add-contact.png';
        this.pi2Class= "station-disabled";
      }else if(parsed.status == "busy"){
        this.pi2Image = 'waiting.png'
        this.pi2Class= "station-disabled";
      }else if(parsed.status == "nack"){
        this.pi2Image = 'error.png'
        this.pi2Class= "station-disabled";
      }
    },
    'kiosk/pi3/status' (data) {
      let parsed = JSON.parse(data);
      this.clearTimer3();
      if(parsed.status == "ack"){
        this.pi3Image = 'add-contact.png';
        this.pi3Class= "station-disabled";
      }else if(parsed.status == "busy"){
        this.pi3Image = 'waiting.png'
        this.pi3Class= "station-disabled";
      }else if(parsed.status == "nack"){
        this.pi3Image = 'error.png'
        this.pi3Class= "station-disabled";
      }
    }
  },
  methods: {
      sendIDPi1(){
        this.$mqtt.publish('kiosk/pi1/program-dongle','{\"id\":\"' + this.programHashPi1 + '\"}');
      },
      sendIDPi2(){
        this.$mqtt.publish('kiosk/pi2/program-dongle','{\"id\":\"' + this.programHashPi2 + '\"}');
      },
      sendIDPi3(){
        this.$mqtt.publish('kiosk/pi3/program-dongle','{\"id\":\"' + this.programHashPi3 + '\"}');
      },
      clearTimer1(){
        if (this.timer1) {
        clearTimeout(this.timer1);
        this.timer1 = null;
        }
      },
      clearTimer2(){
        if (this.timer2) {
        clearTimeout(this.timer2);
        this.timer2 = null;
        }
      },
      clearTimer3(){
        if (this.timer3) {
        clearTimeout(this.timer3);
        this.timer3 = null;
        }
      },
      getDongleNames(){
        let names=["User"];
        axios.get('api/get_dongles').then(function (response) {
          response.data.forEach(function(element) {
            names.push(element.name);
          });
        });
        return names; 
      },
      setHashPi1(e){
        this.programNamePi1 = e.target.value;
        self = this;
        if(this.programNamePi1 == "User"){
          this.programHashPi1 = this.uid;
        }
        console.log(this.programNamePi1);
        axios.get('api/get_dongles').then(function (response) {
          response.data.forEach(function(element) {
            if(element.name == self.programNamePi1){
              self.programHashPi1 = element.dongle_hash;
              console.log(self.programHashPi1);
            }
          });
        }); 
      },
      setHashPi2(e){
        this.programNamePi2 = e.target.value;
        self = this;
        if(this.programNamePi2 == "User"){
          this.programHashPi2 = this.uid;
        }
        console.log(this.programNamePi2);
        axios.get('api/get_dongles').then(function (response) {
          response.data.forEach(function(element) {
            if(element.name == self.programNamePi2){
              self.programHashPi2 = element.dongle_hash;
              console.log(self.programHashPi2);
            }
          });
        }); 
      },
      setHashPi3(e){
        this.programNamePi3 = e.target.value;
        self = this;
        if(this.programNamePi3 == "User"){
          this.programHashPi3 = this.uid;
        }
        console.log(this.programNamePi3);
        axios.get('api/get_dongles').then(function (response) {
          response.data.forEach(function(element) {
            if(element.name == self.programNamePi3){
              self.programHashPi3 = element.dongle_hash;
              console.log(self.programHashPi3);
            }
          });
        }); 
      }
    }
  }

</script>