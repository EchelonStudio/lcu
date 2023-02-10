const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                life: {
                    "0%": { width: "100%" },
                    "100%": { width: "0%" },
                },
            },
            animation: {
                life: "life 10000ms linear forwards",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
