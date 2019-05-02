<template>
    <div class="dongles">
      <h1 id="under-navbar">Program dongle</h1>
      <div v-if="admin == 'admin'">
        <p>Administrator account</p>
      </div>
      <div class="container">
        <div class="row" v-if="station">
          <div class="col s12 m2 l3" v-bind:key="pi_id" v-for="pi_id in pi_ids">
            <Station :name="pi_id" :uid ="uid" :admin="admin"/>
          </div>
        </div>
        <div v-else>
          <p>There are no active stations!</p>
        </div>
      </div>
    </div>
</template>


<script>

import Station from './Station.vue'

export default {
  name: 'Dongles',
  props: {
    uid: String,
    admin: String,
  },
  components: {
    Station
  },
  mounted() {
      console.log('Program-dongles mounted.');
  },
  data () {
    return {
     pi_ids:[],
     set_pi_ids: new Set(),
     station:false
    }
  },
  mqtt: {
    'kiosk/+/ping' (data,topic){
      this.set_pi_ids.add(topic.substring(topic.indexOf("/") + 1, topic.indexOf("/ping")));
      this.pi_ids = Array.from(this.set_pi_ids);
      console.log(this.pi_ids);
      this.station = true;
    }
  }
}

</script>