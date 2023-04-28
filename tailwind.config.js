/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    fontFamily: {
      sans: ['"Poppins"', "sans-serif"],
    },
    extend: {},
  },
  plugins: [require("flowbite/plugin")],
};
