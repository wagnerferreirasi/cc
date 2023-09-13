/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        fontFamily: {
            sans: ['"Open Sans"', 'sans-serif'],
            serif: ['"Open Sans"', 'serif'],
            mono: ['"Open Sans"', 'monospace'],
            display: ['"Open Sans"', 'sans-serif'],
            body: ['"Open Sans"', 'sans-serif'],
        },
        extend: {},
    },
    plugins: [],
}

