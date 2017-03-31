<!DOCTYPE html>
<html lang="en">
<head>
<title> Welcome to Jessore University of Science & Technology</title>
	<meta charset="utf-8">
	<link href="stylesheet/style.css"; rel="stylesheet"; type="text/css"/>

	<!-- slider start-->
		<link rel="stylesheet" type="text/css" href="stylesheet/css/bar/bar.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheet/css/dark/dark.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheet/css/default/default.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheet/css/light/light.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheet/css/nivo-slider.css"/>
	<!-- slider end-->
	
	<!-- google mape   start-->
		
		<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(23.2334345063, 89.1254171596),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	
		<!-- google mape  end-->
	<!-- div fixed
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	
	<script>
	$(function(){
    var stickyHeaderTop = $('#menu').offset().top;

    $(window).scroll(function(){
            if( $(window).scrollTop() > stickyHeaderTop ) {
                    $('#menu').css({position: 'fixed', top: '0px'});
                    $('#sticky').css('display', 'block');
            } else {
                    $('#menu').css({position: 'static', top: '0px'});
                    $('#sticky').css('display', 'none');
            }
		});
	});
	</script>
	-->

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->
</head>
<body>
	<div class="main">
		<div class="header">
		<img src="images/150.png"/>	
		</div>
		<div class="dropdownmenu">
		
		<ul>
		<li class="red_menu"><a href="">Home</a></li>
		<li class="green_menu"><a href="">About JUST</a>
			<ul>
				<li><a href="university/public/menu/just at aglance.html">Just at a glance</a></li>
				<li><a href="#">Location</a></li>
				<li><a href="#">Vision and Mission</a></li>
			</ul>
		</li>
		<li id="orange_menu"><a href="">Faculty Info</a>
			<ul>
				<li><a href="">Engineering and Technology</a></li>
				<li><a href="">Biological Science and Technology</a></li>
				<li><a href="">Applied Science and Technology</a></li>
				<li><a href="">Physical education,Language and Ethical Studies</a></li>
				<li><a href="">Faculty of Science</a></li>
			</ul>
		</li>
		
		<li id="black_menu"><a href="">Academics</a>
			<ul>
				<li><a href="">Degree Offered</a></li>
				<li><a href="">Academic Council</a></li>
				<li><a href="">Academic Expenses</a></li>
			</ul>		
		</li>
		
		<li id="black_menu"><a href="">Administrative</a>
			<ul>
				<li><a href="">Chancellor</a></li>
				<li><a href="">Vice-chancellor</a></li>
				<li><a href="">University Syndicate</a></li>
				<li><a href="">Administrative office</a></li>
			</ul>		
		</li>
		
		
		
		<li id="black_menu"><a href="">Admission</a>
			<ul>
				<li><a href="">Undergraduate Admission</a></li>
				<li><a href="">Postgraduate Admission</a></li>
				<li><a href="">Admission for Foreign Students</a></li>
				<li><a href="">Admission in Outher Courses <br\>(CCNA/Linux/Web/MS office)</a></li>
			</ul>		
		</li>
		
		<li id="black_menu"><a href="">Facilities</a>
			<ul>
				<li><a href="">Accomodetion</a></li>
				<li><a href="">Library</a></li>
				<li><a href="">Transport</a></li>
				<li><a href="">Medical</a></li>
			</ul>		
		</li>
	</ul>
			
		</div>