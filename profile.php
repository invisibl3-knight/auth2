<?php include 'inc/header.php';?>

<div class="paenl panel-default">
	<div class="panel-heading">
		   <h2>User Profile <span class ="pull-right"><a href="index.php" class="btn btn-primary">Back</a></span></h2>
	</div>

	<div class="panel-body">
		<div style="max-width:600px; margin:0 auto">
		   <form action="" method="post">

		   		<div class="form-group">
		   			<label for="name"> Your Name </label>
		   			<input type="text" id="name" name="name" class="form-control" value="Your name" />
		   		</div>

		   		<div class="form-group">
		   			<label for="username"> Username </label>
		   			<input type="text" id="username" name="username" class="form-control" value="Username" />
		   		</div>

		   		<div class="form-group">
		   			<label for="email"> Email Address</label>
		   			<input type="text" id="email" name="email" class="form-control" value="Email address" />
		   		</div>

		   		<button type="submit" name="update" class="btn btn-success">Update</button>
		   </form>
		</div>
	</div>
</div>

<?php include 'inc/footer.php';?>
