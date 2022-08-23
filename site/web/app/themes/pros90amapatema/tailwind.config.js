// Modify your tailwind.config.js
const disabledCss = {
	'code::before': false,
	'code::after': false,
	'blockquote p:first-of-type::before': false,
	'blockquote p:last-of-type::after': false,
	pre: false,
	code: false,
	'pre code': false,
	'code::before': false,
	'code::after': false,
}

module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}', './node_modules/flowbite/**/*.js'],
  theme: {
    container: {
      center: true,
    },
    extend: {
      typography: {
				DEFAULT: { css: disabledCss },
				sm: { css: disabledCss },
				lg: { css: disabledCss },
				xl: { css: disabledCss },
				'2xl': { css: disabledCss },
			},
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
