
 <nav class="navbar text-center navbar-toggleable-md navbar-light bg-faded " >

	<div class="row">
		<div class="col-md-4 text-right">
			<div class="userbar pr-3 pt-4">
				@if(Auth::check())
					<div class="dropdown">
					<a href="#" class="text-white dropdown-toggle" id="dropdownMenuButton" 
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-user fa-lg"></i> 
						<span class="px-2">{{ Auth::user()->username }}</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="dropdownMenuButton">
					  <a class="dropdown-item" href="#">
					  	{{ Auth::user()->name }}
					  	<span>مشاهده پروفایل</span>
					  </a>
					  <a class="dropdown-item" href="#">تغییر مشخصات</a>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="/logout">خروج</a>
					</div>
				</div>
			@else
				<span class="text-white">
					<a href="/login" class="text-white">ورود</a> / 
					<a href="/register" class="text-white">ثبت نام</a>
				</span>
				@endif
				
			</div>
		</div>
		<div class="col-md-4">
			<h1 class="navbar-brand "><a  href="/" class="brand">Templak</a></h1>
		</div>
		<div class="col-md-4 text-left">
			
		</div>
	</div>
  
</nav>

