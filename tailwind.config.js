/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/index.php",
    "./public/ejercicio.php",
    "./public/registro.php",
    "./public/alimentos.php",
    "./public/login.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        fuentesec: ["Dancing Script", "cursive"],
      },
    },
  },
};
