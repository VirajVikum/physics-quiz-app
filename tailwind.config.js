import defaultTheme from 'tailwindcss/defaultTheme';
import colors from 'tailwindcss/colors'; // Import colors
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    presets: [
        // require("./vendor/wireui/wireui/tailwind.config.js"),
        require("./vendor/power-components/livewire-powergrid/tailwind.config.js"),
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                "pg-primary": colors.gray, // Use imported colors
                darkBlue: '#070F2B',
                grayishBlue: '#1B1A55',
                lightBlue: '#535C91',
                lightGray: '#9290C3',
            },
            maxWidth: {
                '8xl': '90rem', // Example of custom size (1440px)
                '9xl': '100rem', // Example of larger size (1600px)
            },
        },
    },

    plugins: [forms,
        require('tailwindcss-animated')
    ],
};
