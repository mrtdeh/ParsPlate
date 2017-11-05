//import router from '../store/index.js'

// import imgPro from '../components/imgPro.vue'
//import vueLoading from 'vue-loading-template'
module.exports = {


	components : {

		imgPro : require('../components/imgPro.vue'),
		
		vueLoading : require('vue-loading-template'),
	},
	
  
	data() {
		return {
			templatesPage : 1,

			givenTemplates : Templates ? Templates : [],

			showLoadMoreButton : true,

			loadMoreLoading : false	,


			loadingForLike : []
		}
	},



	methods : {

		likedStatus(t,i){
			if(this.signedIn)
				return this.loadingForLike[i] ? "fa-heart heart-loading" : t.liked ? "fa-heart liked" : "fa-heart-o"
			else
				return "fa-heart-o"
		},

		likeToggle(t,i){

			if(!this.signedIn){

				this.$modal.show("auth")
				return
			}

			this.$set(this.loadingForLike,i,true)


			setTimeout(()=>{
				this.$http.get("api/likeToggle/" + t.id).then(res=>{

					this.$set(this.loadingForLike,i,false)
					
					if(res.body.status == 1){

						this.givenTemplates[i].likesCount = res.body.likesCount
						this.givenTemplates[i].liked = res.body.liked
					}else{

						this.$modal.show("auth")

					}
				})
			},3000)

		},

		loadMore(el){
			console.log(el)

			$(el).attr("disabled", true)

			this.loadMoreLoading = true

			this.templatesPage++;

			setTimeout(()=>{
				this.$http.get('api/get_more_template',
					{params:{page : this.templatesPage}}).then(res=>{

						console.log(res)

						this.givenTemplates = this.givenTemplates.concat( res.body.templates )

						this.loadMoreLoading = false

						if( !res.body.hasTemplate )
							this.showLoadMoreButton = false;
						else
							$(el).attr("disabled", false)
					})
			},1000)

		}

	}

	


}