<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
</head>
<body>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="#">Vishakha</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
 	</button>
<!--code for navbar-->
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav ml-auto">
      		<li class="nav-item active">
        	<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      		</li>

	      	<!-- <li class="nav-item dropdown"> 
	         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Dropdown
	        </a> -->
     		<li class="nav-item">
       		<a class="nav-link" href="about.php">About Us</a>
      		</li>
		    <li class="nav-item">
		    <a class="nav-link" href="#">Home Page</a>
		    </li>
		    <li class="nav-item">
		    <a class="nav-link" href="#"></a>
		    </li>
       		 <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        	 <a class="dropdown-item" href="#">Action</a>
         	 <a class="dropdown-item" href="#">Another action</a>
          	 <div class="dropdown-divider"></div>
          	<a class="dropdown-item" href="#">Something else here</a></div> -->
       
		      <!-- <li class="nav-item">
		        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
		      </li> -->
   		</ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	</div>
</nav>

<!--Carousel code-->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
		    <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
		    <div class="carousel-caption">
			    <h3>Be Free</h3>
		        <p>We had such a great time in LA!</p>
		    </div>   
		</div>
		<div class="carousel-item">
		    <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
		    <div class="carousel-caption">
		       <h3>Travel</h3>
		       <p>Thank you, Chicago!</p>
		    </div>   
		</div>
		<div class="carousel-item">
		    <img src="images/3.jpg" alt="New York" width="1100" height="500">
		    <div class="carousel-caption">
		    	<h3>Love Life</h3>
		        <p>We love the Big Apple!</p>
		    </div>   
		</div>
		<div class="carousel-item">
		    <img src="images/4.jpg" alt="New York" width="1100" height="500">
		    <div class="carousel-caption">
		    	<h3>Love Life</h3>
		        <p>We love the Big Apple!</p>
		    </div>   
		</div>
		<div class="carousel-item">
		    <img src="images/5.jpg" alt="New York" width="1100" height="500">
		    <div class="carousel-caption">
		    	<h3>Love Life</h3>
		        <p>We love the Big Apple!</p>
		    </div>   
		</div>
	</div>
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
 </div>
 <!-- About Me code -->
<section class = "my-5">
  	<div class = "py-5">
  		<h2 class ="text-center">About Me</h2>
  	</div>
  	<div class = "container-fluid">
  		<div class = "row">
	  		<div class = "col-lg-4 col-md-2 col-12">
	  			<img src="images\woman.png" class ="img-fluid" height="350" width="200">
	  		</div>
	  		<div class = "col-lg-8 col-md-8 col-12">
	  			<h2 class = "dispay-4">Vishakha Bhosale</h2>
	  			<p class = "py-4"> A IT graduate living in Australia, trying to stay busy and develope websites in my free time. I also love travelling, listening to K-pop and sketching. I'll post some sketchs of mine in the future....  </p>
	  			<a href="about.php"> Know More</a>
	  		</div>
	  	</div>
 	</div>
  </section>

  <section class = "my-5">
  	<div>
  		<h2 class = "text-center"> Lesser know Countries to travel! </h2>
  	</div>
  	<div class = "container-fluid">
  		<div class="row">
  			<div class="col-lg-4 col-md-4 col-12">
  				<div class="card">
				  <img class="card-img-top" src="images/Denmark.jpg" height="270" width="100" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Denmark</h4>
				    <p class="card-text"></p>
					<a><?php echo( "<button onclick= \"location.href='Denmark.html'\">Know More</button>");?></a>
				    <!-- <a href="Denmark.php" class="btn btn-primary">Know More. .</a> -->
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
  				<div class="card">
				  <img class="card-img-top" src="images/bolivia.jpg" height="270" width="100" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Bolivia</h4>
				    <p class="card-text"></p>
				    <a href="#" class="btn btn-primary">Know More. .</a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
  				<div class="card">
				  <img class="card-img-top" src="images/Cambodia.jpg" height="270" width="100" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Cambodia</h4>
				    <p class="card-text"></p>
				    <a href="#" class="btn btn-primary">Know More. .</a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
  				<div class="card">
				  <img class="card-img-top" src="images/nepal.jpg" height="270" width="100" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Nepal</h4>
				    <p class="card-text"></p>
				    <a href="#" class="btn btn-primary">Know More. .</a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
  				<div class="card">
				  <img class="card-img-top" src="images/morocco.jpg"height="270" width="100" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Morocco</h4>
				    <p class="card-text"></p>
				    <a href="#" class="btn btn-primary">Know More. .</a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
  				<div class="card">
				  <img class="card-img-top" src="images/portugal.jpg" height="270" width="100" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Portugal</h4>
				    <p class="card-text"></p>
				    <a href="#" class="btn btn-primary">Know More. .</a>
				  </div>
				</div>
			</div>
		</div>
  	</div>
</section>
<!-- <section class = "my-5">
  	<div class = "py-5">
  		<h2 class ="text-center">About Me</h2>
  	</div>
  	<div class="container-fluid">
	  	<div class = "row">
	  		<div class="col-lg-4 col-md-4 col-12">
	  			<img src="images/1.jpg" class= "img-fluid pb-3">
	  		</div>
	  		<div class="col-lg-4 col-md-4 col-12">
	  			<img src="images/1.jpg" class= "img-fluid pb-3">
	  		</div>
	  		<div class="col-lg-4 col-md-4 col-12">
	  			<img src="images/1.jpg" class= "img-fluid pb-3">
	  		</div>
	  		<div class="col-lg-4 col-md-4 col-12">
	  			<img src="images/1.jpg" class= "img-fluid pb-3" >
	  		</div>
	  		<div class="col-lg-4 col-md-4 col-12">
	  			<img src="images/1.jpg" class= "img-fluid pb-3" >
	  		</div>
	  		<div class="col-lg-4 col-md-4 col-12">
	  			<img src="images/1.jpg" class= "img-fluid pb-3" >
	  		</div>
	  	</div>
	</div>
</section>
 -->
<section class = "my-5">
  	<div class = "py-5">
  		<h2 class ="text-center">About Me</h2>
  	</div>
  	<div class= "w-50 m-auto">
  		<form action = "userinfo.php" method="post">
  			<div class ="form-group">
  				<label> Username</label>
  				<input type="text" name="user" class="form-control" autocomplete="off">
  			</div>
  			<div class ="form-group">
  				<label> Email Address</label>
  				<input type="text" name="email" class="form-control" autocomplete="off">
  			</div>
  			<div class ="form-group">
  				<label> Feedback</label>
  				<textarea class="form-control" name ="feedback"></textarea>
  			</div>
  			<button type= "submit" class="btn btn-primary">Submit</button>
  	</div>
</section>
<footer class="p-3 text-center bg-dark text-white">@VishakhaBCreations</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
  	</script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
 	</script>	
</body>
</html>