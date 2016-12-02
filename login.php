<?php 
session_start();
include("include/header.php"); 
$_SESSION["correct"] = 0;
$_SESSION["count"] = 0;
$_SESSION["authenticated"] = "";
?>

	<div class="container">
	<h1>Please login to enjoy our math game</h1>
		<form class="form-horizontal" action="index.php" method="post">
			<div class="form-group">
				<label for="email" class="control-label col-sm-2">Email:</label>
				<div class="col-sm-8">
					<input type="email" name="email" class="form-control"  placeholder="Email"/>
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="control-label col-sm-2">Password:</label>
				<div class="col-sm-8">
					<input type="password" placeholder="Password" name="password" class="form-control" />
				</div>
			</div>

			<div class="col-sm-3 col-sm-offset-4">
				<button type="submit" class="btn btn-primary">Login</button>
			</div>
		</form>
		<?php 
			if(isset($_GET["msg"])){
				echo $_GET["msg"];
			}
		?>
	</div>
		
<?php include("include/footer.php"); ?>
