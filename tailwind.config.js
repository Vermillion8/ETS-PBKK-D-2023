/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./resources/**/*.vue", "./node_modules/flowbite/**/*.js", ],
  theme: {
      extend: {},
      container: {
        center: true,
      }
  },
  plugins: [
    require('flowbite/plugin')
  ],
};
