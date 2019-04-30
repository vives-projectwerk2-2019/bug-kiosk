<template>
  <div id="generator">
    <div class="container">
        <div class="row justify-content-center">
            <vue-qr  :bgSrc="img" :text="data" :size="200" :logoScale="0.25" colorDark="#00cc99"></vue-qr>
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
        data:null
      }
  },
  mounted () {
    this.data = "{\"user_dongle_id\":" + "\"" + this.uid + "\"" + ",\"name\":" + "\"" + this.name + "\"" + "}";
    console.log(this.data);
    console.log("Generator mounted");
  }
}
</script>