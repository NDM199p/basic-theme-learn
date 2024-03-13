/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,js}", "./**/*.{php,js}"],
  theme: {
    extend: {
      container: {
        padding: {
          xl: "5rem",
          "2xl": "6rem",
        },
      },
    },
  },
  plugins: [],
};
