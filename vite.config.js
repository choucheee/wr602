import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  plugins: [vue()],
  root: 'assets',
  base: '/build/',
  server: {
    host: '0.0.0.0',
    port: 5173,
    hmr: {
      host: 'symfony.mmi-troyes.fr', // adapte si l’URL de ton navigateur est différente
      protocol: 'ws',
      port: 5173,
    },
  },
  build: {
    outDir: '../public/build',
    emptyOutDir: true,
  },
});