import defaultTheme from 'tailwindcss/defaultTheme';

import daisyui from "daisyui";
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                red: '#EF3624',
                blue: '#017BAC',
                yellow: '#FFD500',
            },
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    daisyui: {
        themes: ['light']
        // themes: [
        //     "light",
        //     "dark",
        //     "cupcake",
        //     "bumblebee",
        //     "emerald",
        //     "corporate",
        //     "synthwave",
        //     "retro",
        //     "cyberpunk",
        //     "valentine",
        //     "halloween",
        //     "garden",
        //     "forest",
        //     "aqua",
        //     "lofi",
        //     "pastel",
        //     "fnatasy",
        //     "wireframe",
        //     "black",
        //     "luxury",
        //     "dracula",
        //     "cmyk",
        //     "autumn",
        //     "business",
        //     "acid",
        //     "lemonade",
        //     "night",
        //     "coffee",
        //     "winter",
        //     "dim",
        //     "nord",
        //     "sunset",
        // ],
    },

    plugins: [daisyui],
};
