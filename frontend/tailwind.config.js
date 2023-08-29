/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin')

export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
        // Extended by Abdul Alim- CSE 15th
        colors: {
            faculty: {
                DEFAULT: 'var(--faculty-color)',
                20: 'var(--faculty-color-20)',
                40: 'var(--faculty-color-40)',
                70: 'var(--faculty-color-70)',
            },

            bus: {
                DEFAULT: 'var(--bus-color)',
                5: 'var(--bus-color-5)',
                10: 'var(--bus-color-10)',
                20: 'var(--bus-color-20)',
                45: 'var(--bus-color-45)',
                70: 'var(--bus-color-70)',
            },
        },

        fontFamily: {
            'title': ['var(--title-font)', 'var(--fallback-font)'],

            'stylish': ['var(--stylish-font)', 'var(--fallback-font)'],

            'normal': ['var(--normal-font)', 'var(--fallback-font)'],

            'para': ['var(--para-font)', 'var(--fallback-font)'],

            'fallback': ['var(--fallback-font)', ...defaultTheme.fontFamily.sans],
        },

        fontSize: {
            'heading': 'var(--heading-size)',
            'subheading': 'var(--sub-heading-size)',
            'normal': 'var(--para-size)',
          },

        screens: {

        },
    },
  },

  plugins: [
    require('flowbite/plugin'),

    plugin(function ({ addBase, addComponents, addUtilities, theme }) {
      addBase({

      })
      addComponents({

      })
      addUtilities({

      })
    })
  ]
}

