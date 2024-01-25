<script>
import axios from "axios";

export default {
  data() {
    return {
      todoList: [],
    };
  },
  methods: {
    getTodo() {
      const t = this;
      axios
        .get(
          "http://localhost/eserciziBoolean/esercizi-php/php-todo-list-json/back-end/todo.php"
        )
        .then((res) => {
          t.todoList = res.data;
          console.log(t.todoList);
        });
    },
  },
  mounted() {
    this.getTodo();
  },
};
</script>
<template>
  <h1>Cose Da Fare</h1>
  <ol>
    <li v-for="element in todoList">{{ element.tips }}</li>
  </ol>
</template>
<style></style>
