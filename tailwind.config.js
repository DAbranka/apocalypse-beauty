const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                aclonica: ['Aclonica', 'sans-serif'],
                chewy:['Chewy', 'cursive'],
            },
        },
        screens: {
            'xs': {'min': '244px', 'max': '367px'},
            'sm': {'min': '368px', 'max': '767px'},
            'md': {'min': '768px', 'max': '1023px'},
            'lg': {'min': '1024px', 'max': '1279px'},
        }
    },

    plugins: [require('@tailwindcss/forms')],
};
