/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#365486",
        "primary-hover": "#223b63",
        secondary: "#7FC7D9",
        info: "#DCF2F1",
        black: "#0F1035",
        danger: "#FF0505",
        "danger-hover": "#b70000",
      }
    },
  },
  plugins: [],
}