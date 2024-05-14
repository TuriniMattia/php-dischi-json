

const { createApp, ref } = Vue
createApp({
  data() {
    return {
      message:'Hello Vue!',
      dischi: [],
    }
  },
  methods:{
    fetchData(){
        axios.get('./server.php').then((res) =>{
            console.log(res.data)
        })
    }
  },
  created(){
    this.fetchData()
  },
}).mount('#app')