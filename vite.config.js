import {defineConfig, loadEnv, splitVendorChunkPlugin} from 'vite';
import laravel                                         from 'laravel-vite-plugin';

export default ({mode}) => {
    process.env   = {...process.env, ...loadEnv(mode, process.cwd())};
    const devHost = process.env.VITE_DEV_HOST.split('//')[1];

    return defineConfig({
        build: {
            sourcemap: 'inline',
            // rollupOptions: {
            //     output: {
            //         manualChunks: {
            //
            //         }
            //     }
            // },
        },
        plugins: [
            laravel({
                input: [
                    'resources/js/app.js',
                    'resources/js/admin.js',
                    'resources/js/front.js',
                    'resources/js/datetime-picker.js',
                    'resources/js/slider.js',
                    'resources/sass/app.scss',
                    'resources/sass/admin.scss',
                    'resources/sass/front.scss',
                    'resources/sass/fonts.scss',
                    'resources/sass/datetime-picker.scss',
                    'resources/sass/slider.scss',
                ],
                refresh: true,
            })
        ],
        server: {
            https: false,
            host: devHost,
            hmr: {
                host: devHost,
            },
            watch: {
                usePolling: true,
            },
        },
    });
};
