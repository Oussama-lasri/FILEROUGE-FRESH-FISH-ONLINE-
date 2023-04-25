/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors:{
        'myblue': '#0076D4'
      },
      backgroundImage: {
        'home': "url('./src/assets/images/home.png')",
        'joinSection': "url('./src/assets/images/7440314 1.png')",
      },
      height: {
        '100,':'100%',
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}