<!DOCTYPE html>
 <div class="container-fluid">
 
 <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	</button>
	
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"> WORKSHALA</span></a>
	</div>
$name=mysqli_query($con,"SELECT * FROM users WHERE Email='$email'");
$res=mysqli_fetch_assoc($name);
$n=$res["Name"];
      <li class='nav navbar-text'>Welcome $n</li>
</ul>";
    <ul class='nav navbar-nav navbar-right'>
      <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
    </ul>
</div>";
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
	<hr>

$sqlget="SELECT * From workshop";

$sqldata=mysqli_query($con,$sqlget);
$b=1;
while($row=mysqli_fetch_assoc($sqldata)){

$a=$row['name'];
<div class='row'>";
echo "<div class='col-lg-10 col-lg-offset-1 thumbnail' style='background-color:#DEF2F1;font-family:garamond'>";
}

echo "<div class='col-lg-10 col-lg-offset-2 thumbnail' style='background-color:#C1C8E4;font-family:garamond'>";
}
echo "<h2 class='text-center' style='font-family:garamond' ><strong><span class='glyphicon glyphicon-star-empty'></span> $a
<h3 style='font-family:Tangerine' class='text-center text-info'>$d</h3><br/><br/>";
echo "<a href='login.php' class='btn btn-primary btn-lg pull-right'>Apply for $a</a><br/><br/>";
</div>
</div>";
}              
?>

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
  </div>
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
</div>
<br/><br/><br/><br/>

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
</div>
<span class="glyphicon glyphicon-copyright-mark"></span>Workshala-India's Largest online Worshops Organiser.All Rights Reserved.

</div>
