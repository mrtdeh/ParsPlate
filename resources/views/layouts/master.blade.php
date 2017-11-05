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
    <meta name="description" content="Html Templates for you">
    <meta name="author" content="Morteza Dehghani">
    <link rel="icon" href="../../favicon.ico">
    <title>Templak.ir</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    @getAppCss()

    @section("endHead")
	@show

</head>

<body>

	<div id="app">



		@include("components.navigation")

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
				تمامی حقوق این سایت متعلق به « Templak.ir » میباشد. 2017 - 2018
			</div>


		</footer>




		{{-- This place all vuejs component that load after document complete --}}


		<modal name="auth" height="auto" width="300px">
			<div id="auth-box" style="padding: 20px 15px;text-align: right;">
				<p style="direction: rtl">لطفا وارد شوید یا اگر ثبت نام نکردید خیلی<strong> راحت </strong> ثبت نام کنید.</p>
				<div class="btn-group">
					<a href="/register" class="btn btn-success">ثبت نام</a>
					<a href="/login" class="btn btn-primary">ورود</a>
				</div>
			</div>
		</modal>





	</div>




	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


	@include("jsVars")
	@getAppScript()


	@section("endBody")
	@show



</body>

</html>