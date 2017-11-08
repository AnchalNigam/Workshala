<?phpsession_start();
include "function.php";
include "connect.php";
if(isset($_SESSION['Email'])){
url('dash.php');


}
$res=register($con,$mail);


?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Workshala-India's Largest Workshop Organizer</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body>  <nav class="navbar navbar-default navbar-fixed-top" >
 <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"> WORKSHALA</span></a>    <div id="my" class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
       <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
</div>
	
</div>
</nav><br/><div class="jumbotron" style="background-image:url('css/reg.jpg')">
   <div class="container-fluid">

  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
	   <h2 class="animated pulse infinite text-center" style="font-family:impact;color:white;font-size:50px"><small>BE A PART OF </small><span class="glyphicon glyphicon-star-empty" style="color:#379683"></span>
	   <strong> WORKSHALA........... <strong><span class="glyphicon glyphicon-star-empty" style="color:#379683"></span></h2>
	   <h2 class="text-center" style="font-family:vivaldi;color:white"><strong>One More step..............</strong></h2>
	</div>
	
  </div>
  
  </div>
  </div><hr><br/><br/><br/><?php
echo "<h3 style='font-family:impact' class='text-danger text-center'><span class='glyphicon glyphicon-asterisk' style='color:#379683'></span><span class='glyphicon glyphicon-asterisk' style='color:#379683'></span>$res<span class='glyphicon glyphicon-asterisk' style='color:#379683'></span><span class='glyphicon glyphicon-asterisk' style='color:#379683'></span></h3>";


?><br/><br/><br/><br/><br/><div class="container">   <div class="row">      <div class="col-lg-7 col-lg-offset-3 thumbnail text-center">              <h1 style="font-family:vivaldi" class="text-primary text-center"><strong>Become a part of Workshala.......</strong></h1>               <h4 style="font-family:garamond" class="text-success text-center">Just Register Yourself.......</h4><br/>            <form class="text-center" method="POST" action="register.php" enctype="multipart/form-data">             <label> Name *: </label><br/>
<input type="text" name="name" class="inputFields" Placeholder="Name" required /><br><br/>

<label>Email *: </label><br/>
<input type="text" name="email" class="inputFields" Placeholder="Email" required /><br><br/>
<label>Password *: </label><br/>
<input type="password" name="password" class="inputFields" Placeholder="Password" required /><br><br/>
<label>Re-enter Password *: </label><br/>
<input type="password" name="passwordconfirm" class="inputFields" Placeholder="Re-enter Password"required/><br><br/>
<label>Mobile Number *: </label><br/>
<input type="text" name="mobile" class="inputFields" Placeholder="Mobile Number" required /><br><br/>
<label>Gender *:</label>
<select name="g">
<option value="M">Male</option>
<option value="F">Female</option>
</select><br><br/>

<input type="checkbox" name="terms" required/>I agree with terms and conditions.<br><br/>
<input type="submit"  name="submit" class="thebuttons"/>            </form> <h4 style="font-family:impact" class="text-success text-center">OR</h4>
<a href="login.php" class="btn btn-lg btn-primary">Login</a><br/><br/>       </div>    </div></div>
</body></html>