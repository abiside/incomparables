const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors : {
                yellow: {
                    50: '#FEFAF4',
                    100: '#FEF5E8',
                    200: '#FCE6C7',
                    300: '#FBD7A5',
                    400: '#F7B961',
                    500: '#F49B1D',
                    600: '#DC8C1A',
                    700: '#925D11',
                    800: '#6E460D',
                    900: '#492F09',
                },
            },
            boxShadow: {
                lg: '0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
            }
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [require('@tailwindcss/ui')],
};
