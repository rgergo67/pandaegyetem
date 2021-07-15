const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  mode: 'jit',
  purge: [
      './storage/framework/views/*.php',
      './resources/*.blade.php',
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        typography: {
            DEFAULT: {
                css: {
                    a: {
                        'text-decoration': 'none',
                        '&:hover': {
                            'text-decoration': 'none',
                        },
                    },
                },
            },
            'lg': {
                css: {
                    h1: {
                        lineHeight: '1.2',
                    },
                },
            },
            'xl': {
                css: {
                    h1: {
                        lineHeight: '1.2',
                    },
                },
            },
        },
        fontFamily: {
            sans: ['Nunito sans', ...defaultTheme.fontFamily.sans],
        },
        boxShadow: {
            link: '0 -4px 0 0 rgba(217, 119, 6, 0.5) inset',
            'link-hover': '0 -4px 0 0 rgba(217, 119, 6, 1) inset',
        },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
      require('@tailwindcss/forms'),
      require('@tailwindcss/typography')
  ],
}
