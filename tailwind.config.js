/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.{html,js}',
    './**/**/*.{html,js}',
    "./flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        "orange-50" : "#fff7ed",
        "orange-100" : "#ffedd5",
        "orange-200" : "#fed7aa",
        "orange-300" : "#fdba74",
        "orange-400" : "#fb923c",
        "orange-500" : "#f97316",
        "orange-600" : "#ea580c",
        "orange-700" : "#c2410c",
        "orange-800" : "#9a3412",
        "orange-900" : "#7c2d12",
        "orange-950" : "#431407",
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif']
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
]
}

