import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'node_modules/datatables.net-dt/css/dataTables.dataTables.min.css',
                'node_modules/datatables/media/css/jquery.dataTables.min.css',
                'node_modules/quill/dist/quill.snow.css',
            ],
            refresh: true,
        }),
    ],
});
