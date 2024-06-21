/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        "Light-Blue": "#7776ff",
        "Fucsia": "#ae2cf1",
        "Saturn-Metallic": "#8e9eab",
        "Cloud-White": "#eef2f3",
        "Caviar": "#2a2c30",
        "Cursed-Black": "#121214",
      },
      screens: {
        "S1": { max: "1920px" },
        // => @media (max-width: 1920px) { ... }
        "S1.5": { max: "1790px" },
        // => @media (max-width: 1790px) { ... }
        "S1.7": { max: "1686px" },
        // => @media (max-width: 1686px) { ... }
        "S1.8": { max: "1645px" },
        // => @media (max-width: 1645px) { ... }
        "S2": { max: "1536px" },
        // => @media (max-width: 1536px) { ... }
        "S2.9": { max: "1500px" },
        // => @media (max-width: 1500px) { ... }
        "S2.5": { max: "1430px" },
        // => @media (max-width: 1430px) { ... }
        "S3": { max: "1360px" },
        // => @media (max-width: 1360px) { ... }
        "S4": { max: "1280px" },
        // => @media (max-width: 1280px) { ... }
        "S5": { max: "1024px" },
        // => @media (max-width: 1024px) { ... }
        "S6": { max: "768px" },
        // => @media (max-width: 768px) { ... }
      },
    },
  },

  plugins: [require("@tailwindcss/forms")],
};
