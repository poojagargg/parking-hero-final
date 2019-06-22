<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Parking Hero</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<link rel="stylesheet" href="./style1.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>

  <script>
function validateform() {
	var name=document.frm.name;
	var email=document.frm.email;
	var contactno=document.frm.contactno;
	var manager=document.frm.manager;
	var integrate=document.frm.integrate;
	
	
	if(name.value == ""){
		name.focus();
		alert("Name required");    
		return false; 
	}
	
	else if(!name.value.match(/^([a-z A-Z])*$/)) {
		name.focus();
		alert("Name must contain only Alphabets");  
		return false; 
		
	} 

	
	if(email.value == ""){
		email.focus();
		alert("Please enter your Email-ID.\n");
		return false;
	}
	else if(!email.value.match(/^([a-zA-Z0-9\.\_])+@([a-zA-Z0-9]+\.)+([a-zA-Z])+$/)) {
		email.focus();
		
		alert("Please Enter a valid Email-ID");  
		return false; 
		
	} 

	if(contactno.value == ""){
		contactno.focus();
		alert("Please enter your contact number.");
		return false;
	}
	else if(!contactno.value.match(/^([0-9])*$/)) {
		contactno.focus();
		
		alert("Please Enter a valid Contact number");    
		return false; 
		
	} 
	else if((contactno.value.length>10)||(contactno.value.length<10)){
		contactno.focus();
		
		alert("Please Enter a valid Contact number");    
		return false; 
		
	} 
		
	if(document.getElementById("manager").value=="")
		
	{
		document.getElementById("manager").focus();
		alert("Please select your option.");
		return false;
	}
	
	if(integrate.value== ""){
		alert("Please select your option.");
		return false;
	}
	
}
</script>
                 
<script>
            $(document).ready(function(){

                $("#email").change(function(){

                    var email = $("#email").val().trim();

                    if(email != ''){

                        $("#email_response").show();

                        $.ajax({
                            url: 'email_check.php',
                            type: 'post',
                            data: {email:email},
                            success: function(response){
                                
                                // Show status
                                if(response > 0){
                                    $("#email_response").html("<span class='not-exists'>* Email I'd Already in use.</span>");

                                }else{
                                    $("#email_response").html("<span class='exists'>Email I'd Available.</span>");

                                }

                            }
                        });
                    }else{
                        $("#email_response").hide();
                    }

                });

            });
        </script>               
</head>
<body>
  
	<!-- Page Preloder -->
	


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<h1 style="color:#008080;font-size:25px;"><img src="img/parklogo.png" alt="">Parking Hero</h1><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="home.html">Home</a></li>
				<li><a href="home.html">Services</a></li>
				<li class="active"><a href="register.php">Register</a></li>
				<li><a href="home.html">Contact</a></li>
				<li><a href="elements.html">Elements</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->
	
	<!-- Page header 
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				
			</div>
		</div>
	</div>
	<!-- Page header end-->
	<div class="services-section spad" style="background:#008080;">
		<div class="overlay"></div>
			<div class="container" >
			<div class="row" style="padding-top:100px; position:reltive;">
				<div class="col-md-8 col-sm-7 blog-posts">
  <form method="post" onsubmit="return validateform()" name="frm" action="afterregister.php">
  	
<div class="form-group">
  	<label class="col-md-4 control-label">Name</label>  
  <input  name="name" placeholder="Name" class="form-control"  type="text" required><span id="name" class="required" ></span>
    
</div>

<div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label> 
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" id="email" class="required" required >
  <div id="email_response" class="response" style="color:red"></div>
  <span id="email" class="required"></span>
</div> 

<div class="form-group">
  <label class="col-md-4 control-label">Contact Number</label>  
  <input name="contactno" class="form-control" type="text" placeholder="Contact Number" required><span id="contactno" class="required" ></span>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">Manager?</label>
    <select name="manager" class="form-control selectpicker" required><span id="manager" class="required"></span>
      <option value="">Select..</option>
      <option>Yes</option>
      <option>No</option>
    </select>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">Want to integrate our system?</label>
    <select name="integrate" class="form-control selectpicker" required><span id="integrate" class="required"></span>
      <option value="">Select..</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
</div>

<div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
						<input name="submit" type="submit" class="form-control" id="submit" value="REGISTER">
					</div>
  </form>
  </div>
  </div>
  </div>
  </div>


	<!-- Footer section -->
	<div class="browser">
	<footer>
    <div class="social-media-links">
	<h1 style="align:center;font-family:Oswald, sans-serif; font-weight: 400;">Follow us on:</h1>
      <ul>
        <li>
          <!-- twitter -->
          <a href="#">
            <svg class="glow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
              <path class="st0" d="M9.5 27.1c11.2 0 17.4-9.3 17.4-17.4 0-0.3 0-0.5 0-0.8 1.2-0.9 2.2-1.9 3-3.2 -1.1 0.5-2.3 0.8-3.5 1 1.3-0.8 2.2-2 2.7-3.4 -1.2 0.7-2.5 1.2-3.9 1.5 -1.1-1.2-2.7-1.9-4.5-1.9 -3.4 0-6.1 2.7-6.1 6.1 0 0.5 0.1 0.9 0.2 1.4C9.7 10.1 5.2 7.7 2.2 4 1.7 4.9 1.4 6 1.4 7.1c0 2.1 1.1 4 2.7 5.1 -1 0-1.9-0.3-2.8-0.8 0 0 0 0.1 0 0.1 0 3 2.1 5.4 4.9 6 -0.5 0.1-1.1 0.2-1.6 0.2 -0.4 0-0.8 0-1.1-0.1 0.8 2.4 3 4.2 5.7 4.2 -2.1 1.6-4.7 2.6-7.6 2.6 -0.5 0-1 0-1.5-0.1C2.8 26.1 6 27.1 9.5 27.1"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
              <path class="st0" d="M9.5 27.1c11.2 0 17.4-9.3 17.4-17.4 0-0.3 0-0.5 0-0.8 1.2-0.9 2.2-1.9 3-3.2 -1.1 0.5-2.3 0.8-3.5 1 1.3-0.8 2.2-2 2.7-3.4 -1.2 0.7-2.5 1.2-3.9 1.5 -1.1-1.2-2.7-1.9-4.5-1.9 -3.4 0-6.1 2.7-6.1 6.1 0 0.5 0.1 0.9 0.2 1.4C9.7 10.1 5.2 7.7 2.2 4 1.7 4.9 1.4 6 1.4 7.1c0 2.1 1.1 4 2.7 5.1 -1 0-1.9-0.3-2.8-0.8 0 0 0 0.1 0 0.1 0 3 2.1 5.4 4.9 6 -0.5 0.1-1.1 0.2-1.6 0.2 -0.4 0-0.8 0-1.1-0.1 0.8 2.4 3 4.2 5.7 4.2 -2.1 1.6-4.7 2.6-7.6 2.6 -0.5 0-1 0-1.5-0.1C2.8 26.1 6 27.1 9.5 27.1"/>
            </svg>
          </a>
        </li>
        <li>
          <!-- facebook -->
          <a href="#">
            <svg class="glow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
              <path class="st0" d="M28.3 0.1H1.7c-0.9 0-1.6 0.7-1.6 1.6v26.5c0 0.9 0.7 1.6 1.6 1.6H16V18.4h-3.9v-4.5H16v-3.3c0-3.9 2.4-5.9 5.8-5.9 1.6 0 3.1 0.1 3.5 0.2v4l-2.4 0c-1.9 0-2.2 0.9-2.2 2.2v2.9h4.5l-0.6 4.5h-3.9v11.5h7.6c0.9 0 1.6-0.7 1.6-1.6V1.7C29.9 0.8 29.2 0.1 28.3 0.1z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
              <path class="st0" d="M28.3 0.1H1.7c-0.9 0-1.6 0.7-1.6 1.6v26.5c0 0.9 0.7 1.6 1.6 1.6H16V18.4h-3.9v-4.5H16v-3.3c0-3.9 2.4-5.9 5.8-5.9 1.6 0 3.1 0.1 3.5 0.2v4l-2.4 0c-1.9 0-2.2 0.9-2.2 2.2v2.9h4.5l-0.6 4.5h-3.9v11.5h7.6c0.9 0 1.6-0.7 1.6-1.6V1.7C29.9 0.8 29.2 0.1 28.3 0.1z"/>
            </svg>
          </a>
        </li>
        <li>
          <!-- youtube -->
          <a href="#">
            <svg class="glow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
              <path class="st0" d="M29.7 9c0 0-0.3-2.1-1.2-3 -1.1-1.2-2.4-1.2-3-1.3C21.3 4.5 15 4.5 15 4.5h0c0 0-6.3 0-10.5 0.3C3.9 4.8 2.6 4.8 1.5 6 0.6 6.9 0.3 9 0.3 9S0 11.4 0 13.9v2.3C0 18.6 0.3 21 0.3 21s0.3 2.1 1.2 3c1.1 1.2 2.6 1.2 3.3 1.3C7.2 25.5 15 25.6 15 25.6s6.3 0 10.5-0.3c0.6-0.1 1.9-0.1 3-1.3 0.9-0.9 1.2-3 1.2-3s0.3-2.4 0.3-4.9v-2.3C30 11.4 29.7 9 29.7 9zM11.9 18.9l0-8.4 8.1 4.2L11.9 18.9z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
              <path class="st0" d="M29.7 9c0 0-0.3-2.1-1.2-3 -1.1-1.2-2.4-1.2-3-1.3C21.3 4.5 15 4.5 15 4.5h0c0 0-6.3 0-10.5 0.3C3.9 4.8 2.6 4.8 1.5 6 0.6 6.9 0.3 9 0.3 9S0 11.4 0 13.9v2.3C0 18.6 0.3 21 0.3 21s0.3 2.1 1.2 3c1.1 1.2 2.6 1.2 3.3 1.3C7.2 25.5 15 25.6 15 25.6s6.3 0 10.5-0.3c0.6-0.1 1.9-0.1 3-1.3 0.9-0.9 1.2-3 1.2-3s0.3-2.4 0.3-4.9v-2.3C30 11.4 29.7 9 29.7 9zM11.9 18.9l0-8.4 8.1 4.2L11.9 18.9z"/>
            </svg>
          </a>
        </li>
        <li>
          <!-- instagram -->
          <a href="#">
            <svg class="glow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
              <path class="st0" d="M15 2.8c4 0 4.4 0 6 0.1 1.4 0.1 2.2 0.3 2.8 0.5 0.7 0.3 1.2 0.6 1.7 1.1 0.5 0.5 0.8 1 1.1 1.7C26.8 6.8 27 7.6 27.1 9c0.1 1.6 0.1 2 0.1 6s0 4.4-0.1 6c-0.1 1.4-0.3 2.2-0.5 2.8 -0.3 0.7-0.6 1.2-1.1 1.7 -0.5 0.5-1 0.8-1.7 1.1 -0.5 0.2-1.3 0.4-2.8 0.5 -1.6 0.1-2 0.1-6 0.1s-4.4 0-6-0.1c-1.4-0.1-2.2-0.3-2.8-0.5 -0.7-0.3-1.2-0.6-1.7-1.1 -0.5-0.5-0.8-1-1.1-1.7C3.2 23.2 3 22.4 2.9 21c-0.1-1.6-0.1-2-0.1-6s0-4.4 0.1-6C3 7.6 3.2 6.8 3.4 6.2 3.7 5.5 4 5.1 4.5 4.5c0.5-0.5 1-0.8 1.7-1.1C6.8 3.2 7.6 3 9 2.9 10.6 2.8 11 2.8 15 2.8M15 0.2c-4 0-4.5 0-6.1 0.1C7.3 0.3 6.2 0.6 5.3 0.9c-1 0.4-1.8 0.9-2.6 1.7C1.8 3.5 1.3 4.3 0.9 5.3c-0.4 0.9-0.6 2-0.7 3.6C0.2 10.5 0.1 11 0.1 15c0 4 0 4.5 0.1 6.1 0.1 1.6 0.3 2.7 0.7 3.6 0.4 1 0.9 1.8 1.7 2.6 0.8 0.8 1.7 1.3 2.6 1.7 0.9 0.4 2 0.6 3.6 0.7 1.6 0.1 2.1 0.1 6.1 0.1s4.5 0 6.1-0.1c1.6-0.1 2.7-0.3 3.6-0.7 1-0.4 1.8-0.9 2.6-1.7 0.8-0.8 1.3-1.7 1.7-2.6 0.4-0.9 0.6-2 0.7-3.6 0.1-1.6 0.1-2.1 0.1-6.1s0-4.5-0.1-6.1c-0.1-1.6-0.3-2.7-0.7-3.6 -0.4-1-0.9-1.8-1.7-2.6 -0.8-0.8-1.7-1.3-2.6-1.7 -0.9-0.4-2-0.6-3.6-0.7C19.5 0.2 19 0.2 15 0.2L15 0.2z"/>
              <path class="st0" d="M15 7.4c-4.2 0-7.6 3.4-7.6 7.6s3.4 7.6 7.6 7.6 7.6-3.4 7.6-7.6S19.2 7.4 15 7.4zM15 20c-2.7 0-5-2.2-5-5s2.2-5 5-5c2.7 0 5 2.2 5 5S17.7 20 15 20z"/>
              <circle class="st0" cx="22.9" cy="7.1" r="1.8"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
              <path class="st0" d="M15 2.8c4 0 4.4 0 6 0.1 1.4 0.1 2.2 0.3 2.8 0.5 0.7 0.3 1.2 0.6 1.7 1.1 0.5 0.5 0.8 1 1.1 1.7C26.8 6.8 27 7.6 27.1 9c0.1 1.6 0.1 2 0.1 6s0 4.4-0.1 6c-0.1 1.4-0.3 2.2-0.5 2.8 -0.3 0.7-0.6 1.2-1.1 1.7 -0.5 0.5-1 0.8-1.7 1.1 -0.5 0.2-1.3 0.4-2.8 0.5 -1.6 0.1-2 0.1-6 0.1s-4.4 0-6-0.1c-1.4-0.1-2.2-0.3-2.8-0.5 -0.7-0.3-1.2-0.6-1.7-1.1 -0.5-0.5-0.8-1-1.1-1.7C3.2 23.2 3 22.4 2.9 21c-0.1-1.6-0.1-2-0.1-6s0-4.4 0.1-6C3 7.6 3.2 6.8 3.4 6.2 3.7 5.5 4 5.1 4.5 4.5c0.5-0.5 1-0.8 1.7-1.1C6.8 3.2 7.6 3 9 2.9 10.6 2.8 11 2.8 15 2.8M15 0.2c-4 0-4.5 0-6.1 0.1C7.3 0.3 6.2 0.6 5.3 0.9c-1 0.4-1.8 0.9-2.6 1.7C1.8 3.5 1.3 4.3 0.9 5.3c-0.4 0.9-0.6 2-0.7 3.6C0.2 10.5 0.1 11 0.1 15c0 4 0 4.5 0.1 6.1 0.1 1.6 0.3 2.7 0.7 3.6 0.4 1 0.9 1.8 1.7 2.6 0.8 0.8 1.7 1.3 2.6 1.7 0.9 0.4 2 0.6 3.6 0.7 1.6 0.1 2.1 0.1 6.1 0.1s4.5 0 6.1-0.1c1.6-0.1 2.7-0.3 3.6-0.7 1-0.4 1.8-0.9 2.6-1.7 0.8-0.8 1.3-1.7 1.7-2.6 0.4-0.9 0.6-2 0.7-3.6 0.1-1.6 0.1-2.1 0.1-6.1s0-4.5-0.1-6.1c-0.1-1.6-0.3-2.7-0.7-3.6 -0.4-1-0.9-1.8-1.7-2.6 -0.8-0.8-1.7-1.3-2.6-1.7 -0.9-0.4-2-0.6-3.6-0.7C19.5 0.2 19 0.2 15 0.2L15 0.2z"/>
              <path class="st0" d="M15 7.4c-4.2 0-7.6 3.4-7.6 7.6s3.4 7.6 7.6 7.6 7.6-3.4 7.6-7.6S19.2 7.4 15 7.4zM15 20c-2.7 0-5-2.2-5-5s2.2-5 5-5c2.7 0 5 2.2 5 5S17.7 20 15 20z"/>
              <circle class="st0" cx="22.9" cy="7.1" r="1.8"/>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </footer></div>
	<!-- Footer section end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
</body>
</html>