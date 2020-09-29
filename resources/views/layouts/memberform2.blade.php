<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
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
	<h4 class="card-title mt-3 text-center">Form</h4>
	
	<!-- <form> -->

	{!! Form::open(['url' => '/form2','files'=>'true']) !!}
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-file"></i> </span>
		 </div>
        <input name="filepath" class="form-control" placeholder="First name" type="file">
    </div> <!-- form-group// -->

                                     
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> SUBMIT  </button>
    </div> <!-- form-group// -->  
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