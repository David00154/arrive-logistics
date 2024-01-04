import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { globSync } from "glob"

// const p = globSync(["resources/static/**/*.{png,jpeg,css,js,svg}"]);
// console.log(p)
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});


// \{\{\s*Vite::asset\('resources([^']*\.([a-zA-Z]+))?'[^']*\}\}