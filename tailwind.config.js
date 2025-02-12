/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/views/**/*.blade.php"],
    theme: {
        container: {
            center: true,
            padding: "2rem",
        },
        extend: {
            colors: {
                'shade-white': '#FFFFFF',
                'shade-black': '#000000',
                "neutral-50": "#F9FAFB",
                "neutral-110": "#F5F6F8",
                "neutral-200": "#EBEDF1",
                "neutral-300": "#E1E4EA",
                "neutral-400": "#D2D7E0",
                "neutral-500": "#96989C",
                "neutral-600": "#717275",
                "neutral-700": "#4B4C4E",
                "neutral-800": "#262627",
                "neutral-900": "#0D0D0D",
                "primary-50": "#CFE6EF",
                "primary-100": "#AFD6E5",
                "primary-200": "#87C2D8",
                "primary-300": "#5FADCB",
                "primary-400": "#3799BE",
                "primary-500": "#0F84B1",
                "primary-600": "#0D6E94",
                "primary-700": "#0A5876",
                "primary-800": "#084259",
                "primary-900": "#052C3B",
                "secondary-50": "#CEF2F9",
                "secondary-100": "#AEEAF4",
                "secondary-200": "#85DFEF",
                "secondary-300": "#5DD5EA",
                "secondary-400": "#34CBE4",
                "secondary-500": "#0CC0DF",
                "secondary-600": "#0AA0BA",
                "secondary-700": "#088095",
                "secondary-800": "#066070",
                "secondary-900": "#04404A",
                "success-50": "#EDFBE9",
                "success-100": "#DBF8D3",
                "success-200": "#B7F0A8",
                "success-300": "#94E97C",
                "success-400": "#70E250",
                "success-500": "#4CDB24",
                "success-600": "#45C521",
                "success-700": "#3DAF1D",
                "success-800": "#2E8316",
                "success-900": "#1E570F",
                "error-50": "#FBEAE9",
                "error-100": "#F8D5D3",
                "error-200": "#F1ABA7",
                "error-300": "#EA817B",
                "error-400": "#E25750",
                "error-500": "#DB2D24",
                "error-600": "#C52920",
                "error-700": "#AF241D",
                "error-800": "#841B15",
                "error-900": "#58120E",
                "additional-color1": "#FFDCB4",
                "additional-color2": "#FCA544",
                "green-custom": "#25D366",
            },
            fontFamily: {
                poppins: ["Poppins"],
            },
            fontSize: {
                headline1: "96px",
                headline2: "64px",
                headline3: "48px",
                headline4: "32px",
                headline5: "24px",
                headline6: "20px",
                body1: "16px",
                body2: "14px",
                caption: "12px",
                overview: "10px",
                additional1: "26px",
            },
            objectPosition: {
                "left-good": "-20rem center",
            },
            transitionDelay: {
                100: "1000ms",
                200: "2000ms",
                300: "3000ms",
            },
            lineHeight: {
                "extra-loose": "3",
                12: "3rem",
                "very-loose": "3.75",
            },
            objectPosition: {
                "custom-1": "0rem -4rem",
                "custom-2": "4rem 8rem",
                "custom-3": "10rem 5rem",
            },
            screens: {
                "sm-landscape": "480px", // Custom untuk smartphone kecil dalam mode landscape
                tablet: "640px",
                laptop: "1024px",
                desktop: "1280px",
            },
            animation: {
                "slow-bounce": "slow-bounce 2s infinite", // Animasi bounce dengan durasi 2 detik
                "veryslow-bounce": "veryslow-bounce 5s infinite", // Animasi bounce dengan durasi 2 detik
                "custom-pulse": "customPulse 5s ease-out infinite", // Durasi lebih lama
                fadeOutIn: "fadeOutIn 8s infinite",
            },
            keyframes: {
                "slow-bounce": {
                    "0%, 100%": {
                        transform: "translateY(-10%)",
                        animationTimingFunction: "cubic-bezier(0.8, 0, 1, 1)",
                    },
                    "50%": {
                        transform: "translateY(0)",
                        animationTimingFunction: "cubic-bezier(0, 0, 0.2, 1)",
                    },
                },
                "veryslow-bounce": {
                    "0%, 100%": {
                        transform: "translateY(-2%)",
                        animationTimingFunction: "cubic-bezier(0.8, 0, 1, 1)",
                    },
                    "50%": {
                        transform: "translateY(0)",
                        animationTimingFunction: "cubic-bezier(0, 0, 0.2, 1)",
                    },
                },
                customPulse: {
                    "0%": { opacity: 1 }, // Mulai dengan penuh
                    "50%": { opacity: 0.65 }, // Fade out lebih lama
                    "75%": { opacity: 1 }, // Tahan di opacity 0
                    "100%": { opacity: 1 }, // Kembali fade-in setelah delay
                },
                fadeOutIn: {
                    "0%": { opacity: 0 },
                    "20%": { opacity: 0 },
                    "40%": { opacity: 1 },
                    "60%": { opacity: 1 },
                    "80%": { opacity: 0 },
                    "100%": { opacity: 0 },
                },
            },
        },
    },
    plugins: [],
};
