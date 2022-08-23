module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}', './node_modules/flowbite/**/*.js'],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        pros90orange: '#F78F22',
        pros90blue: '#17274F',
        pros90lightblue: '#17274F',
        pros90gray: '#F4F4F4',
      },
      borderRadius: {
        extraLarge: '12rem'
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('@tailwindcss/typography'),
    require('tailwindcss-debug-screens')
  ],
};
