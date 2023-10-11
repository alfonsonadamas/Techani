/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: [
  //   "./public/index.php",
  //   "./public/ejercicio.php",
  //   "./public/registro.php",
  //   "./public/login.php",

  // ],
  content: [
    "./public/**/*.php",
    "./public/**/**/*.php",
    "./public/**/**/*.js",
    "./public/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        fuentesec: ["Dancing Script", "cursive"],
        fuenteTechani: ["Open Sans", "sans-serif"],
        fuenteEslogan: ["Open Sans", "sans - serif"],
      },
      colors: {
        azul:"#277BC0",
      },
    },
  },
};

