
module.exports = {


	components : {

		imgPro : require('../components/imgPro.vue'),
		
		vueLoading : require('vue-loading-template'),
	},
	
  
	data() {
		return {
			

			template ,

			loadingForLike : false,
		}
	},



	methods : {

		likedStatus(){
			if(this.signedIn)
				return this.loadingForLike ? "fa-heart heart-loading" : this.template.liked ? "fa-heart liked" : "fa-heart-o"
			else
				return "fa-heart-o"
		},

		likeToggle(){

			if(!this.signedIn){

				this.$modal.show("auth")
				return
			}

			//this.$set(this.loadingForLike,i,true)
			this.loadingForLike = true;

			setTimeout(()=>{
				this.$http.get("/api/likeToggle/" + this.template.id).then(res=>{

					
					this.loadingForLike = false;

					if(res.body.status == 1){

						this.template.likesCount = res.body.likesCount
						this.template.liked = res.body.liked
					}else{

						this.$modal.show("auth")

					}
				})
			},3000)

		},

		

	}

	


}