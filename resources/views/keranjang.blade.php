<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Beranda</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="/css/bootstrap2.min.css"/>

		<!-- Slick -->
		<link rel="stylesheet" href="/css/slick.css"/>
		<link rel="stylesheet" href="/css/slick-theme.css"/>

		<!-- nouislider -->
		<link rel="stylesheet" href="/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

		<!-- Custom stlylesheet -->
		<link rel="stylesheet" href="/css/styleee.css"/>
    </head>
	<body>
        <nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="/beranda">Home</a></li>
                        @if (auth()->check())
						<li><a href="/profileuser">Profile</a></li>
						<li><a href="/keranjang/{{ auth()->user()->id }}">Keranjang</a></li>
						<li><a href="/aboutus">About Us</a></li>
						<li><a href="/contactus">Contact Us</a></li> 
						<li><a href="/logout" onclick="return confirm('Apakah anda yakin ingin keluar');">Logout</a></li>                          
                        @else
						<li><a href="/logout">Login</a></li>
						<li><a href="/register">Register</a></li>
                        @endif
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
        
		
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="/js/bootstrap2.min.js"></script>
		<script src="/js/slick.min.js"></script>
		<script src="/js/nouislider.min.js"></script>
		<script src="/js/jquery.zoom.min.js"></script>
		<script src="/js/main2.js"></script>
	</body>
</html>