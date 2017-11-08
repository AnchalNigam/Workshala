<?php

session_start();
include("function.php");
include("connect.php");

if(isset($_SESSION['Email'])) {
$email=$_SESSION['Email'];
$name=mysqli_query($con,"SELECT * FROM users WHERE Email='$email'");
$res=mysqli_fetch_assoc($name);
$n=$res["Name"];



}else{url('index.php');}

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students Dashboard</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>
<body>  
<nav class="navbar navbar-default navbar-fixed-top" >
 <div class="container-fluid">
    <a class="navbar-brand" href="dash.php"><span class="glyphicon glyphicon-home"> WORKSHALA</span></a>

      <ul class="nav navbar-nav navbar-right"><li><a href="index.php"> Workshops</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li></ul>
   
	
</div>
</nav><br/><div class="jumbotron" style="background-image:url('css/reg.jpg')">
   <div class="container-fluid">

  <div class="row">
    <div class="col-lg-9 col-lg-offset-2">
	   <h2 class="animated pulse infinite text-center" style="font-family:GARAMOND;color:white;font-size:50px">
<span class="glyphicon glyphicon-star-empty" style="color:#379683"></span>
	   <strong>WELCOME TO WORKSHALA........... <strong><span class="glyphicon glyphicon-star-empty" style="color:#379683"></span></h2>        <h2 class="text-center" style="font-family:vivaldi;color:white"><strong>Your Education Partner..............</strong></h2>
	   
	</div>
	
  </div>
  
  </div>
  </div><hr><br/><br/><br/><div class="container text-center">
   <h2 style="font-family:cursive" class="text-primary"><strong>DASHBOARD</strong></h2>
<?php
echo "<h1 style='font-family:verdana;color:#379683'>Welcome $n</h1><br/><br/><br/>";?><div class="container thumbnail">    <div class="row">        <div class="col-lg-6 ">             <h2 style="font-family:garamond">Workshops</h2>        </div>        <div class="col-lg-6"><h2 style="font-family:garamond">Application Status</h2>        </div>      </div><br/><br/>    <?php$count=0;    $query = mysqli_query($con,"SELECT * FROM users where Name='$n'");
echo "<div class='row'><div class='col-lg-6'>";
while($row = mysqli_fetch_assoc($query)){

    foreach($row as $key => $value) {
           if($value=='1'){              $count++;
            $c=str_replace('_',' ',$key);
			echo "<h4 style='font-family:verdana' class='text-primary'>$c<br/></h4>";
		   }
     }
echo "</div><div class='col-lg-6'>";    foreach($row as $key => $value) {
           if($value=='1'){
             echo "<h4 style='font-family:verdana' class='text-primary'>Applied</h4>";
		   }
     }echo "</div></div>";}if($count==0){echo "<h2>You have not applied in any workshop</h2>";}?>           </div>


</body></html>