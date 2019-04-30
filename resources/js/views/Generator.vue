<template>
  <div id="generator">
    <div class="container">
        <div class="row justify-content-center">
            <vue-qr  :bgSrc="img" :text="data" :size="200" colorDark="#00cc99" :margin="0" :autoColor="state"></vue-qr>
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
        state:null
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
  }
}
</script>