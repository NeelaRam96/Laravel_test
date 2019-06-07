

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{URL::asset('css/custom.css')}}" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
	

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Register</h1>
     




	            </div>      
				<div class="main-login main-center">
					@if(!isset($data))
					<form class="form-horizontal" method="post" action="{{route('form.store')}}">
					@else
					<form class="form-horizontal" method="post" action="{{route('form.update',$data['id'])}}">
						{!! method_field('patch') !!}
					@endif
						{{ csrf_field() }}
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="firstname" id="firstname" value="{{isset($data) ? $data['firstname'] : ""}}" placeholder="Enter your Name" {{isset($data['data']) ? "disabled" : ""}}/>
									</div>
									@if ($errors->has('firstname'))
									    <div class="error">{{ $errors->first('firstname') }}</div>
									@endif
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Lastname</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lastname" id="lastname" value="{{isset($data) ? $data['lastname'] : ""}}" placeholder="Enter your Username" {{isset($data['data']) ? "disabled" : ""}}/>
									</div>
									@if ($errors->has('lastname'))
									    <div class="error">{{ $errors->first('lastname') }}</div>
									@endif
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email" value="{{isset($data) ? $data['email'] : ""}}" placeholder="Enter your Email" {{isset($data['data']) ? "disabled" : ""}}/>
									</div>
									@if ($errors->has('email'))
									    <div class="error">{{ $errors->first('email') }}</div>
									@endif
							</div>
						</div>

						<div class="form-group">
							<label for="profile" class="cols-sm-2 control-label">Your Profile Image</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-image fa" aria-hidden="true"></i></span>
									<input type="file" class="form-control" name="profile" id="profile" value="{{isset($data) ? $data['email'] : ""}}" placeholder="choose prolie" {{isset($data['data']) ? "disabled" : ""}}/>	
								</div>
							</div>
						</div>

						<!--div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
								@if ($errors->has('password'))
								    <div class="error">{{ $errors->first('password') }}</div>
								@endif
							</div>
						</div-->
						@if(!isset($data['data']))
						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">{{isset($data) ? "Update" : "Register"}}</button>
						</div>	
						@endif
					</form>
				</div>
			</div>
		</div>

	</body>
</html>
