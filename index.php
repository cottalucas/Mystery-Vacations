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
        <script src="assets/scripts/fbScripts.js"></script>
    </head>
	<body onload="initSlider()">
		<!-- BEGIN Facebook Import-->
        <div id="fb-root"></div>
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                    appId      : '720799318033861',
                    xfbml      : true,
                    version    : 'v2.2',
                    cookie     : true
                });
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "https://connect.facebook.net/en_US/all.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- END Facebook Import-->
        
        <header id="menuTop">
			<div class="container">
				<ul class="nav nav-justified">
                                        <li>
                                            <img src="logo.png" width="200" height="70"><br>
                                        </li>
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
	</body>
</html>
