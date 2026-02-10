<template>
  <div class="page">
    <div class="card">
      <h1>Bonjour depuis Vue + Symfony !</h1>
      <p>Ceci est mon premier composant Vue.</p>
      <button>Un joli bouton</button>
    </div>
  </div>
</template>

<script setup>
// Tu pourras mettre ta logique ici
</script>

<style scoped>
.page {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #74b9ff, #0984e3);
}

.card {
  background: white;
  padding: 2rem 3rem;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
  text-align: center;
}

h1 {
  margin-bottom: 0.5rem;
  color: #2d3436;
}

p {
  margin-bottom: 1.5rem;
  color: #636e72;
}

button {
  padding: 0.6rem 1.4rem;
  border-radius: 999px;
  border: none;
  background: #00b894;
  color: white;
  font-weight: 600;
  cursor: pointer;
  transition: transform 0.1s ease, box-shadow 0.1s ease, background 0.2s ease;
}

button:hover {
  background: #019870;
  box-shadow: 0 6px 15px rgba(0, 184, 148, 0.4);
  transform: translateY(-1px);
}
</style>