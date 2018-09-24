


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br>
<br>
<br>

<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="login.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
	<h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<form action='controller/user_register.php' method='post'>
	<div class="form-row">
		<div class="col form-group">
			<label>First name </label>   
		  	<input type="text" name='f_name' class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Last name</label>
		  	<input type="text" name='l_name' class="form-control" placeholder=" ">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email </label>
		<input type="email" name='email' class="form-control" placeholder="">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
    <div class="form-group">
		<label>Username</label>
		<input type="text" name='username' class="form-control" placeholder="">
		<small class="form-text text-muted">Use a unique username.</small>
	</div> <!-- form-group end.// -->
	
    <div class="form-group">
		<label>Password</label>
		<input type="password" name='password' class="form-control" placeholder="">
	</div> <!-- form-group end.// -->

    <div class="form-group">
		<label>Address</label>
		<input type="address" name='address' class="form-control" placeholder="">
	</div> <!-- form-group end.// -->

	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Contact</label>
		  <input type="tel" name='contact'  class="form-control">
		</div> <!-- form-group end.// -->
	
	</div> <!-- form-row.// -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="login.php">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

<br><br>