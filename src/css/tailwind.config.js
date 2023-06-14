/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./**/*.{html,js,php}"],
	theme: {
		container: {
		  center: true,
		  screens: {
			'xs': '480px',
			'sm': '640px',
			'md': '768px',
			'lg': '1024px',
			'xl': '1280px',
			'2xl': '1440px',
		  },
		},
		fontFamily: {
		  inter: ["Inter", "serif"],
		},
		extend: {
		  backgroundImage: {
			// 'banner': 'url("images/banner-bg-image.svg")',
			// 'home-slide-1': 'url("images/Slider (1).jpg")',
			// 'home-slide-2': 'url("images/Slider (2).jpg")',
			// 'home-slide-3': 'url("images/Slider (3).jpg")',
			// 'home-slide-4': 'url("images/Slider (4).jpg")',
			// 'founder-interview-bg': 'url("images/founder-interview-bg.jpg")',
			// 'double-quoute-blue': 'url("images/double-quote-blue.svg")',
		  },
		  colors: {
			'raisin-black': '#212121',
			'cornflower-blue': '#679BEE',
			'pale-cornflower-blue': '#B3CDF6',
			'cod-gray': '#111111 ',
			'sandy-tan': '#F8DBB9',
			'dove-gray': '#717171',
			'spanish-gray': '#999999',
			'lilac': '#D0A7C5',
			'charleston-green': '#2A2A2A',
			'white': '#FFFFFF',
			'outer-space': '#474747',
			'concrete': '#F3F3F3',
			'dim-gray': '#6A6A6A',
			'dim-gray-pale': '#6C6C6C',
			'field-gray': '#868686',
			'nobel': '#B4B4B4',
			'quick-silver': '#A6A6A6',
			'alto' : '#DADADA',
			'mine-shaft' : '#323232',
			'gray' : '#838383',
			'tundora' : '#444444',
			'silver' : '#C0C0C0',
			'alabaster' : '#FCFCFC',
			'mercury' : '#E9E9E9',
			'casper' : '#afbbd3',
			'stack' : '#8D8D8D',
			'spindle' : '#b4cff0',
			'abbey' : '#4c4e50',
			'black-haze': '#f7f7f7',
			'piano': '#292929',
			'wheat': '#f8dbba',
			'blossom': '#d4afca'
		  },
		  content: {
			'arrow-top-right-black': 'url("images/top-right-arrow-black.svg")',
			'arrow-top-right-white': 'url("images/top-right-arrow-white.svg")',
		  },
		  fontFamily: {
			'body': ['"Inter"', 'ui-sans-serif', 'sans-serif'],
			'menu': ['Inter', 'ui-sans-serif', 'sans-serif']
		  },
		  fontSize: {
			'lev-title-2xl': ['45px', '60px'],
			'lev-title-xl': ['40px', '56px'],
			'lev-title-lg': ['36px', '48px'],
			'lev-title-2m': ['34px', '38px'],
			'lev-title-m': ['30px', '36px'],
			'lev-title-sm': ['26px', '32px'],
			'lev-title-2sm': ['24px', '32px'],
			'lev-title-xs': ['22px', '30px'],
			'lev-title': ['20px', '28px'],
			'lev-lg': ['20px', '32px'],
			'lev-m': ['18px', '22px'],
			'lev-s': ['16px', '20px'],
			'lev-xs': ['14px', '16px'],
			'lev-2xs': ['12px', '16px'],
		  },
		  screens: {
			'xs': '480px',
			'3xl': '1600px',
		  }
		}
	  },
	plugins: [
		require("@tailwindcss/forms"),
		require("@tailwindcss/typography"),
	],
};