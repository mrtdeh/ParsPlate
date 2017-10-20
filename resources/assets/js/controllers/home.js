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

			loadMoreLoading : false	
		}
	},


	created() {
		console.log('Home Area');
		
	},


	methods : {

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