/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './theme/**/*.php',
    './theme/**/*.html',
    './theme/assets/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#0073aa',
        'primary-dark': '#005a87',
        secondary: '#667eea',
        'secondary-dark': '#764ba2',
        navy: '#0d1b4b',
        'navy-light': '#1a2d6b',
      },
      fontFamily: {
        sans: [
          '-apple-system',
          'BlinkMacSystemFont',
          '"Segoe UI"',
          'Roboto',
          'Oxygen-Sans',
          'Ubuntu',
          'Cantarell',
          '"Helvetica Neue"',
          'sans-serif',
        ],
      },
      spacing: {
        '128': '32rem',
        '144': '36rem',
      },
      fontSize: {
        xs: ['0.75rem', { lineHeight: '1rem' }],
        sm: ['0.875rem', { lineHeight: '1.25rem' }],
        base: ['1rem', { lineHeight: '1.5rem' }],
        lg: ['1.125rem', { lineHeight: '1.75rem' }],
        xl: ['1.25rem', { lineHeight: '1.75rem' }],
        '2xl': ['1.5rem', { lineHeight: '2rem' }],
        '3xl': ['1.875rem', { lineHeight: '2.25rem' }],
        '4xl': ['2.25rem', { lineHeight: '2.5rem' }],
      },
      lineHeight: {
        tight: '1.2',
        normal: '1.6',
      },
    },
  },
  plugins: [],
}
