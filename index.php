<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Online Courier Software Script, Cargo Tracking Module in PHP, MySql in India</title>
<meta name="description" content="A Simple Solution to enable Tracking in your Existing Website.">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="new.css" rel="stylesheet">


<style type="text/css">

</style>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="/index.php#"><img src="images/logo.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="http://localhost/index.php#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#connect">Connect</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Admin Login</a>
                </li>
			</ul>
		</div>
	</div>
</nav>
  
<!--- Image Slider -->
<div class="carousel slide" data-ride="carousel" id="slide">
	<ul class="carousel-indicators">
		<li data-target="#slide" data-slide-to="0" classs="active"></li>
		<li data-target="#slide" data-slide-to="1"></li>
	</ul>
	<div class="carousel-inner" style="width: 100%; height: 650px !important;">
		<div class="carousel-item active">
            <img src="images/1.jpg">
            <div class="carousel-caption">
                <button type="button" class="btn btn-light btn-lg car-btn-1">
                    <a href="track-status.php">Check Status</a>
                </button>
            </div>
		</div>
		<div class="carousel-item">
            <img src="images/2.jpg">
            <div class="carousel-caption">
                <button type="button" class="btn btn-light btn-lg car-btn-1">
                    <a href="track-status.php">Check Status</a>
                </button>
            </div>
		</div>
    </div>
    <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>        

<br>    
<br>

<!--- Jumbotron (About) -->
<div class="jumbotron" id="about">
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="display-4">About</h1>
                </div>
                <hr>
            </div>
        </div>

		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">
                Mail + Time + Delivery = trust !                    <br>
                COURIER MANAGEMENT SYSTEM is one of the most reputed and fast growing courier services to the clients.Our services are widely acknowledge for their features like time saving and very efficient in use.Sending the courier across the internet and no need to visit anywhere.The system is used for daily activities such as booking a courier and track courier etc.
                <br>
                A Courier company is one which delivers messages, packages and mail and is known for their speed, security, tracking service and specialisation. Courier services became increasingly popular with the arrival of Internet shopping. Being able to order large and multiple items from online sellers required specialist delivery services that would enable customers to not only receive their items but also enable online sellers to offer things such as next day delivery. Something that is only possible with a courier service.
            </p>
		</div>
  </div>
  
  
  <!--- Connect -->
<footer id="connect">
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
                <hr class="light">
                <p>999-999-9999</p>
                <p>fastcourier@gmail.com</p>
                <p>Lajpat Nagar</p>
                <p>South Delhi, Delhi, 110001</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our hours</h5>
                <hr class="light">
                <p>Monday: 9am to 6pm</p>
                <p>Saturday: 10am to 6pm</p>
                <p>Sunday closed</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Service Area</h5>
                <hr class="light">
                <p>Meerut, Uttar Pradesh, 250001</p>
                <p>Delhi, India, 110001</p>
                <p>Chennai, Tamil Nadu, 600001</p>
                <p>Vellore, Tamil Nadu, 632014</p>
            </div>
        </div>
    </div>
</footer>

</body></html>