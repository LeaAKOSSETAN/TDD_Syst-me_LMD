import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    module:exports = {
        content: [
          "./resources/views/**/*.blade.php",
          "./resources/js/**/*.js",
        ],
        theme: {
          extend: {},
        },
        plugins: [],
      },
      
};
