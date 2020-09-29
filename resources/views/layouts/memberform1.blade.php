<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<style type="text/css">
	input[type="number"]::-webkit-inner-spin-button{
   		 display: none;
	}
</style>
<body>
<div class="container">

<nav class="navbar navbar-light bg-light">
<a href="#" class="btn  mr-sm-2"></a>
  <a href="{{ url('/logout') }}" class="btn  mr-sm-2">Logout</a>
</nav>
</div>

<div class="container">

<div class="card bg-light">
<article class="card-body mx-auto" >
	<h4 class="card-title mt-3 text-center">Form 1</h4>
	
	<!-- <form> -->
	{!! Form::open(['url' => '/form1','action' => 'MemberForm1Controller@store']) !!}
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="first_name" class="form-control" placeholder="First name" type="text" value="{{ old('first_name') }}">
    </div> <!-- form-group// -->

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="last_name" class="form-control" placeholder="Last name" type="text" value="{{ old('last_name') }}">
    </div> <!-- form-group// -->

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-indent"></i> </span>
		 </div>
        <input name="aadhar_no" class="form-control" placeholder="Aadhar No" type="text" value="{{ old('aadhar_no') }}">
    </div> <!-- form-group// -->
   

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control" name="cast" require>
			<option selected="" disabled> Select Cast type</option>
			<option>SC</option>
			<option>ST</option>
			<option>OBC</option>
		</select>
	</div>

		<!-- Group of default radios - option 2 -->
	<div class="">
		<label>Gender</label>
	</div>
	<div class="form-group input-group">
		<div class="custom-control custom-radio">
		<input type="radio" class="custom-control-input" id="male" name="gender" value="male" checked>
		<label class="custom-control-label" for="male">Male</label>
		</div>
	
		<div class="custom-control custom-radio ml-2">
			<input type="radio" class="custom-control-input" id="female" name="gender" value="female">
			<label class="custom-control-label" for="female">Female</label>
		</div>
	</div>

	<div class="">
		<label>Skills</label>
	</div>
	<div class="form-group input-group">
		<div class="custom-control custom-checkbox mr-2">
			<input type="checkbox" class="custom-control-input" id="Laravel" name="skills[]" value="Laravel">
			<label class="custom-control-label" for="Laravel">Laravel</label>
		</div>
		<div class="custom-control custom-checkbox mr-2">
			<input type="checkbox" class="custom-control-input" id="nodeJs" name="skills[]" value="nodeJs">
			<label class="custom-control-label" for="nodeJs">nodeJs</label>
		</div>

		<div class="custom-control custom-checkbox mr-2">
			<input type="checkbox" class="custom-control-input" id="reactJs" name="skills[]" value="reactJs">
			<label class="custom-control-label" for="reactJs">reactJs</label>
		</div>

		<div class="custom-control custom-checkbox mr-2">
			<input type="checkbox" class="custom-control-input" id="jquery" name="skills[]" value="jquery">
			<label class="custom-control-label" for="jquery">jquery</label>
		</div>
		<div class="custom-control custom-checkbox mr-2">
			<input type="checkbox" class="custom-control-input" id="Photoshop" name="skills[]" value="Photoshop">
			<label class="custom-control-label" for="Photoshop">Photoshop</label>
		</div>
		<div class="custom-control custom-checkbox mr-2">
			<input type="checkbox" class="custom-control-input" id="video" name="skills[]" value="Video Edit">
			<label class="custom-control-label" for="video">Video Edit</label>
		</div>
	</div>
                                     
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> NEXT  </button>
    </div> <!-- form-group// --> 
	<input name="isdoneform1" type="hidden" value="1"> 
	{!! Form::close() !!}
	   
	@if(count($errors) > 0)
                                
		@foreach($errors->all() as $err)

			{{$err}}<br>

		@endforeach

	@endif 
                                                                 
<!-- </form> -->


</div> <!-- card.// -->

</div> 
<!--container end.//-->


</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>