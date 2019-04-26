<template>
    <div class="station">
        <h2 class="center-align">Station {{name}}</h2>
        <select v-if="admin == 'admin'" class="form-control" v-on:change="setHashPi($event)" >
            <option
            v-bind:key="dongle" 
            v-for="dongle in dongleNames" 
            >{{ dongle }}
            </option>
        </select>
        <a v-bind:class="piClass" v-on:click="sendIDPi(name)" href="" onclick="return false;">
            <img class="station-icon" data-position="top" v-bind:src="'images/kiosk/' + piImage">
        </a>
        <div class="dongle-white"></div>
    </div>
</template>

<script>

export default {
  name: 'Station',
  props: {
    uid: String,
    admin: String,
    name: String
  },
  mounted() {
      console.log('Station mounted.');
      console.log(this.admin);
      this.dongleNames = this.getDongleNames();
  },
  data () {
    return {
      pi:false,
      piImage:'devbit.png',
      piClass: "station-disabled",
      timer:null,
      programHashPi:this.uid,
      programNamePi:null,
      dongleNames:[],
    }
  },
  mqtt: {
    'kiosk/+/ping' (data,topic) {
      console.log(topic.substring(topic.indexOf("/") + 1, topic.indexOf("/ping")));
      if(this.name == topic.substring(topic.indexOf("/") + 1, topic.indexOf("/ping"))){
        this.piImage = 'add-user.png';
        this.piClass = null;
        this.clearTimer();
        this.timer = setTimeout(() => {
          this.piImage = 'sad.png';
          this.piClass = "station-disabled";
        }, 30 * 1000);
      }
    },
    'kiosk/+/status' (data) {
      if(this.name == topic.substring(topic.indexOf("/") + 1, topic.indexOf("/status"))){
        let parsed = JSON.parse(data);
        this.clearTimer();
        if(parsed.status == "ack"){
          this.piImage = 'add-contact.png';
          this.piClass= "station-disabled";
        }else if(parsed.status == "busy"){
          this.piImage = 'waiting.png'
          this.piClass= "station-disabled";
        }else if(parsed.status == "nack"){
          this.piImage = 'error.png'
          this.piClass= "station-disabled";
        }
      }
    },
  },
  methods: {
      sendIDPi(pi_id){
        this.$mqtt.publish('kiosk/'+ pi_id +'/program-dongle','{\"id\":\"' + this.programHashPi + '\"}');
      },
      clearTimer(){
        if (this.timer) {
        clearTimeout(this.timer);
        this.timer = null;
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
      setHashPi(e){
        this.programNamePi = e.target.value;
        self = this;
        if(this.programNamePi == "User"){
          this.programHashPi = this.uid;
        }
        console.log(this.programNamePi);
        axios.get('api/get_dongles').then(function (response) {
          response.data.forEach(function(element) {
            if(element.name == self.programNamePi){
              self.programHashPi = element.dongle_hash;
              console.log(self.programHashPi);
            }
          });
        }); 
      }
    }
  }

</script>