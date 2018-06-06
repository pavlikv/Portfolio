<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pavel Vashchuk</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            h4 {
                color: black;
            }
            /* Full-width input fields */
            input[type=text], input[type=password] {
                text-align: center;
                width: 70%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 50%;

            }
            button:hover {
                opacity: 0.8;
            }
            .buttonHolder{
                text-align: center;
            }
            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                padding-top: 60px;
                color:black;
            }

            /* Modal Content/Box */
            .modal-content {
                background-color: #fefefe;
                margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
            }

            /* Add Zoom Animation */
            .animate {
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
                from {-webkit-transform: scale(0)}
                to {-webkit-transform: scale(1)}
            }

            @keyframes animatezoom {
                from {transform: scale(0)}
                to {transform: scale(1)}
            }
        </style>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<!--<span class="logo"><img src="images/logo.svg" alt="" /></span>-->
						<h1>Pavel Vashchuk</h1>
						<p>Software Developer</p>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Introduction</a></li>
							<li><a href="#portfolio">Portfolio</a></li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="#admin">Contact Table</a></li>
                            <li><a onclick="document.getElementById('loginPop').style.display='block'">Login</a></li>
						</ul>
					</nav>

                <!-- Login popup -->
                <div id="loginPop" class="modal">

                    <form class="modal-content animate" action="#">

                        <div class="container buttonHolder">
                            <h4>Username</h4>
                            <input type="text" placeholder="Enter Username" name="uname" required>

                            <h4>Password</h4>
                            <input type="password" placeholder="Enter Password" name="psw" required>


                            <button type="submit">Login</button>

                        </div>
                    </form>
                </div>


                <!-- Main -->

					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>About me</h2>
										</header>
										<p>I am Pavel a software development student.
											I like learning new things, improving my current skills in software
											development and like seeing a finished product. I like collaborating in a
											great team and working together effectively to produce a valuable product.
											I have made a website for a non profit organization and working on a mobile
											application for construction companies to use. I am seeking a job in the
											software development field, contact me if you would like a copy of my resume.</p>
									</div>
									<span class="image"><img src="images/portfolioImage.jpg" alt="" /></span>
								</div>
							</section>

						<!-- portfolio Section -->
							<section id="portfolio" class="main special">
								<header class="major">
									<h2>Portfolio</h2>
								</header>
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1"></li>
										<li data-target="#myCarousel" data-slide-to="2"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img src="images/project1.png" alt="StJamesOutreach">
											<div>
												<h3>St James Outreach</h3>
												<p>For a non-profit organization to help people in need</p>
											</div>
										</div>

										<div class="item">
											<img src="images/project2.png" alt="JobsitePM">
											<div>
												<h3>JobsitePM Mobile Application</h3>
												<p>Photo capturing and managing application for construction companies</p>
											</div>
										</div>
									</div>

									<!-- Left and right controls -->
									<a class="left carousel-control" href="#myCarousel" data-slide="prev" style="background:none">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#myCarousel" data-slide="next" style="background:none">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</section>

						<!-- contact Section -->
							<section id="contact" class="main special">
								<header class="major">
									<h2>Contact</h2>
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
											</div>
											<div class="12u$">
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Send Message" class="special" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
								</header>


							</section>

<!--                        --><?php
//                            <!--Admin (Contact Table) -->
//							<section id="admin" class="main special">
//								<header class="major">
//									<h2>Congue imperdiet</h2>
//									<p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
//									posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
//								</header>
//								<footer class="major">
//									<ul class="actions">
//										<li><a href="generic.html" class="button special">Get Started</a></li>
//										<li><a href="generic.html" class="button">Learn More</a></li>
//									</ul>
//								</footer>
//							</section>
//							?>

					</div>

				<!-- Footer -->
					<!--<footer id="footer">-->
						<!--<section>-->
							<!--<h2>Aliquam sed mauris</h2>-->
							<!--<p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat magna adipiscing tempus etiam dolore veroeros. eget dapibus mauris. Cras aliquet, nisl ut viverra sollicitudin, ligula erat egestas velit, vitae tincidunt odio.</p>-->
							<!--<ul class="actions">-->
								<!--<li><a href="generic.html" class="button">Learn More</a></li>-->
							<!--</ul>-->
						<!--</section>-->
						<!--<section>-->
							<!--<h2>Etiam feugiat</h2>-->
							<!--<dl class="alt">-->
								<!--<dt>Address</dt>-->
								<!--<dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>-->
								<!--<dt>Phone</dt>-->
								<!--<dd>(000) 000-0000 x 0000</dd>-->
								<!--<dt>Email</dt>-->
								<!--<dd><a href="#">information@untitled.tld</a></dd>-->
							<!--</dl>-->
							<!--<ul class="icons">-->
								<!--<li><a href="#" class="icon fa-twitter alt"><span class="label">Twitter</span></a></li>-->
								<!--<li><a href="#" class="icon fa-facebook alt"><span class="label">Facebook</span></a></li>-->
								<!--<li><a href="#" class="icon fa-instagram alt"><span class="label">Instagram</span></a></li>-->
								<!--<li><a href="#" class="icon fa-github alt"><span class="label">GitHub</span></a></li>-->
								<!--<li><a href="#" class="icon fa-dribbble alt"><span class="label">Dribbble</span></a></li>-->
							<!--</ul>-->
						<!--</section>-->
						<!--<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>-->
					<!--</footer>-->

			</div>

		<!-- Scripts -->
        <script>
            // Get the modal
            var modal = document.getElementById('loginPop');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>