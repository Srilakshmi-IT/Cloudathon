

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>AlumniRegistrationForm</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel = "stylesheet" href = "http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/registerstyle.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="css1/bootstrap.min.css" rel="stylesheet">

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
      </ul>
    </div>
  </div>
</nav>
<div class="wrapper" style="background-image: url('images/register.jpg');">
<div class="inner">
<form action="">
<h3>College Admin Registration Form</h3>
<div class="form-group">
<div class="form-wrapper">
<label for="">Name:</label>
<div class="form-holder">
<i class="fa fa-user"></i>
<input type="text" class="form-control" required/>
</div>
</div>

<div class="form-wrapper">
<label for="">College ID:</label>
<div class="form-holder">
<i class="fa fa-credit-card"></i>
<input type="text" class="form-control" required/>
</div>

</div>
</div>


<div class="form-group">
<div class="form-wrapper">
<label for="">Email:</label>
<div class="form-holder">
<input type="mail" class="form-control" required/>
<i class="fa fa-envelope"></i>
</div>
</div>

<div class="form-wrapper">
<label for="">Phone Number:</label>
<div class="form-holder">
<input type="tel" class="form-control" pattern="^\d{10}$" required/>
<i class="fa fa-phone"></i>
</div>
</div>
</div>

<div class="form-group">
<div class="form-wrapper">
<label for="">Gender:</label>
<div class="form-holder">
<select name="" id="" class="form-control" required>
<option value="">Select Your gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
</select>
<i class="fa fa-street-view"></i>
</div>
</div>

<div class="form-wrapper">
<label for="">Password:</label>
<div class="form-holder">
<i class="fa fa-key"></i>
<input type="password" class="form-control" placeholder="********" required/>
</div>
</div>

</div>


<div class = "form-group">
<div class="form-wrapper">
<label for="">College</label>
<div class="form-holder">
<i class="fa fa-university"></i>
<input type="text" class="form-control" required/>
</div>
</div>

</div>

<div class="form-end">
<div class="button-holder">
<button><center>Register </center></button>
</div>
</div>
</form>
</div>
</div>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

</body>
</html>