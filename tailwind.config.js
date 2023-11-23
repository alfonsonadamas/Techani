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
    "./public/registroCorreo.php",
    "./public/expediente.php",
    "./public/registroAlarmas.php",
    "./public/analisis.php",
    "./public/prueba.php",
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
        fondoGris: "#F6F6F6",
        azulFondo: "#18578B",
      },
    },
  },
};
