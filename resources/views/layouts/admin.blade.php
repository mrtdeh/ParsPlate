<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

	@section("startHead")
	@show

	<meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="../../favicon.ico">
   
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <link rel="stylesheet" href="/css/panel-style.css">

    @getAppCss()

    @section("endHead")
	@show

</head>

<body>


<div id="app">


	<main>
		
		<div class="container">
			<nav class="pt-3">
				<div class="card">
					
				  <ul class="p-0 nav justify-content-center">
				    <li class="nav-item">
				      <a class="nav-link @yield('dashboard')" href="/panel/dashboard">داشبورد</a>
				    </li>
				    
				    @can("admin")
					    <li class="nav-item">
					      <a class="nav-link @yield('users')" href="/panel/users">کاربران</a>
					    </li>
					@endcan

				    <li class="nav-item">
				      <a class="nav-link @yield('templates')" href="/panel/templates">قالب ها</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link @yield('setting')" href="/panel/setting">تنظیمات</a>
				    </li>
				    <li class="nav-item mr-auto ">
				      <a class="inline-btn bg-primary text-white nav-link " href="/">صفحه اصلی سایت</a>
				      <a class="inline-btn bg-danger text-white nav-link " href="/logout">خروج</a>

				    </li>
					
				  </ul>
					
				</div>
			</nav>
			<div class="pt-3">
				<div class="card p-5">
					
				  <div class="container">

				  		@section("main")
					    @show
					    
				  </div>
					
				</div>
			</div>
		</div>   

	</main>



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