@extends("layouts.admin")

@section("templates","active")


@section("main")

	

	<form action="/panel/templates" method="post"  enctype="multipart/form-data">

		{{ csrf_field() }}


		<div class="form-group">
		
			
		
			<input type="text" placeholder="عنوان" class="form-control"  name="title">
		
		</div>
		

		<div class="form-group">
		
			
		
			<textarea placeholder="توضیحات" class="form-control" name="desc"></textarea>
		
		</div>
		

		<div class="form-group">
		
			<label for="aaa">تصویر قالب :</label>
		
			<input type="file" name="cover" id="aaa">
		
		</div>
		

		@include("errors")
			

	  	<button type="submit" class="btn btn-success">ثبت</button>
	  	
	</form>




	<div class="templates">
		<table class="table">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>عنوان قالب</th>
		      <th>زمان ایجاد</th>
		      <th>دسته بندی</th>
		      <th>عملیات</th>
		    </tr>
		  </thead>
		  <tbody>

		  	
		    <tr v-for="(t,i) in templates">
		      <th scope="row">@{{ i+1 }}</th>
		      <td>@{{ t.title }}</td>
		      <td>@{{ t.humanDate }}</td>
		      <td>Otto</td>
		      <td>

		      		<div class="btn-group">
		      			<button class="btn btn-danger" @click="removeTemplate(t)">
		      				<i class="fa fa-trash-o" aria-hidden="true"></i>
		      			</button>
		      		</div>

		      </td>

		    </tr>
		

		  </tbody>
		</table>
	</div>


@endsection


