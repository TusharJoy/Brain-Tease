<?php
    session_start();
    if($_SESSION['user'])
    {
    	// echo 'logged in';
       echo $_SESSION['user'] ;
    }
    else{
      die("mara kha") ;
    }
?>

<!DOCTYPE html>
<html>
<head  lang = "en">
	<title>
      Brain Checker
  </title>
  <meta charset = "utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ek+Mukta">
	   
</head>
  <body class="Mother">
    <div class="container-fluid">

       <div class="navigationbar">

          <div class=".col-md-12">
              <h1>Brain Checker</h1>
              <h2> Test Your Brain by giving answer in various subject </h2>
          </div> 
       </div>    
   
    </div>
    
  <div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="#">Home</a></li>
            <li>
                <a href="#">Categories<span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li><a href="#">Chemistry</a></li>
                    <li><a href="#">Math</a></li>
                    <li><a href="#">Physics</a></li>
                    <li><a href="#">Generel Knowledge</a></li>
                </ul>
            </li>
            <li><a href="#">Result</a></li>
            <li class="current-item"><a href="#">Contact Us</a></li>
            <li ><a href="logout.php">logout</a></li>
        </ul>
    </nav>
  </div> 

  <div class="container-fluid" >

  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:-10px">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

        <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/slider1.jpg" >
        <div class="content">
          <h1></h1>
        </div>
        <div class="carousel-caption">
          
        </div>

      </div>

      <div class="item">
        <img src="images/slider2.jpg" >
        <div class="content">
          <h1></h1>
        </div>
        <div class="carousel-caption">
          
        </div>
      </div>
    
      <div class="item">
        <img src="images/slider3.jpg">
        <div class="content">
          <h1> </h1>
        </div>
        <div class="carousel-caption">
          
        </div>
      </div>

      <div class="item">
        <img src="images/005.jpg"  >
        <div class="content">
          <h1></h1>
        </div>
        <div class="carousel-caption">
         
        </div>
      </div>
  
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>  

   <div class="container-fluid">
   <div class="footer">
     <div class=".col-md-12">
         <h3>This is footer</h3>
     </div>
   </div>
  
   </div> 

  </body>
</html>
