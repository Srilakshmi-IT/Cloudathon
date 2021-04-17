<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AlumniTracking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
  <link href="css1/bootstrap.min.css" rel="stylesheet">
  <!--<link rel="stylesheet" type="text/css" href="bootstrap.min.css">-->
  <!--<link rel="stylesheet" type="text/css" href="scaffolding.less.css">-->
  <link rel="stylesheet" type="text/css" href="style.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/carousel.css" rel="stylesheet">
  
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <h3><strong>Alumni Tracking</strong></h3></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
		 <li><a href="Home.html">Home</a></li>
					<li><a href="contact.html">Contact Us</a></li>
     <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
      </ul>
    </div>
  </div>
</nav>

    <div class="main">

               <!-- Sign in  Form -->
        <section class="sign-in">
		
		           <div class="container">
								
<div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
					<li><a href="alumni_login.php">Alumni</a></li>
					<li><a href="college_login.php">College Admin </a></li>
					<li><a href="directorate_login.php">Directorate</a></li>
					<!--<li><a href="signout.php">SignOut</a></li>-->
          </ul>
    </div>
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/user.png" alt="sign in"></figure>
						
								
                        <a href="college_register.php" class="signup-image-link"style="text-decoration:none">Create an account</a>
						<a href="\pk\Forgot Password.php" class="signup-image-link"style="text-decoration:none">Forgot Password</a>
                    </div>

                    <div class="signin-form">
					
                        <h4 class="form-title"><strong>Collge Adminstrator signin</strong></h4>
                        <form method="POST" class="register-form" id="login-form" action="signin.php">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text"  name="email" type="email" autofocus placeholder="email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
							
							
							
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
								<br><br>
								<!--<a href="\pk\Change Password.php"style="text-decoration:none">Change password</a>
														
								<!--<a href="Forgot Password.php"><input type="submit" class="form-submit" name="signin" id="signin"value="Forgot Password"></a>-->
								                            </div>
							
							
							
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
 
	
	    <br />

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>