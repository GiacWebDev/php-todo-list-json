// File per gestire l'interazione tra Frontend e VueJS
const { createApp } = Vue;

createApp({
  data() {
    return {
      apiURL: 'server.php',
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
        .get(this.apiURL)
        .then(result => {
          this.list = result.data;
      });
    },

    addTask(){
      // il dato deve venire da un form, utilizzo FormData
      const data = new FormData();
      data.append('taskItem', this.newTask);
      axios 
        .post(this.apiURL, data)
        .then(result => {
          console.log(result.data);
          this.list = result.data
          this.newTask = '';
        })
    },

    toggleTaskStatus(index) {
      this.list[index].completed = !this.list[index].completed;
    }
  },

  // metodo richiamato al mounted
  mounted() {
    this.getList();
  },
}).mount("#app");
