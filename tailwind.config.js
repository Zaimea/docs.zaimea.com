import defaultTheme from 'tailwindcss/defaultTheme';
import colors from 'tailwindcss/colors';
import forms from '@tailwindcss/forms';

const accentColors = {
    zaimea: '#6875f5',
};

export default {
  content: [
      'app/Markdown/*.php',
      'resources/views/**/*.blade.php',
      'resources/js/**/*.js',
  ],
  darkMode: 'class',
  theme: {
    extend: {
        fontSize: {
          '6.5xl': ['4rem', { lineHeight: '1' }],
        },
        maxWidth: {
            xxs: '16rem',
        },
        spacing: {
            224: '56rem',
        },
        keyframes: {
            cube: {
                '50%': { transform: 'translateY(1rem)' },
            },
        },
        animation: {
            cube: 'cube 6s ease-in-out infinite',
        }
    },
    boxShadow: {
        none: '0 0 0 0 rgba(0, 0, 0, 0)',
        sm: `0 10px 15px -8px rgba(9, 9, 16, .1)`,
        lg: '0 20px 30px -16px rgba(9, 9, 16, .2)',
        xl: '0 10px 20px 0 rgba(9, 9, 16, .15)',
    },
    colors: {
        ...{
            transparent: 'transparent',
            current: 'currentColor',
            black: '#000',
            white: '#fff',
            gray: {
                900: '#232323',
                800: '#222222',
                700: '#565454',
                600: '#777777',
                500: '#93939e',
                400: '#B5B5BD',
                300: '#d7d7dc',
                200: '#e7e8f2',
                100: '#f5f5fa',
                50: '#fbfbfd',
            },
            dark: {
                900: '#0C0D12',
                800: '#12141C',
                700: '#171923',
                600: '#252A37',
                500: '#394056',
            },
            red: {
                900: '#981d15',
                800: '#ca473f',
                700: '#ec0e00',
                600: '#EB4432',
                500: '#F9322C',
                400: '#f87171',
                300: '#fca5a5',
                200: '#fecaca',
                100: '#fee2e2',
            },
            orange: {
                600: '#f49d37',
            },
            blue: {
                800: '#055472',
                600: '#0782b1',
                500: '#0AB2F5',
            },
            green: colors.green,
            purple: {
                600: '#8338ec',
            },
        },
        ...accentColors,
    },
    fontFamily: {
        sans: ['scandia-web', ...defaultTheme.fontFamily.sans],
        mono: ['source-code-pro', ...defaultTheme.fontFamily.mono],
    },
  },

  safelist: [
    {
        pattern: new RegExp(`bg-(${Object.keys(accentColors).join('|')})`),
    }
  ],
  plugins: [
    forms({
        strategy: 'class',
    })
  ],
}
