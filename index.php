<!DOCTYPE html><html><head>    <meta charset="utf-8">     <meta name="viewport" content="width=device-width, initial-scale=1">    <title>Workshala-India's Largest Workshop Organizer</title>	<link rel="stylesheet" href="css/style.css">    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	<link rel="stylesheet" href="css/bootstrap-theme.min.css"><link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">		<script src="js/jquery.js"></script>	<script src="js/bootstrap.min.js"></script></head><body>  <?phpsession_start();include 'connect.php';$j=" ";$v=" ";if(isset($_SESSION['Email'])){	$email=$_SESSION['Email'];}if(isset($_POST['submit'])){$m=$_POST['submit'];$z=str_replace('Apply for',' ',$m);$k=trim($z);$j = str_replace(' ','_', $k);$name=mysqli_query($con,"SELECT $j FROM users WHERE Email='$email'");$res=mysqli_fetch_assoc($name);$v=$res["$j"];if($v==NULL){$insertQuery="UPDATE users SET $j=1 WHERE Email='$email'";if(mysqli_query($con,$insertQuery)){?><script>       $(document).ready(function(){           $('#thankyouModal').modal('show');       });      </script><?php}else{	?>	<script>       $(document).ready(function(){           $('#sorryModal').modal('show');       });      </script>		<?php	}}else if($v==1){	?><script>       $(document).ready(function(){           $('#appliedModal').modal('show');       });      </script>	<?php}}?><div class="modal fade" id="thankyouModal">    <div class="modal-dialog">        <div class="modal-content">            <div class="modal-header">                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                <h4 class="modal-title" id="myModalLabel">Thank you For applying!</h4>            </div>            <div class="modal-body">			<p>All other details regarding workshop will be informed to you very soon</p>                                            </div>            <div class="modal-footer">          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        </div>			        </div>    </div></div><div class="modal fade" id="appliedModal">    <div class="modal-dialog">        <div class="modal-content">            <div class="modal-header">                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                <h4 class="modal-title" id="myModalLabel">You have Mistaken!</h4>            </div>            <div class="modal-body">                <p>You have already applied for this workshop</p>                                                 </div>            <div class="modal-footer">          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        </div>			        </div>    </div></div><div class="modal fade" id="sorryModal">    <div class="modal-dialog">        <div class="modal-content">            <div class="modal-header">                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                <h4 class="modal-title" id="myModalLabel">You can't Apply now!</h4>            </div>            <div class="modal-body">                <p>Sorry!Server problem</p>                                                 </div>            <div class="modal-footer">          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>        </div>			        </div>    </div></div><nav class="navbar navbar-default navbar-fixed-top" >
 <div class="container-fluid">
 
 <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	</button>
	
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"> WORKSHALA</span></a>
	</div>  <?php if(isset($_SESSION['Email'])){$email=$_SESSION['Email'];
$name=mysqli_query($con,"SELECT * FROM users WHERE Email='$email'");
$res=mysqli_fetch_assoc($name);
$n=$res["Name"];  echo "<ul class='nav navbar-nav navbar-right'>
      <li class='nav navbar-text'>Welcome $n</li>	   <li><a href='dash.php'>My Dashboard</a></li>      <li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>      
</ul>";}else{ echo "<div id='my' class='collapse navbar-collapse'>
    <ul class='nav navbar-nav navbar-right'>       <li><a href='register.php'><span class='glyphicon glyphicon-user'></span> Sign up</a></li>
      <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
    </ul>
</div>";} ?></div></nav><br/><br/><br/><div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
     
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
	  <div class="carousel-caption">
          <h1 style="font-family:garamond"><strong>WORKSHALA</strong></h1>
          <h1 style="font-family:vivaldi">A Secret Road Towards Success</h1>
        </div>
        <img  class="animated rollIn" src="css/bh.jpg" alt="Chicago" style="width:100%">
        
      </div>

      <div class="item">
	   <div class="carousel-caption">
          <h1 style="font-family:garamond"><strong>WORKSHALA</strong></h1>
          <h1 style="font-family:vivaldi">Your Education Partner</h1>
        </div>
        <img src="css/ki.jpg" alt="Los Angeles" style="width:100%">   
       
      </div>
    
      
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	<br/>
	<hr><div class="container text-center">   <h1 style="font-family:garamond" class="text-primary"><strong>WORKSHOPS</strong></h1><h4 style="font-family:cursive;color:#379683">Upcoming Opportunities For You</h4></div><br/><br/><br/><?php

$sqlget="SELECT * From workshop";

$sqldata=mysqli_query($con,$sqlget);
$b=1;
while($row=mysqli_fetch_assoc($sqldata)){

$a=$row['name'];$d=$row['details']; echo "<div class='container'><br/>
<div class='row'>";if($b%2!=0){
echo "<div class='col-lg-10 col-lg-offset-1 thumbnail' style='background-color:#DEF2F1;font-family:garamond'>";
}else {

echo "<div class='col-lg-10 col-lg-offset-2 thumbnail' style='background-color:#C1C8E4;font-family:garamond'>";
}
echo "<h2 class='text-center' style='font-family:garamond' ><strong><span class='glyphicon glyphicon-star-empty'></span> $a<span class='glyphicon glyphicon-star-empty'></span><strong></h2><br/>
<h3 style='font-family:Tangerine' class='text-center text-info'>$d</h3><br/><br/>";if(isset($_SESSION['Email'])){	echo "<form method='POST' action='index.php'><center><input type='submit' name='submit' value='Apply for $a'/></center></form>";}else{
echo "<a href='login.php' class='btn btn-primary btn-lg pull-right'>Apply for $a</a><br/><br/>";}echo "</div>
</div>
</div>";$b++;
}              
?><br/><br/><br/><br/><br/><br/><br/><br/>

  <div class="jumbotron" style="background-image:url('css/pooo.jpg')">
   <div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-lg-offset-1">
	   <h2 class="animated pulse infinite text-center" style="font-family:impact;color:white"><span class="glyphicon glyphicon-star-empty" style="color:#379683"></span>
	   <strong>WORKSHALA <strong><span class="glyphicon glyphicon-star-empty" style="color:#379683"></span></h2>
	   <h2 class="text-center text-danger" style="font-family:vivaldi;color:white"><strong>Most Trusted and Largest Workshop Organiser<strong></h2>
	</div>
	<div class="col-lg-6 col-lg-offset-1 text-center" ><br/><br/>
	  <h2 style="font-family:garamond;color:white"><strong><span class="glyphicon glyphicon-user" ></span> 200+ Students Became Part<br/>
	  <span class="glyphicon glyphicon-heart"></span> 20+ Talented Professor<strong></h2>
	</div>
  </div>
  
  </div>
  </div><br/><br/><br/><br/><div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-4 col-md-6 col-xs-offset-3">
<h1 style="font-family:garamond" class="text-primary animated fadeIn infinite"><strong><span class="glyphicon glyphicon-star-empty" style="color:#379683"></span> OUR STUDENTS</strong>
<span class="glyphicon glyphicon-star-empty" style="color:#379683"></span></h1><br/><br/>
</div>
</div>
<div class="row">
<div class="col-lg-2 col-lg-offset-1 col-xs-offset-1">
 <img class="img-responsive " src="css/i1.jpg"></div>
 <div class="col-lg-3"><br/>
 <p style="font-family:verdana;color:#7395AE">ThankYou for organising such useful workshops.<footer><cite>-Ayush Nigam</cite></footer></p>

 </div>
 <div class="col-lg-2 col-lg-offset-1 col-xs-offset-1">
 <img class="img-responsive " src="css/i1.jpg"></div>
 <div class="col-lg-3"><br/>
 <p style="font-family:verdana;color:#7395AE">Helped a lot.Gave me very clear vision about the topic.ThankYou for being in our life.<footer><cite>-Shivam Gupta</cite></footer></p>

 </div>

</div>
</div><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/>
<div class="jumbotron" style="background-color:#F7F9FB">
<div class="container-fluid">
<div class="row">
<div class="col-md-5 col-xs-offset-1">
<h2 class="animated pulse infinite "style="font-family:serif"><span class="glyphicon glyphicon-star-empty "></span><strong> 
WORKSHALA <strong><span class="glyphicon glyphicon-star-empty"></span></h2>
<p style="font-family:Helvetica Neue" class="text-primary">We are Workshala.We are responsible for organising workshops online for helping students to shape their future in a Right Direction.</p>
</div>


<div class="col-md-4 col-xs-offset-2">
<h4 style="font-family:impact">Contact Us <span class="glyphicon glyphicon-phone animated headShake infinite"></span></h4>
<ul class="list-unstyled">
		      <li class="text-primary">2/5,kareli,Mumbai-211002</li>
			  <li class="text-primary">Phone No.+91-9026224948</li>
			  <li class="text-primary">Email Id:<span class="bg-primary"> anchalnigamm@gmail.com</span></li>
			  
			  
</div>
 </div>
</div>
</div><div class="panel-footer text-center">
<span class="glyphicon glyphicon-copyright-mark"></span>Workshala-India's Largest online Worshops Organiser.All Rights Reserved.

</div>
</body></html>