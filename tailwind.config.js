module.exports = {
    content: [
        "./src/**/*.{html,js}",
        "./resources/**/*.blade.php"
    ],
    theme: {
        extend: {
            backgroundImage: theme => ({
                'top-bg': "url('../../imgs/topbg.png')",
                'hero-bg': "url('../../imgs/wave.png')",
                'hero-dummy': "url('../../imgs/herobg2.png')",
                'hero-bgwaves': "url('../../imgs/hero-waves.png')",
                'cost-bg': "url('../../imgs/costbg.png')",
                'getStart-bg': "url('../../imgs/justClickbg.svg')",
                'girlimg': "url('../../imgs/tm-girl.jpg')",
                'wavesbg': "url('../../imgs/waves.png')",
            }),
            colors: {
                'primary-one': '#099A48', //green
                'primary-two': '#F3771F', //orange
            },
            animation: {
                wiggle: 'beat 0.50s ease-in-out infinite alternate',
                'bounce': 'bounce 1.25s infinite',
                'waving-hand': 'wave 4s linear infinite',
            },
            keyframes: {
                beat: {
                    'to': { transform: 'scale(1.2)' },
                },
                bounce: {
                    '0%, 100%': {
                        transform: 'translateY(-10%)',
                    },
                    '50%': {
                        transform: 'translateY(0)',
                    },
                },
                'wave': {
                    '0%': { transform: 'rotate(0.0deg)' },
                    '10%': { transform: 'rotate(14deg)' },
                    '20%': { transform: 'rotate(-8deg)' },
                    '30%': { transform: 'rotate(14deg)' },
                    '40%': { transform: 'rotate(-4deg)' },
                    '50%': { transform: 'rotate(10.0deg)' },
                    '60%': { transform: 'rotate(0.0deg)' },
                    '100%': { transform: 'rotate(0.0deg)' },
                },
            },
            screens: {
                '3xl': '2000px',
                // => @media (min-width: 2000px) { ... }
            },
        }
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('tailwindcss-animatecss')({
              classes: ['animate__animated', 'animate__fadeIn', 'animate__bounceIn', 'animate__lightSpeedOut'],
              settings: {
                animatedSpeed: 1000,
                heartBeatSpeed: 1000,
                hingeSpeed: 2000,
                bounceInSpeed: 750,
                bounceOutSpeed: 750,
                animationDelaySpeed: 1000
              },
              variants: ['responsive', 'hover', 'reduced-motion'],
            }),
      ]
}
