<html>
    <head>
        <!--script type="text/javascript" href="/assets/scripts/jquery-2.1.3.min.js"></script-->
        <!--script type="text/javascript" href="/assets/scripts/jquery-1.11.2.min.js"></script-->
        <!--script type="text/javascript" href="/assets/scripts/jquery-ui.js"></script>
        <script type="text/javascript" href="/assets/scripts/jquery-ui.css"></script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    
        <title>Mistery Vacations</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <script src="assets/scripts/slider.js"></script>
        <script>
            $(function() {
            $( "#departure" ).datepicker();
            });
            
            $(function() {
            $( "#arrival" ).datepicker();
            });
        </script>
        
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
