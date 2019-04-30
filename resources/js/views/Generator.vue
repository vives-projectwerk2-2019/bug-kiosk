<template>
  <div id="generator">
    <div class="container">
        <div class="row justify-content-center">
            <qr-code :text="data" size="100" color="#00cc99"></qr-code>
        </div>
       
    </div>
  </div>
</template>

<script>

export default {
  name: 'Generator',
  props:{
      uid:String,
      name:String
  },
  data(){
      return {
        data:null
      }
  },
  mounted () {
    this.data = "{\"user_dongle_id\":" + this.uid + ",\"name\":" + this.name + "}";
    console.log(this.data);
    console.log("Generator mounted");
  }
}
</script>