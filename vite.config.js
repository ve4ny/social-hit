import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/styles.scss', 'resources/js/app.js', 'resources/js/files/main.js',],
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        alias: {
            'vue': 'vue/dist/vue.esm-bundler.js',
            '@images': path.resolve(__dirname, 'public/images'),
        },
    },
    server: {
        cors: {
            origin: '*',
            methods: ['GET', 'HEAD', 'PUT', 'PATCH', 'POST', 'DELETE'],
            allowedHeaders: ['Content-Type', 'Authorization'],
        }
    }
});
