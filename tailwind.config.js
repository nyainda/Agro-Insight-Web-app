const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin');
const Color = require('color');
const forms = require('@tailwindcss/forms'); // Import the forms plugin
const typography = require('@tailwindcss/typography'); // Import the typography plugin

module.exports = {
  darkMode: 'class', // Enable dark mode using class-based approach

  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/laravel/jetstream/**/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1536px',

      },
      colors: {
        transparent: 'transparent',
        white: '#ffffff',
        black: '#000000',
        gray: {
            '50': '#f9fafb',
            '100': '#f4f5f7',
            '200': '#e5e7eb',
            '300': '#d5d6d7',
            '400': '#9e9e9e',
            '500': '#707275',
            '600': '#4c4f52',
            '700': '#24262d',
            '800': '#1a1c23',
            '900': '#121317',
        },
        'cool-gray': {
            '50': '#fbfdfe',
            '100': '#f1f5f9',
            '200': '#e2e8f0',
            '300': '#cfd8e3',
            '400': '#97a6ba',
            '500': '#64748b',
            '600': '#475569',
            '700': '#364152',
            '800': '#27303f',
            '900': '#1a202e',
        },
        red: {
            '50': '#fdf2f2',
            '100': '#fde8e8',
            '200': '#fbd5d5',
            '300': '#f8b4b4',
            '400': '#f98080',
            '500': '#f05252',
            '600': '#e02424',
            '700': '#c81e1e',
            '800': '#9b1c1c',
            '900': '#771d1d',
        },
        orange: {
            '50': '#fff8f1',
            '100': '#feecdc',
            '200': '#fcd9bd',
            '300': '#fdba8c',
            '400': '#ff8a4c',
            '500': '#ff5a1f',
            '600': '#d03801',
            '700': '#b43403',
            '800': '#8a2c0d',
            '900': '#771d1d',
        },
        yellow: {
            '50': '#fdfdea',
            '100': '#fdf6b2',
            '200': '#fce96a',
            '300': '#faca15',
            '400': '#e3a008',
            '500': '#c27803',
            '600': '#9f580a',
            '700': '#8e4b10',
            '800': '#723b13',
            '900': '#633112',
        },
        green: {
            '50': '#f3faf7',
            '100': '#def7ec',
            '200': '#bcf0da',
            '300': '#84e1bc',
            '400': '#31c48d',
            '500': '#0e9f6e',
            '600': '#057a55',
            '700': '#046c4e',
            '800': '#03543f',
            '900': '#014737',
        },
        teal: {
            '50': '#edfafa',
            '100': '#d5f5f6',
            '200': '#afecef',
            '300': '#7edce2',
            '400': '#16bdca',
            '500': '#0694a2',
            '600': '#047481',
            '700': '#036672',
            '800': '#05505c',
            '900': '#014451',
        },
        blue: {
            '50': '#ebf5ff',
            '100': '#e1effe',
            '200': '#c3ddfd',
            '300': '#a4cafe',
            '400': '#76a9fa',
            '500': '#3f83f8',
            '600': '#1c64f2',
            '700': '#1a56db',
            '800': '#1e429f',
            '900': '#233876',
        },
        indigo: {
            '50': '#f0f5ff',
            '100': '#e5edff',
            '200': '#cddbfe',
            '300': '#b4c6fc',
            '400': '#8da2fb',
            '500': '#6875f5',
            '600': '#5850ec',
            '700': '#5145cd',
            '800': '#42389d',
            '900': '#362f78',
        },
        purple: {
            '50': '#f6f5ff',
            '100': '#edebfe',
            '200': '#dcd7fe',
            '300': '#cabffd',
            '400': '#ac94fa',
            '500': '#9061f9',
            '600': '#7e3af2',
            '700': '#6c2bd9',
            '800': '#5521b5',
            '900': '#4a1d96',
        },
        pink: {
            '50': '#fdf2f8',
            '100': '#fce8f3',
            '200': '#fad1e8',
            '300': '#f8b4d9',
            '400': '#f17eb8',
            '500': '#e74694',
            '600': '#d61f69',
            '700': '#bf125d',
            '800': '#99154b',
            '900': '#751a3d',
        },

        // ... add your other color variants here ...
        primary: {
          '50': '#eff6ff',
          '100': '#dbeafe',
          '200': '#bfdbfe',
          '300': '#93c5fd',
          '400': '#60a5fa',
          '500': '#3b82f6',
          '600': '#2563eb',
          '700': '#1d4ed8',
          '800': '#1e40af',
          '900': '#1e3a8a',
          '950': '#172554',

        },
      },
      spacing: {
        px: '1px',
        0: '0',
        0.5: '0.125rem',
        1: '0.25rem',
        1.5: '0.375rem',
        2: '0.5rem',
        2.5: '0.625rem',
        3: '0.75rem',
        3.5: '0.875rem',
        4: '1rem',
        5: '1.25rem',
        6: '1.5rem',
        7: '1.75rem',
        8: '2rem',
        9: '2.25rem',
        10: '2.5rem',
        11: '2.75rem',
        12: '3rem',
        14: '3.5rem',
        16: '4rem',
        20: '5rem',
        24: '6rem',
        28: '7rem',
        32: '8rem',
        36: '9rem',
        40: '10rem',
        44: '11rem',
        48: '12rem',
        52: '13rem',
        56: '14rem',
        60: '15rem',
        64: '16rem',
        72: '18rem',
        80: '20rem',
        96: '24rem',
      },
      fontFamily: {
        'body': [
          'Inter',
          'ui-sans-serif',
          'system-ui',
          '-apple-system',
          'system-ui',
          'Segoe UI',
          'Roboto',
          'Helvetica Neue',
          'Arial',
          'Noto Sans',
          'sans-serif',
          'Apple Color Emoji',
          'Segoe UI Emoji',
          'Segoe UI Symbol',
          'Noto Color Emoji'
        ],
        'sans': [
          'Inter',
          'ui-sans-serif',
          'system-ui',
          '-apple-system',
          'system-ui',
          'Segoe UI',
          'Roboto',
          'Helvetica Neue',
          'Arial',
          'Noto Sans',
          'sans-serif',
          'Apple Color Emoji',
          'Segoe UI Emoji',
          'Segoe UI Symbol',
          'Noto Color Emoji'
        ],
      },
      customForms: (theme) => ({
        default: {
          'input, textarea': {
            '&::placeholder': {
              color: theme('colors.gray.400'),
            },
          },
        },
      }),
    },
  },


  variants: {
    extend: {
      backgroundColor: ['dark', 'dark:hover', 'dark:focus', 'dark:active', 'odd'],
      textColor: ['dark', 'dark:focus-within', 'dark:hover', 'dark:active'],
      placeholderColor: ['dark', 'dark:focus'],
      borderColor: ['dark', 'dark:focus', 'dark:hover'],
      boxShadow: ['dark:focus'],
      opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },
  },

  plugins: [
    forms, // Added the correct forms plugin import
    typography, // Added the correct typography plugin import
    plugin(({ addUtilities, e, theme, variants }) => {
      const newUtilities = {};
      Object.entries(theme('colors')).map(([name, value]) => {
        if (name === 'transparent' || name === 'current' || typeof value === 'string') return;
        const color = value[300] ? value[300] : value;
        const hsla = Color(color).alpha(0.45).hsl().string();
        newUtilities[`.shadow-outline-${name}`] = {
          'box-shadow': `0 0 0 3px ${hsla}`,
        };
      });

      addUtilities(newUtilities, variants('boxShadow'));
    }),
  ],
};
