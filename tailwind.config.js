const colors = require("tailwindcss/colors");
module.exports = {
    mode: "jit",
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        colors: {
            transparent: "transparent",
            current: "currentColor",
            coolGray: colors.coolGray,
            red: colors.red,
            sky: colors.sky,
            emerald: colors.emerald,
        },
        extend: {
            fontFamily: {
                body: ["Poppins", '"Open Sans"'],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
