<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="container">


<nav class="navbar navbar-light bg-light">
<a href="#" class="btn  mr-sm-2"></a>
  <a href="{{ url('/logout') }}" class="btn  mr-sm-2">Logout</a>
</nav>
</div>


<div class="container">
	
		<div class="col-md-offset-2 col-md-12 col-lg-offset-3 col-lg-12 card">
    	 <div class="well profile ">
            <div class="col-sm-12 ">
                <div class="col-xs-12 col-sm-12 ">
                    <h2>{{$memberDetail->first_name}} {{$memberDetail->last_name}}</h2>
                    <p><strong>Gender: </strong> {{$memberDetail->gender}} </p>
                    <p><strong>Phone: </strong> {{$memberAcc->phone}} </p>
                    <p><strong>Aadhar: </strong> {{$memberDetail->aadhar_no}} </p>
                    <p><strong>Cast: </strong> {{$memberDetail->cast}} </p>
                    <p><strong>Skills: </strong> {{$memberDetail->skills}} </p>
                   
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                    <img src="images/{{$memberDetail->filepath}}" alt="" class="rounded-circle img-responsive" height="200">
                        
                    </figure>
                </div>
            </div>            
            
    	                 
		</div>
	</div>
</div> 
</body>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</html>