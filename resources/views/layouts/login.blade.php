<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Login</h4>
	
	
	<!-- <form> -->
    {!! Form::open(['url' => '/','action' => 'MemberContoller']) !!}
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		
    	<input name="phone" class="form-control" placeholder="Phone number" type="number" value="{{ old('phone') }}">
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Password" type="password" name="password">
    </div> <!-- form-group// -->
                                        
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Don't have an account? <a href="/register">Register</a> </p> 

   
    {!! Form::close() !!}  

    @if(count($errors) > 0)
                                
		@foreach($errors->all() as $err)

			{{$err}}<br>

		@endforeach

	@endif                                                                
<!-- </form> -->

</article>
</div> 

</div> 

</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>