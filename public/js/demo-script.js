$(function() {

	$("#desktop").click(function(){

		$(".devices i").removeClass("active")
		$(this).addClass("active")
	
	})

	$("#tablet").click(function(){

		$(".devices i").removeClass("active")
		$(this).addClass("active")
	})

	$("#mobile").click(function(){

		$(".devices i").removeClass("active")
		$(this).addClass("active")
	})



	$("#spand-close").click(function(){

		$("#spand-open").show()
		$("#demoNavBar").hide()
	})
	$("#spand-open").click(function(){

			$("#demoNavBar").show()
		$("#spand-open").hide()
	})

});