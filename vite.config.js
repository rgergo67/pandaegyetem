import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import fs from "fs";

const host = 'pandaegyetem.local.hu';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host,
        hmr: { host },
        https: {
            key: fs.readFileSync(`/etc/ssl/local/${host}.key`),
            cert: fs.readFileSync(`/etc/ssl/local/${host}.crt`),
        }
    },
});
