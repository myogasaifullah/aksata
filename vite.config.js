import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
    host: true, // ini membuat Vite bisa diakses dari jaringan luar
    strictPort: true,
    port: 5173,
    allowedHosts: ['.ngrok-free.app'], // ⬅ tambahkan ini
  },
});
