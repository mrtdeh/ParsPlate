
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


 

 //import Vue from 'vue'

import vueResource from 'vue-resource'

import VModal from 'vue-js-modal'

Vue.use(VModal)
// import vueCookie from 'vue-cookie'
// import JDate from 'jalali-date'
//import store from './store'

require("./functions.js")

// Vue.use(vueCookie)
Vue.use(vueResource)
Vue.http.options.emulateJSON = true;
Vue.http.options.emulateHTTP = true;


var page;

try{

  page = require('./controllers/'+ ControllerName.dashToCamelCase() +'.js')

}catch(err) {

  page = {}
}


new Vue({

  el: '#app',

  //store,

  mixins : [ page ],

  data() { 
    return {
      signedIn
    }
  },
  
  created(){
   console.log(ControllerName)
  },

  mounted(){

    setTimeout(()=>{
      document.getElementsByTagName("body")[0].style.visibility = "visible"
    },500)


    setInterval(()=>{

      this.$http.get("/api/checkLogin").then(res=>{
        
        if(res.body.status == 1)
          
          this.signedIn = true
        
        else

          this.signedIn = false

      })

    },3000)


  },


})

