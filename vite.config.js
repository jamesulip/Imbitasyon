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
            imports: ["vue", "@vueuse/core"],
            dts: "resources/js/auto-imports.d.ts",
            dirs: ["resources/js/enum/"],
            vueTemplate: true,
            /* options */
        }),
    ],
    css: {},
    build: {
        chunkSizeWarningLimit: 1024,
        rollupOptions: {
            output: {
                manualChunks(id) {
                    if (id.includes("/node_modules/")) {
                        const modules = ["@vueuse/core", "@vue"];
                        const chunk = modules.find((module) =>
                            id.includes(`/node_modules/${module}`)
                        );
                        return chunk ? `vendor-${chunk}` : "vendor";
                    }
                },
            },
        },
    },
});
