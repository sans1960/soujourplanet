module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",

  ],
  theme: {
    extend: {
        fontFamily:{
            'open-sans':['"Open Sans"','sans-serif'],
            'patua-one':['"Patua One"','cursive']
          }
    },

  },
  plugins: [

]

}
