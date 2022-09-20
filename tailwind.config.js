/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: "jit",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("@shrutibalasa/tailwind-grid-auto-fit")],
};
