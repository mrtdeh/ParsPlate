
@extends("layouts.empty")

@section("endHead")

	<link rel="stylesheet" href="/css/login-style.css">

	<title>Login - ParsPlate.ir</title>

@endsection


@section("main")

	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

			<div class="login-form">

				<form action="login" method="post">
					{{ csrf_field() }}

					<div class="control-group">
					<input type="text" class="login-field" value="" placeholder="username" id="login-name" name="email">
					<label class="login-field-icon fui-user" for="login-name"></label>
					</div>

					<div class="control-group">
					<input type="password" class="login-field" value="" placeholder="password" id="login-pass" name="password">
					<label class="login-field-icon fui-lock" for="login-pass"></label>
					</div>

					
					<div class="control-group">
					<input type="submit" class="btn btn-primary btn-large btn-block" value="login">
					</div>

					
					<a class="login-link" href="#">Lost your password?</a>
				</form>

			</div>
		</div>
	</div>

@endsection