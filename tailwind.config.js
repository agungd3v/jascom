module.exports = {
    future: {
        // removeDeprecatedGapUtilities: true,
        // purgeLayersByDefault: true,
    },
    purge: [],
    theme: {
        extend: {},
        // container: {
        //     padding: {
        //         default: '1rem',
        //         sm: '2rem',
        //         lg: '3rem',
        //         xl: '4rem'
        //     }
        // }
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
    ],
}
