
module.exports = {


	components : {

		
	},
	
  
	data() {
		return {
			templates
		}
	},


	created() {
		console.log('Templates');
		
	},


	methods : {

		removeTemplate (t) {
		
			alert(t.title + " has deleted")
		}

	}

	


}