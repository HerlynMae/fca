/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}"],
  theme: {
    extend: {
      fontFamily:{
        poppins: "Poppins",
      }
    },
    colors:{
      light: "#ffffff",
      dark: "#000",
      gray:"#f2f2f2",
      yellow: "#daa625",
      green: "#018542",
      lightgreen: "#28941e",
      fb: "#3b5897",
      fbhover: "#1b8ee5",
    }
  },
  plugins: [],
}

