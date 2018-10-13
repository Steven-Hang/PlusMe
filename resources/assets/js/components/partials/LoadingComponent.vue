<template lang="html">
  <div class="centerx">
    <vs-button @click="openLoading" vs-type="line" vs-color="warning">Register</vs-button>
  </div>

</template>

<script>
export default {
  data(){
    return {
      colorLoading:'#FFA500',
    }
  },
  methods:{
    openLoading(){
      this.$vs.loading({color:this.colorLoading})
      
      setTimeout( ()=> {
        this.$vs.loading.close()
      }, 7000);
    },
  }
}
</script>