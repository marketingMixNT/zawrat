import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                max: "2200px",
            },
            colors: {
                primary: {
                    200: "#b0741d",
                    400: "#a46421",
                    800: "#834f1b",
                },
                secondary: {
                    100: "#ffffff",
                    200: "#F2F2F2",
                    300: "#e7e6e8",
                    400: "#777777",
                    800: "#292929",
                },

                bgPrimary: "#F2F2F2",
                bgSecondary: "#e7e6e8",

                fontLight: "#ffffff",
                fontDark: "#777777",
            },
            fontFamily: {
                heading: ["Kumbh Sans", "serif"],
                text: ["DM Sans", "serif"],
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
