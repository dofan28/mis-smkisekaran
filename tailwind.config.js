/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                merriweather: ['Merriweather', 'serif'],
                jakarta: ['"Plus Jakarta Sans"'],
            },
          
            colors: {
                greenMain: '#333333',
            },
            lineClamp: {
                20: '20',
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
}
