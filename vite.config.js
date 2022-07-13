import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import AutoImport from "unplugin-auto-import/vite";
export default defineConfig({
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
            imports: ["vue"],
            dts: "resources/js/auto-imports.d.ts",
            dirs: ["resources/js/enum/"],
            vueTemplate: true,
            /* options */
        }),
    ],
});
