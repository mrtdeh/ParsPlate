
@extends("layouts.empty")

@section("endHead")

	<link rel="stylesheet" href="/css/login-style.css">

	<title>Register - ParsPlate.ir</title>

@endsection


@section("main")

	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>ثبت نام</h1>
			</div>

			<style>
				.login-field {
					text-align: right;
					padding-right: 10px
				}
			</style>

			<div class="login-form">

				<form action="register" method="post">
					{{ csrf_field() }}

					<div class="control-group">
						<input type="text" class="login-field"  placeholder="نام و نام خانوادگی"  name="name" >
					</div>

					
					<div class="control-group">
						<input type="text" class="login-field"  placeholder="ایمیل"  name="email">
					</div>

					
					<div class="control-group">
						<input type="text" class="login-field"  placeholder="گزرواژه"  name="password">
					</div>

					
					<div class="control-group">
						<input type="text" class="login-field"  placeholder="تکرار گزرواژه"  name="password_confirmation">
					</div>

					
					<input type="submit" value="ثبت نام" class="btn btn-primary">
					
					<a class="login-link" href="/login">قبلا ثبت نام کردم / ورود</a>
				</form>
@foreach($errors as $err)

	{{ $err }} <br>

@endforeach
			</div>
		</div>
	</div>

@endsection