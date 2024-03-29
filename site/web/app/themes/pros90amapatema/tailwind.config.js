module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}', './node_modules/flowbite/**/*.js'],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        pros90orange: '#F78F22',
        pros90darkorange: '#F45F2D',
        pros90blue: '#17274F',
        bluedays: '#2A5E80',
        pros90lightblue: '#17274F',
        pros90lighterblue: '#1246AC',
        pros90gray: '#F4F4F4',
      },
      borderRadius: {
        extraLarge: '12rem'
      },
      fontFamily: {
        probold: ["source_sans_probold", "sans-serif"],
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/typography'),
    require('tailwindcss-debug-screens')
  ],
};
