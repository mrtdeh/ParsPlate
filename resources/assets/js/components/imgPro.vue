<template>

	<div class="img-pro">
		
	

		<img v-show="!loading" ref="el" :class="{noEffect}" 
		:alt="imgAlt" :src="src" :style="imgStyles">
	
		<div v-if="loading" :style="loadingContainer">

			<vue-loading type="spin" color="#025aa5" :size="{ width: '40px', height: '40px' }"></vue-loading>

		</div>
		

	</div>

</template>

<script>
	
import vueLoading from 'vue-loading-template';

export default {

	components : {

		vueLoading 
	},

	props : ["src", "alt", "width", "height"],

	data(){
		return{	
			assets : '/images/' ,

			imgAlt : '',

			noEffect : true,

			loading : true,

			loadingContainer : {

				padding: "108px 0",
	    		background: "#f7f7f7",
			},

			imgStyles : {

				width : "100%",

				height : '255px',
			}
		}
	},

	mounted(){

		var el = this.$refs.el
		var self = this


		if(this.height){

			this.imgStyles.height = this.height + "px"
			this.loadingContainer.padding = (this.height/2 - 20) + "px 0"
		}


		if(this.width){

			this.imgStyles.width = this.width + "px"
		}



		if(this.alt)
			this.imgAlt = this.alt

		if(this.src != undefined){

			 el.onload = function(){
			 	setTimeout(()=>{

				 	self.loading = false
				 	$(el)
					  .css('opacity', 0)
					  .animate({ opacity: 1 }, 1000)

			 	},1000)
			 }

			 el.onerror = function (e) { 

				//el.src = self.assets + "not-found-image.png";
			 }

			// var img = new Image();
			// img.src = this.src;

			// img.onload = function() {

			// 	setTimeout(()=>{

			// 		el.src = self.src;
			// 		$(el)
			// 		  .css('opacity', 0)
			// 		  .animate({ opacity: 1 }, 1000)

			// 		self.noEffect = false

			// 	},1000)

			// }.bind(el);

			// img.onerror = function (e) { 

			// 	el.src = self.assets + "not-found-image.png";
			// }
		}


	}
	
}



</script>


<style scoped>


svg path,
svg rect{
  fill: #5f6bb3;
  display: inline-block;

}


.noEffect{
	border: 0 !important;
	box-shadow: none !important;
}



</style>