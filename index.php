<?php
include("include/header.php"); 
session_start(); 
extract($_POST);

if($_SESSION["authenticated"]!="A"){
	if($email=="a@a.a" && $password=="aaa"){
			$_SESSION["authenticated"]="A";
		} else if($email="" || $password==""){
			header("Location: login.php");
			die();
		} else{
			$msg = "<p style='color: red;'>Invalid login credentials.</p>";
			header("Location: login.php?msg=$msg");
			die();
		}
}

if(isset($answer)) {
    if($answer==$result){
        $_SESSION["correct"]++;
        $msg="<p style='color:green;'>Correct</p>";
    } else{
        $msg ="<p style='color:red;'>INCORRECT, $num1 $operator $num2 is $result.</p>";
    }
    $_SESSION["count"]++;
}
if((isset($answer) && !is_numeric($answer)) || !isset($answer)){
    $msg ="<p style='color:red;'>You must enter a number for your answer.</p>";
    }
	
	$num1=rand(0,20);
	$num2=rand(0,20);
	$operator=rand(0,1);

if($operator == 1){
    $operator = '+';
    $result = $num1+$num2;
}
else{
    $operator = '-';
    $result = $num1-$num2;
}
	
	
	

?>
		<div class="container">
		<div class="col-xs-12">
			<h1>Math Game</h1>
		</div>
		<div class="col-xs-12">
			<a href="logout.php" class="btn btn-default">Logout</a>
		</div>
		
		<div class="row">
			<div class="col-xs-2 col-sm-offset-3">
				<?php echo $num1; ?>
			</div>
			  <div class="col-xs-2">
				<?php echo $operator; ?>
			  </div>
			  <div class="col-xs-2">
				<?php echo $num2; ?>
			  </div>
			</div>
	
		<form class="form-horizontal" action="index.php" method="Post">
      <div class="form-group">
        <div class="col-sm-4 col-sm-offset-3">
          <input type="text" placeholder="Enter answer" name="answer" class="form-control" />
        </div>
      </div>

      <div class="col-sm-12">
        <input type="submit" class="col-sm-offset-3" value="submit" />
      </div>
	  
      <hr/>
	<?php
		echo "<input type='hidden' name='num1' value='$num1'/>";
		echo "<input type='hidden' name='num2' value='$num2'/>";
		echo "<input type='hidden' name='result' value='$result'/>";
		echo "<input type='hidden' name='operator' value='$operator'/>";

	?>
        <div class="col-sm-12">
          <div class="col-sm-offset-3">
            Score:
            <?php echo $_SESSION["correct"] . "/" . $_SESSION["count"]; ?>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="col-sm-offset-3">
            <?php echo $msg; ?>
          </div>
        </div>
    </form>
  </div>
		

<?php include("include/footer.php"); ?>