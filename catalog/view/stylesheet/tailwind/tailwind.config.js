
const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

module.exports = {
  // mode: 'jit',
  // purge: [
  //   '../../template/**/*.twig',
  //   '../../javascript/**/*.js',    
  // ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      ...colors,
      "current": "current",
      "transparent": "transparent",
    },    
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },      
    },
  },
  // variants: [
  //   "responsive",
  //   "group-hover",
  //   "focus-within",
  //   "first",
  //   "last",
  //   "odd",
  //   "even",
  //   "hover",
  //   "focus",
  //   "active",
  //   "visited",
  //   "disabled",
  // ],
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
