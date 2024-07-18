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
        'karla' : ['Karla', 'sans-serif'],
      },
      height: {
        '420' : '420px',
        '110' : '110px',
        '361' : '361px',
      },
      width: {
        '458' : '458px',
      },
      margin: {
        '430' : '430px',
        '540' : '540'
      },
      inset: {
        '540' : '540px'
      },
      letterSpacing: {
        'wider' : '7px',
      },
      minHeight: {
        '70vh': '70vh',
        '80vh': '80vh',
        '90vh': '90vh',
      },
      colors: {
        'gray-footer' : '#323232',
        'gray-card' : '#494949'
      },
      boxShadow: {
        '3xl': '0 0 10px 5px rgba(0, 0, 0, 0.3)',
        '4xl' : '0 -5px 10px rgba(0, 0, 0, 0.3)'
      },
      screens: {
        'desktop': '1440px',
        'xs' : '760px',
      }
    },
  },
  plugins: [],
}

