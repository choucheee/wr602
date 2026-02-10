<template>
    <div>
      <h1>Hello from Vue!</h1>
      <p>{{ message }}</p>
    </div>
  </template>

  <script>
  export default {
    props: ['message'],
    data() {
      return {
        // component specific data
      };
    },
    mounted() {
      console.log('Hello Vue component mounted!');
    }
  };
  </script>

  <style scoped>
  /* Component-specific styles */
  </style>
  