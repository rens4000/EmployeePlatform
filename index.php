<?php 
	include "includes/header.inc.php";
	if(file_exists("config/config.php")) {
?>
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
			    	<form method="POST">
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
<?php
	} else {
?>
<div class="jumbotron">
  	<center>
    <h1>Welcome to the Employee Management</h1>
    <p>The application isn't configured yet!</p>
    </center>
  </div>

<div class="col-md-4"></div>

<div class="col-md-4">
	
	<center>
		
		<div class="alert alert-danger fade in">
			<strong>ERROR</strong> the config hasn't been configured yet!</br>
		This is how to fix it: </br>
		1. Go to: config/config1.php<br>
		2. Change the config, so that it suits you<br>
		3. Change the config's name to: config.php<br>
		4. <strong>Profit</strong>
		</div>

	</center>

</div>

<div class="col-md-4"></div>
<?php } ?>
</body>
</html>
