/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/index.php",
    "./public/ejercicio.php",
    "./public/registro.php",
    "./public/alimentos.php",
    "./public/login.php",
    "./public/principal.php",
    "./public/registroCorreo.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        fuentesec: ["Dancing Script", "cursive"],
        fuenteTechani: ["Open Sans", "sans-serif"],
      },
      colors: {
        azul: "#277BC0",
        azulSecundario: "#4DBDEB",
        amarillo: "#FFE08C",
        azulFondo: "#18578B",
      },
    },
  },
};
