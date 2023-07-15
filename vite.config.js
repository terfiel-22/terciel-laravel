import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/light.css',
                'resources/css/dark.css',
                'resources/js/app.js',
                'resources/js/jquery.js',
                'resources/js/datatables.js',
                'resources/js/fullcalendar.js',
            ],
            refresh: true,
        }),
    ],
});
