/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'frost-gradient': 'linear-gradient(90deg, #000428 0%, #004e92 100%)',
      },
    },
  },
  plugins: [

  ],
}

