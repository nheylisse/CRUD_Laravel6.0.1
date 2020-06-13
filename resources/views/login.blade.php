<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form One</title>
	<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">


</head>
<body>

<ul>
  <li><a class="active" href="/">
  <img src="/pph.ico" width="30" height="40" class="d-inline-block align-top" alt=""> 
  TEAM IT PORTAL</a></li>
</ul>


<br><br><br><br><br>
<div class="signup-form">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-primary">
				
			  	<div class="panel-heading ">
				  <form action="{{url('post-login')}}" method="POST" id="logForm">
				  {{ csrf_field() }}
				  <h4 class="text-center">TEAM IT PORTAL</h4>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form">
                    <fieldset>
			    	  	<div class="form-group">
							<!--<input class="form-control" placeholder="Spark ID" name="email" type="text">-->
							<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Spark ID" required="required">
							
						</div>
						@if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                @endif  

			    		<div class="form-group">
							
						<!--<input class="form-control" placeholder="Password" name="password" type="password" value="">-->
						<input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required="required">
					</div>
					@if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                @endif  

			    		<input class="btn btn-lg btn-primary btn-block" type="submit" value="LOG IN">
			    	</fieldset>
					  </form>
					  <div class="text-center">Already have an account? <a href="{{url('registration')}}">Sign Up here</a>.</div>
					  <p class="text-center text-muted">© 2020-2021</p>
				</div>
				
			</div>
		</div>
	</div>
</div>


<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</body>
</html>