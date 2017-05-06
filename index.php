<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>CODE BIRDS | CODE YOUR IMAGINATION</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"/>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">CODEBIRD</a>
    
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     
    </button>
      <div class="collapse navbar-collapse">

  <ul class="nav navbar-nav navbar-right">
<li class="active"><a href="index.php" target="_self"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Registration
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li><a href="user_form.php">User</a></li>
         <li class="divider"></li>
        <li><a href="member_form.php">Member</a></li>
      </ul>
    </li>
 <li><a href="gallery.php">Gallery</a></li>
 <li><a href="member.php">Members</a></li>
 <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">About
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="about_codebird.php">About CODEBIRD</a></li>
            <li class="divider"></li>
            <li><a href="about_uit.php">About UIT</a></li>
          </ul>
        </li>
<li><a href="contact.php">Contact</a></li>
 </ul>
      </div>
  </div>
</div><br/>
  <div id="mycarousel" class="carousel slide">
    
    <ol class="carousel-indicators">
       <li class="active" data-target="mycarousel" data-slide-to="0"></li>
       <li  data-target="#mycarousel" data-slide-to="1"></li>
       <li  data-target="#mycarousel" data-slide-to="2"></li>
       
       
       
    </ol>
  
    <div class="carousel-inner">
        <div class="item">
          <img src="img/s3.jpg" class="img-responsive" >
          
        </div>
        <div class="item">
          <img src="img/ss.jpg" class="img-responsive" >
          
        </div>

        <div class="item active">
          <img src="img/col.jpg"  class="img-responsive">
          <div class="carousel-caption">
          <center><b><h2>DRIVE YOURSELF TOWARDS THERE.</h2></b></center>           
          </div>
        </div>

      

    </div>
     <a class="left carousel carousel-control" href="#mycarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
    <a class="right carousel carousel-control" href="#mycarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
    
    </div>
    <div class="div1">
    </div>
<div class="container">
  <div class="jumbotron">
      <center><h2><b>CODEBIRD.</b></h2></center>
      <p class="text-center"><b>The CodeBird is a Platform Where We Sow The Seed Of Coding Teaser among The Prominent Youth.This Is Our Intiative To Create a Keen Interest in Coding Arena.Our Aim is Confined To Introduce The Learner What is Occuring Behind The Scene of This Virtual World.</b></p>
      <center>
        <a href="about_uit.php" class="btn btn-info btn-lg" role="button">About UIT</a>&nbsp;
        <a href="about_codebird.php" class="btn btn-success btn-lg" role="button">About CODEBIRD</a>
      </center>
  </div>
  <div>
    <?php include("includes/post_body.php"); ?>
  </div>
</div>
<hr width="50%"/>
 <footer class="footer">
    <hr width="80%" color="red" align="center">
<div class="row">
<div class="col-lg-6">
<p>&copy; 2016-17 CODEBIRD
  <br/>&reg; ALL RIGHTS RESERVED.</p>
  <a href="https://plus.google.com/u/0/106416177149875435383/about" target="_blank">
  <i class="fa fa-google-plus-square fa-3x" aria-hidden="true"></i></a> &nbsp;
  <a href="https://www.facebook.com/thecodebird/" target="_blank">
  <i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>
 </div> 
  <div class="col-lg-6">
  <h3>Developed By : PIYUSH </h3>
  <a href="https://in.linkedin.com/in/piyush-kumar-10281bb0" target="_blank"><i class="fa fa-linkedin fa-3x" aria-hidden="true"></i></a> &nbsp; <a href="https://plus.google.com/u/0/+PIYUSHChamp" target="_blank"><i class="fa fa-google-plus fa-3x" aria-hidden="true"></i></a>
    &nbsp; <a href="https://www.facebook.com/piyush.nawadia" target="_blank"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
	</div>
</div>

</footer>
<script src="jquery.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(document).on('scroll',function(){
    if($(this).scrollTop() > 1){
    $('ul').addClass('sticky');
  }
  else{
    $('ul').removeClass('sticky');
  }
});
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57ef559abb785b3a47d1cf53/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>