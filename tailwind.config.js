/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/index.php",
    "./public/ejercicio.php",
    "./public/registro.php",
    "./public/alimentos.php",
    "./public/login.php",
    "./public/principal.php",
    "./public/registroAlimentos.php",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        fuentesec: ["Dancing Script", "cursive"],
        fuenteTechani: ["Open Sans", "sans-serif"],
        fuenteEslogan: ["Open Sans", "sans - serif"],
      },
      colors: {
        azul: "#277BC0",
        azulSecundario: "#4DBDEB",
        azulBorde: "#277BC0",
        amarillo: "#FFE08C",
        fondoGris: "#F6F6F6",
      },
    },
  },

};
