// File per gestire l'interazione tra Frontend e VueJS
const { createApp } = Vue;

createApp({
  data() {
    return {
      // harray task
      tasks: [],
      newTask: "",
    };
  },
}).mount("#app");
