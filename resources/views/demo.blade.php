@extends("layouts/empty")


@section("main")

<div class="spand open-btn">
	<i id="spand-open" class="fa fa-chevron-down fa-2x"></i>
</div>

<nav id="demoNavBar">

	<div class=" spand close-button">
		<i id="spand-close" class="fa fa-chevron-up fa-2x"></i>
	</div>
	  
	<div class="container">
		<ul class="right">
	
			<li>{{ $title }}</li>
		</ul>

		<ul class="center devices">
			<li><i class="fa fa-desktop fa-2x active" id="desktop"></i></li>
			<li><i class="fa fa-tablet fa-2x" id="tablet"></i></li>
			<li><i class="fa fa-mobile fa-2x" id="mobile"></i></li>
		</ul>

		<ul class="left">
			<li><a href="/download/{{ $hashid }}" class="btn btn-success">دانلود رایگان</a></li>
			<li><a href="/template/{{ $hashid }}/{{ $kebabTitle }}" class="btn btn-success">بازگشت</a></li>
		</ul>
	</div>

</nav>

<div id="demoFrame">
	<iframe src="http://localhost/fileServer/demo/test/index.html" ></iframe>
</div>

@endsection


@section("endHead")

<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/demo-style.css">

<script src="/js/jquery.min.js"></script>
<script src="/js/demo-script.js"></script>


@endsection