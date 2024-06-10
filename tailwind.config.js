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
            "Baumans": ["Baumans", "sans-serif"]
        },
    },
  },
  plugins: [],
}

