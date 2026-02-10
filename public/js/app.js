const { createApp } = Vue;

const App = {
  template: `
    <div class="card">
      <h1>Bonjour depuis Vue 3 + Symfony (sans UX) !</h1>
      <p>Ceci est mon composant monté en dur.</p>
    </div>
  `,
};

createApp(App).mount('#app');