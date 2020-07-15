module.exports = {
    purge: [
        './resources/views/**/*blade.php',
    ],
    theme: {
        fontFamily: {
            'display': ['Bitter'],

        },
        extend: {
            colors: {
                bgBlue: '#f4f9fc',
                textBlue: '#0f1b61',
                highlightYellow: '#f4e04d',
                highlightBlue: '#8fd3f4',
                highlightTurquoise: '#A2F7B6',
                highlightPurple: '#D631E9'
            }
        },
    },
    variants: {},
    plugins: [],
}
