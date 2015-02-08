<html>
    <script type="text/javascript" href="/assets/scripts/jquery-2.1.3.min.js"></script> 
    <head>
		<title>Mistery Trip</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	</head>
	<body>
		<header id="menuTop">
			<div class="container">
				<ul class="nav nav-justified">
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Contact</a>
					</li>
					<li>
						<a href="#">Blog</a>
					</li>
					<li>
						<a href="#">Social Medias</a>
					</li>
				</ul>
			</div>
		</header>
        <section>
            <?php include("indexDiv.php") ?>
            <?php include("budget.php") ?>
            <?php include("calendar.php") ?>
            <?php include("information.php") ?>
            <?php include("done.php") ?>
        </section>
        <footer></footer>	
	</body>
</html>
