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
    },

    plugins: [daisyui],
};
