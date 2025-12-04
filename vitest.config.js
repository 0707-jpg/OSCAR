import { defineConfig } from "vitest/config";
import React from "@vitejs/plugin-react";

export default defineConfig({
    plugins: [React()],
    test: {
        globals: true,
        environment: "jsdom",
        setupFiles: "./src/test/setup.js",
    }

});