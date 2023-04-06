const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/*.blade.php',
        './resources/views/**/**/*.blade.php',
        './resources/views/**/*.blade.php',
        './resources/scss/app.scss',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                ash: colors.trueGray,
                orange: colors.orange,
            },
            backgroundImage: {
                'gradient-1' : 'linear-gradient(to right, #434343 0%, #000 50%, #434343 100%)',
                'gradient-2': 'linear-gradient(to left, #155799, #159957)',
                'gradient-3': 'linear-gradient(20deg, #5e009f 0%, #095886 60%, #095886 100%)',
                'gradient-active' : 'linear-gradient(20deg, #003757 0%, #003757 40%, #4f0058 100%)'
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled']
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
