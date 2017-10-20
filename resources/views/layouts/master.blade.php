<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

	@section("startHead")
	@show

	<meta name="csrf-token" content="{{ csrf_token() }}">


    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head
        content must come *after* these tags -->
    <meta name="description" content="RTL theme for last version of bootstrap 4">
    <meta name="author" content="Mohammad Sharifi">
    <link rel="icon" href="../../favicon.ico">
    <title>ParsPlate.ir</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    @section("endHead")
	@show

</head>

<body>


	<div id="app">

		 <nav class="navbar text-center navbar-toggleable-md navbar-light bg-faded " >
		  <!-- <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button> -->
		  <h1 class="navbar-brand "><a  href="#" class="brand">ParsPlate</a></h1>

		<!--   <a id="main-menu-button" href="#">
		    <i class="fa fa-bars fa-2x"  aria-hidden="true"></i>
		  </a>

		  <a id="signin-button" href="#">
		    +98 933 513 1705
		  
		  </a> -->

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <!-- <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Link</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#">Disabled</a>
		      </li>
		    </ul> -->
		  </div>
		</nav>



		    <!-- Main jumbotron for a primary marketing message or call to action
		        -->
		    


		@section("jumbotron")
		@show



		<main>
		   
		    @section("main")
		    @show

		</main>



		<footer>

			<div>
				تمامی حقوق این سایت متعلق به « ParsPlate.ir » میباشد. 2017 - 2018
			</div>

			<!-- <div id="features">
				
				<div class="row">
					<div class="col-md-3">
						<div class="feature">1</div>
					</div>
					<div class="col-md-3">
						<div class="feature">2</div>
					</div>
					<div class="col-md-3">
						<div class="feature">3</div>
					</div>
					<div class="col-md-3">
						<div class="feature">4</div>
					</div>
				</div>

			</div>

			<div id="footer-content">
					
				
				<div class="row">
					
					<div class="col-md-4">
						
						1

					</div>
					<div class="col-md-4">

						2
						
					</div>
					<div class="col-md-4">
						
						3

					</div>

				</div>
				<div class="row">
					
					<ol class="product-techs">
						<li><img src="images/html.png" alt="html5"></li>
						<li><img src="images/css.png" alt="css3"></li>
						<li><img src="images/javascript.png" alt="Javascript"></li>
						<li><img src="images/bootstrap.png" alt="bootstrap-4"></li>
					</ol>

				</div>

			</div>
			 -->

		</footer>

	</div>




	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


	@section("endBody")
	@show



</body>

</html>