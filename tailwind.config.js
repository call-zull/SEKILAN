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
        poppins: ["Poppins"],
        sans: ["OpenSans"],
        kanit: ["Kanit"],
        bebas: ["Bebas Neue"],
        inter: ["Inter"],
      },
      colors: {
        hijauPrimary: "#2EB1AA",
        intiHijau: "#07C1B6",
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
  important: true,
}

