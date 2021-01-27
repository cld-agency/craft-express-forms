module.exports = {
  parser: 'babel-eslint',
  parserOptions: {
    ecmaVersion: 6,
    sourceType: 'module',
  },
  rules: {
    semi: 'error',
    quotes: [2, 'single'],
  },
  env: {
    browser: true,
    node: false,
    es6: true,
  },
};
