const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*.css',
        './frontend/**/*.js',
        './*.html',
    ],

    theme: {
        screens: {
            'xs': '475px',
            ...defaultTheme.screens,
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                "poppins": ["Poppins", "sans-serif"],
            },
            colors: {
                'primary': '#21a7d0',
                "secondary": "#6AC99D",
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        // require('@tailwindcss/forms'),
        // require('@tailwindcss/typography'),
        require('@tailwindcss/line-clamp')
    ],
};
