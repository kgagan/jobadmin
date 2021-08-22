<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>  
	    <div class="container">
	    	<div  class="row m-5">
	    		<div  class="col-4 offset-4">
            <h4> user register form</h4>
            <hr>
        		     <form action="{{url('/create')}}" method="post">
                  {{csrf_field()}}

                    <div class="results">
                  @if(Session::get('success'))
                   <div class="alert alert-success">{{ Session::get('success')}}</div>
                  @endif
                  @if(Session::get('fail'))
                   <div class="alert alert-danger">{{ Session::get('fail')}}</div>
                  @endif
                     </div>
                  <div class="form-group">
                    <label for="">name</label>
                    <input type="text" class="form-control" name="name" placeholder=" enter name">
                    <span class="text-danger">@error ('name')  {{ $message   }} @enderror</span>
                    </div>
        			      <div class="form-group">
        						<label for="">email</label>
        						<input type="text" class="form-control" name="email" placeholder=" enter email">
                    <span class="text-danger">@error ('email')  {{ $message   }} @enderror</span>
        			      </div>
        			      <div class="form-group">
        						<label for="">password</label>
        						<input type="text" class="form-control" name="password" placeholder=" enter password">
                    <span class="text-danger">@error ('password')  {{ $message   }} @enderror</span>
        			      </div>
						  <div class="form-group">
        						<label for="">Moblie Number</label>
        						<input type="text" class="form-control" name="mobile" placeholder=" enter number">
                    <span class="text-danger">@error ('mobile')  {{ $message   }} @enderror</span>
        			      </div>
						  <div class="form-group">
        						<label for="">Address</label>
        						<input type="text" class="form-control" name="address" placeholder=" enter address">
                    <span class="text-danger">@error ('address')  {{ $message   }} @enderror</span>
        			      </div>
						   <div class="form-group">
        						<label for="">city</label>
        						<input type="text" class="form-control" name="city" placeholder=" enter city">
                    <span class="text-danger">@error ('address')  {{ $message   }} @enderror</span>
        			      </div>
						  <div class="form-group">
        						<label for="">state</label>
        						<input type="text" class="form-control" name="state" placeholder=" enter state">
                    <span class="text-danger">@error ('state')  {{ $message   }} @enderror</span>
        			      </div>
						  <div class="form-group">
        						<label for="">country</label>
        						<input type="text" class="form-control" name="country" placeholder=" enter country">
                    <span class="text-danger">@error ('country')  {{ $message   }} @enderror</span>
        			      </div>
						  <div class="form-group">
        						<label for="">postcode</label>
        						<input type="text" class="form-control" name="postcode" placeholder=" enter postcode">
                    <span class="text-danger">@error ('postcode')  {{ $message   }} @enderror</span>
        			      </div>
						  <div class="form-group">
        						<label for="">dob</label>
        						<input type="text" class="form-control" name="dob" placeholder=" enter dob">
                    <span class="text-danger">@error ('dob')  {{ $message   }} @enderror</span>
        			      </div>
						  <div class="form-group">
        						<label for="">qualification</label>
        						<input type="text" class="form-control" name="qualification" placeholder=" enter qualification">
                    <span class="text-danger">@error ('qualification')  {{ $message   }} @enderror</span>
        			      </div>
						   <div class="form-group">
        						<label for="">image</label>
        						<input type="file" class="form-control" name="file" >
                    
        			      </div>
						  <div class="form-group">
						  <label for="">status</label><br>
        						<input type="radio" name="status" value="experience" required="" />experience<br/>
                        <input type="radio" name="status" value="fresher" required="" />fresher
                    
        			      </div>
        			      <div class="form-group">
        			      	<button type="submit" class=" btn btn-block btn-primary" >sign up</button>
        			      </div>
        			      <a href="login">I already have account/login</a>
						  
        		   	</form>
        		  </div>
        	</div>
        </div>
</body>
</html>