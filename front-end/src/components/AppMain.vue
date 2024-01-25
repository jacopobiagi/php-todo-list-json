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
      axios
        .get(
          "http://localhost/eserciziBoolean/esercizi-php/php-todo-list-json/back-end/todo.php"
        )
        .then((res) => {
          console.log(res.data);
        });
    },
  },
  mounted() {
    this.getTodo();
  },
};
</script>
<template>sssssssss</template>
<style></style>
