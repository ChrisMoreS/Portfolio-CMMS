/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        'oxfordBlue' : '#041C32',
        'prussianBlue' : '#04293A',
        'indigoDye' : '#064663',
        'sunray' : '#ECB365',
        'oranYCrayola' : '#FFD369',
        'cultured' : '#EEEEEE',
      },
      fontFamily: {
        'Roboto': ['', '', '', '']
      }
    },
  },
  plugins: [],
}