import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Instrument Sans', ...defaultTheme.fontFamily.sans],
                mono: ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
            },
            colors: {
                accent:  'var(--color-accent)',
                surface: 'var(--color-surface)',
                'surface-raised': 'var(--color-surface-raised)',
                border:  'var(--color-border)',
                muted:   'var(--color-muted)',
                text:    'var(--color-text)',
                bg:      'var(--color-bg)',
            },
        },
    },

    plugins: [forms],
};
