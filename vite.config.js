import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import AutoImport from "unplugin-auto-import/vite";
export default defineConfig({
    server: {},
    plugins: [
        laravel({
            input: "resources/js/app.js",
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        AutoImport({
            imports: ["vue", "@vueuse/core", "@vueuse/head"],
            dts: "resources/js/auto-imports.d.ts",
            dirs: ["resources/js/enum/"],
            vueTemplate: true,
            /* options */
        }),
    ],
    css: {},
});
