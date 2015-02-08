<html>
    <head>
		<title>Mistery Vacations</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="assets/scripts/slider.js"></script>
	</head>
	<body onload="initSlider()">
		<header id="menuTop">
			<div class="container">
				<ul class="nav nav-justified">
					<li>
						<a href="index.php">Home</a>
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
