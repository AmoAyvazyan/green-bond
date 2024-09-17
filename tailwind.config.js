const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './app/View/Components/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/**/**/*.blade.php',
        './resources/views/**/**/**/*.blade.php',
        './resources/**/*.js',
    ],
    safelist: [
        {
            pattern: /(bg|text|border)-(gray|green)-(500|700)/,
            variants: ['active', 'hover', 'focus'],
        },
        {
            pattern: /ring-(gray|red|green|blue|yellow)-200/,
            variants: ['focus'],
        },
        {
            pattern: /text-gray-*/,
        },
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Segoi UI', ...defaultTheme.fontFamily.sans],
                display: ['Segoi UI', ...defaultTheme.fontFamily.sans],
                mono: ['Segoi UI', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                black: '#000000',
                white: '#ffffff',
                light: '#F8F8F8',
                gray: {
                    '50': '#F6F6F6',
                    '100': '#f0f0f0',
                    '200': '#EBEBEB',
                    '300': '#CBCBCB',
                    '400': '#aaaaaa',
                    '500': '#666666',
                    '600': '#5c5353',
                    '700': '#4d3939',
                    '800': '#3d2525',
                    '900': '#2e1515',
                    '950': '#1f0909'
                },
                red: {
                    '50': '#fff9f2',
                    '100': '#fcefe3',
                    '200': '#fcd8bd',
                    '300': '#fab996',
                    '400': '#f56c49',
                    '500': '#f00f00',
                    '600': '#d90e00',
                    '700': '#b30c00',
                    '800': '#9B3342',
                    '900': '#6b0500',
                    '950': '#450300'
                },
                yellow: {
                    '50': '#fffdf7',
                    '100': '#fffaed',
                    '200': '#fcefd2',
                    '300': '#fae1b6',
                    '400': '#f7c481',
                    '500': '#f29d4e',
                    '600': '#db8840',
                    '700': '#b5652b',
                    '800': '#91491c',
                    '900': '#6e300f',
                    '950': '#471b06'
                },
                green: {
                    '50': '#f0fcf8',
                    '100': '#e1f7f0',
                    '200': '#b4edd8',
                    '300': '#8be0bd',
                    '400': '#45cc86',
                    '500': '#0ab64f',
                    '600': '#08a344',
                    '700': '#058733',
                    '800': '#036e25',
                    '900': '#025218',
                    '950': '#01360e'
                },
                blue: {
                    '50': '#f2fbfc',
                    '100': '#e8f8fa',
                    '200': '#c7ecf2',
                    '300': '#a7dde8',
                    '400': '#6cc3d9',
                    '500': '#39a5c7',
                    '600': '#2e8fb3',
                    '700': '#216d94',
                    '800': '#145278',
                    '900': '#0c3659',
                    '950': '#05203b'
                },
            },
            spacing: {
                '7.5':'1.875rem',
                '12.5': '3.125rem',
                '13': '3.25rem',
                '22.5': '5.625rem',
            },
            borderRadius: {
                '4xl': '2.25rem',//36px
                '5xl': '3.125rem',//50px
            },
            container: {
                center: true,
                padding: '1rem',
            },
            keyframes: {
                shake: {
                    '10%, 90%': {
                        transform: 'translate3d(-1px, 0, 0)',
                    },
                    '20%, 80%': {
                        transform: 'translate3d(2px, 0, 0)',
                    },
                    '30%, 50%, 70%': {
                        transform: 'translate3d(-4px, 0, 0)',
                    },
                    '40%, 60%': {
                        transform: 'translate3d(4px, 0, 0)',
                    },
                },
            },
        },
        screens: {
            'xs': '410px',
            'sm': '768px',
            'md': '1024px',
            'lg': '1280px',
            'hd': '1366px',
            'xl': '1536px',
            'fhd': '1920px',
            '2k': '2560px',
            '4k': '3840px',
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
