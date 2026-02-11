const { createApp } = Vue;

const App = {
  template: `
    <div class="home-shell">
      <div class="home-shell__band"></div>

      <main class="home-shell__content">
        <div class="logo">FileAntrope</div>

        <h1 class="subscription-title">SUBSCRIPTION PLAN</h1>

        <div class="plans">
          <div class="plan-card"></div>
          <div class="plan-card"></div>
          <div class="plan-card"></div>
        </div>

        <section class="login-section">
          <div class="login-section__label">Déjà inscrit ?</div>
          <button class="login-button">Connexion</button>
        </section>
      </main>

      <div class="home-shell__band"></div>
    </div>
  `,
};

createApp(App).mount('#app');