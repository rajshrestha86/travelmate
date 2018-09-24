


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
	<h4 class="card-title mt-2">Log In</h4>
</header>
<article class="card-body">
<form action='controller/user_register.php' method='post'>
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
        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
    </div> <!-- form-group// -->      
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Don't have an account? <a href="register.php">Sign Up</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

<br><br>