module.exports = {
    content: [
        './src/**/*.{html, css, js}',
        './dist/js/*.js',
        './*.html',
        './node_modules/tw-elements/dist/js/**/*.js'
    ],
    theme: {
        "fontFamily": {
            "poppins": ["Poppins", "sans-serif"],
            "playfair": ["Playfair Display", "serif"],
        },
        extend: {
            colors: {
                primary: '#00b085',
                'primary-dark': '#157245',
                secondary: '#269ccc',
            },
        },
    },
    safelist: [
        {
            pattern: /noUi-.+/,
        },
    ],
    plugins: [],
}
