
<!DOCTYPE html>
<html lang="en">
<head>
<title> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	  </button>
      <h3 style = "color : white;"><strong>Alumni Tracking</strong></h3></a>
	  </div>
	  
	  <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
		 <li><a href="index.php"><span class="glyphicon glyphicon-home"> Home
			&emsp;</span></a></li>
		 <li><a href="alumni_login.php"><span class="glyphicon glyphicon-user"> Alumni
			&emsp;</span></a></li>
        <li><a href="admin_search.php"><span class="glyphicon glyphicon-user"> College Admin 
			&emsp;</span></a></li>
		 <li><a href="directorate_login.php"><span class="glyphicon glyphicon-user"> Directorate 
			&emsp;</span></a></li>
            <li><a href="contact.html"><span class="glyphicon glyphicon-earphone"> Contact Us</span></a></li>
		 
		 <li><a href="college_login.php"><span class="glyphicon glyphicon-log-out">Logout</span></a></li>
	</ul>
	</div>
	
	</div>
	</nav>
	<br><br>
    <div><br/></div>
	<div class="container">
	<center> <label for="Td"><h2>Find your Alumni</h2></label></center>
		<form class="form-inline" method="post" action="">
		
	<div class="row">
	<div class= "col-md-7" class="col-sm-7" class="col-lg-7" class="col-xs-8"><br><br><br><br><br><br>
			<div class="form-group">
				<label for="From">Batch: </label>
				<input type="text" id="batch" name="batch">
			</div>
			&emsp;
			<div class="form-group">
				<label for="To">Department : </label>
				<input type="text" id="dept" name="dept">
			</div>
			<div class="form-group">
				&emsp;&emsp;
				<input class="btn btn-md btn-info" name="filter"id="filter" value="Search" class="form-submit" class="glyphicon glyphicon-filter"type="submit"/>
			</div>
			<br><br><br><br>
			</div>
			</div>
			</form>
	<br>
	<br>
	<center><h3><b>Your Search Results</b></h3></center><br><br>
	<table class="table table-bordered table-responsive"  style="background-color:skyblue; id="Td">
	<thead>
	<tr style="border-color:black;"> 
		<th>S.No</th>
		<th>Name</th>
		<th>Reg No</th>
		<th>Batch</th>
		<th>Department</th>
		<th>email</th>
		<th>Phone Number</th>
		<th>Gender</th>
		<th>Status</th>
		</tr>
	</thead>
	
	<tbody style="border-color:black;">
	
	</tbody>
	</table>
		
	
	</div>
	<br><br><br>

</body>
</html>