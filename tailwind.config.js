const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            strokeWidth: {
              '3': '3',
              '4': '4',
            },
            transitionProperty: {
              'width': 'width',
              'height': 'height',
            },
            screens: {
              'md': {'max': '1023px'},
            },
            left: {
              '1/5' : '20%',
              '2/5' : '40%',
              '3/5' : '60%',
              '4/5' : '80%',
            },
        },
    },

    variants: {
      fill: ['hover', 'focus'], // this line does the trick
    },

    plugins: [require('@tailwindcss/forms')],
};
