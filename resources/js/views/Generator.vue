<template>
  <div id="generator">
    <div class="container">
        <div class="wrapper">
          <div class="row col s12">
            <div v-if="toggle" class="wrapper">
              <vue-qr :bgSrc="img" :text="data" :size="200" colorDark="#00cc99" :margin="0" :autoColor="state"></vue-qr>
            </div>
            <div v-else class="wrapper" style="display:inline-block;">
              <qr-code :text="data" :size="200" color="#00cc99"></qr-code>
            </div>
          </div>
          <div class="row">
            <a class="waves-effect waves-light btn-small toggle_button" v-on:click="switchqr()"><i class="material-icons left">swap_horiz</i>toggle</a>
          </div>
        </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'Generator',
  props:{
      uid:String,
      name:String,
      img:String
  },
  data(){
      return {
        data:"",
        state:null,
        toggle:true
      }
  },
  mounted () {
    if(this.img == "images/avatars/default.png"){
      this.state = false;
    }else{
      this.state = true;
    }
    this.data = "{\"user_dongle_id\":" + "\"" + this.uid + "\"" + ",\"name\":" + "\"" + this.name + "\"" + "}";
    console.log("Generator mounted");
  },
  methods: {
    switchqr() {
      this.toggle= !this.toggle;
    }
  }
}
</script>

<style>
.toggle_button{
  background-color: #00cc99;
}
</style>
