
<!DOCTYPE html>
<html>
   <head>
         <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
		 <link href='https://fonts.googleapis.com/css?family=Charmonman' rel='stylesheet'>
		 <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css" type="text/css">
	     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	     <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
         <link rel = "stylesheet" type = "text/css" href = "register.css">
	     
	  	
         <title>registration page</title>
		
</head>

<body>

	<header>
	<div Class= "header">
		<div class="inner_header">
			
			<div class="logo_container">
				<a href="#"><h1>CheF2cheF</h1></a>
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
	<img src="images/pic1.jpg" width="100%" height="100%">
    </div>
   <!--register form-->
   <center>
   <form class="box" name="form" action="form_process.php"   method="post" onSubmit= "return(validate());" >
               <h1>Chef2Chef</h1>
		       <hr>
             
               <input type="text" id="username"   placeholder="username" name="username" >
	           <input type="text" id="email"  name="email" placeholder="abc@gmail.com"   >
			  
			  
	           <input type="password" id="pw1"   name="pw1" placeholder="Password"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  >
			  
	           <input type="password" id="pw2" name ="pw2" placeholder ="Re-enter password"   >
			   
			 
             			 
	         <input type="submit" name="" id ="register" value="REGISTER" >
			 
	      
	          <p>Already have an account? <a href="#">Sign in</a></p>
    </form>
	
	</center>
    <hr >

<!-- java script code -->
	
    <script type="text/javascript">
	
	        // Form validation code will come here.
      function validate() {
      
         if( document.form.username.value == "" ) {
            alert( "Please provide your name!" );
            document.form.username.focus() ;
            return false;
         }
		 
		 
		 
         if( document.form.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.form.email.focus() ;
            return false;
         }
		  if( document.form.pw1.value == "" ) {
            alert( "Please provide your Email!" );
            document.form.pw1.focus() ;
            return false;
         }
		  if( document.form.pw2.value == "" ) {
            alert( "Please provide your Email!" );
            document.form.pw2.focus() ;
            return false;
         }
        
         
         var emailID = document.form.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.form.email.focus() ;
            return false;
         }
       
		 if(document.form.pw1.value < 8){
		     alert("password length is too small");
		     document.form.pw1.focus();
		 }
		 
		 
		 if(document.form.pw1.value != document.form.pw2.value){
		     alert("Passswords are not matching");
			 document.form.pw1.focus();
			 document.form.pw2.focus();
		     return false;
		 }
		 
		 
       
	    return( true );
		
		
		 
}
</script>

 <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"><i>Chef2Chef</i> is a largest recipe site with various  recipe categories , and this site for users who love to cook as well as beginners.</p>
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
      <div class="container">
        <div class="row">
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