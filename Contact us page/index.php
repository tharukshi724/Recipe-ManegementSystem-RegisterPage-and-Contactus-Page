<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">

	   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
		   <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
	  <link href='https://fonts.googleapis.com/css?family=Baumans' rel='stylesheet'>
	  <link href='https://fonts.googleapis.com/css?family=Cabin Sketch' rel='stylesheet'>
	   
	 
         <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
		 <link href='https://fonts.googleapis.com/css?family=Charmonman' rel='stylesheet'>
		 <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css" type="text/css">
          <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
	      <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
		   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	      <link rel="stylesheet" href="index.css">
	      
<head>
<title>contact us</title>
<body>
<header>
	<div Class= "header">
		<div class="inner_header">
			
			<div class="logo_container">
				<a href="#"><h1>CheF2cheF</span></h1></a>
			</div>
			
			
			<ul class="navigate_bar">
			
				
				<span><li><input type="text" placeholder="Search recipe.." ><button><i class="fas fa-search"></i></button></li></span>
				<a href="#"><li>Home</li></a>
				<a href="#"><li>Category</li></a>
				<a href="#"><li>Profile</li></a>
				<a href="#"><li>Favorite</li></a>
				<a href="#"><li>Contact</li></a>
				<span><li><button id="logout">Logout</button></li></span>

				
				
			
			</ul>
			
		</div>
	</div>
	</header>
 
   <div class="image">
      
			     <img src="images\cropped.jpg"  width= "100%" height="100%">
			
            				 
             <div class="centered">Get In Touch</div>
			 
			 
			 <!--transparent text-->
	         <div class="top-left">
			 <br>
			 <br>
	         <p id="p1">Give us a shout</p>
			 <br>
			 <p id="p2">call or email us<br>we there<br> for you</p>
			 <br>
	         <p id="p2">For a support or<br> any question : Email us <br>at  Chef2Chef@mail.com</p>
			 <br>
			 <p id="p3"> phonecalls<br>0112334789</p>
			 <br>
			 <p id="p5">Please fill out the quick form we will be in touch with lightening speed.</p>
			 
	        </div>
   </div>
   
<body>

	
	<!--form start here-->
	
    <div class="container">
	   <div class="row">
	         <div class="col-lg-6 m-auto">
			     <div class="card mt-5">
				     <div class="card-title">
					      <h2 class="text">Contact us</h2>
						  <hr class="hori">
						  
					
					     <div class="card-body">
					          <form action="process.php" method="post"  id="form" onSubmit= "check_empty();">
						         <input type="text" name="uname" placeholder="name">
							     <input type="text" name="email" placeholder="email">
							     <input type="text" name="subject" placeholder="subject">
							     <textarea name="msg" placeholder="message" ></textarea>
							     <input type="submit" name="submit" value="Submit">
						     </form>
	                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
    		
 <!-- Site footer -->
    <footer class="site-footer">
      <div class="container1">
        <div class="row1">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"><i>Chef2Chef</i> is a largest recipe site with various categories , and this site for users who love to cook as well as beginners.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Help and Support</h6>
            <ul class="footer-links">
              <li><a href="#">FAQ</a></li>
              <li><a href="#">COMPLAINTS</a></li>
              <li><a href="#">TERMS AND CONDITIONS</a></li>
              
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="#>recipes</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Contribute</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container2">
        <div class="row2">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">Chef2Chef</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

</body>
</html>