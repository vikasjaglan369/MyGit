module.exports = {
    parserOptions: {
        ecmaVersion: 2021,
        sourceType: 'module',
        ecmaFeatures: {
            jsx: true,
        },
    },
    plugins: ['prettier'],
    extends: ['plugin:prettier/recommended'],
    rules: {
        'prettier/prettier': 'error',
    },
};

