<!DOCTYPE html>
<html>
<head>
	<?php include "imports.inc.php"; ?>
	<?php include "../config/config.php"; ?>
	<title><?php echo $company_name; ?> | Employee Management</title>
	
</head>
<body>

  <div class="jumbotron">
  	<center>
    <h1><?php echo $company_name; ?></h1>
    <p>Employee management</p>
    </center>
  </div>

<div class="col-md-4"></div>

<div class="col-md-4">
	
	<center>
		
		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>

	</center>

</div>

<div class="col-md-4"></div>
</body>
</html>