import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/js/shop/shop.js',
                'resources/css/shop/login.css',
            ],
            refresh: true,
        }),
    ],
});
