/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors:{
        'myblue': '#0076D4'
      },
      backgroundImage: {
        'home': "url('./src/assets/images/home.png')",
      },
      height: {
        '100,':'100%',
      }
    },
  },
  plugins: [],
}