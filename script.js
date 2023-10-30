// File per gestire l'interazione tra Frontend e VueJS
const { createApp } = Vue;

createApp({
  data() {
    return {
      title: "TO DO LIST",
    };
  },
}).mount("#app");
