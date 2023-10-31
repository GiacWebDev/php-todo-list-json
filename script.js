// File per gestire l'interazione tra Frontend e VueJS
const { createApp } = Vue;

createApp({
  data() {
    return {
      title: "TO DO LIST",
      list: [],
      newTask: ''
    };
  },
  // RICHIAMO L'API
  methods: {
    getList() {
      console.log("lista");
      axios
      .get("server.php")
      .then(result => {
        this.list = result.data;
      });
    },
  },
  addTask(){
    
  },
  // metodo richiamato al mounted
  mounted() {
    this.getList();
  },
}).mount("#app");
