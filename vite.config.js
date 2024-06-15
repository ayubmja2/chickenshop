import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'resources/images', // Source directory for images
                    dest: 'assets/' // Destination directory in the output
                }
            ]
        })
    ],
    build: {
        rollupOptions: {
            input: {
                main: 'resources/js/app.js',
                css: 'resources/css/app.css',
                images: 'resources/images' // Explicitly add images to input
            },
            output: {
                assetFileNames: (assetInfo) => {
                    let extType = assetInfo.name.split('.').pop();
                    if (/png|jpe?g|svg|gif|tiff|bmp|ico/i.test(extType)) {
                        return `assets/images/[name]-[hash][extname]`;
                    }
                    return `assets/[name]-[hash][extname]`;
                },
            },
        },
    },
});
