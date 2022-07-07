module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}', './node_modules/flowbite/**/*.js'],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        pros90orange: '#F6913A',
        pros90blue: '#001d3d',
        pros90lightblue: '#263C76',
        pros90gray: '#F9F9F9',
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
