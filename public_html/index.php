<?php
require_once '../parsing/speed.php'; // подключаем скрипт которые чекает скорость ветра на данный момент.
$speed = new Speed();
$info = $speed->speedWind();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>W-S-K</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <link rel="stylesheet" href="css/windnow.css" />
        <link rel="stylesheet" href="css/odometer-theme-car.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <script type="text/javascript">
            var speed = '<?php echo $info; ?>';

            setTimeout(function(){
                odometer.innerHTML = speed;
            }, 1000);
        </script>
    </head>
	<body>
    <!-- Page preloader -->
    <div id="hola">
        <div id="preloader">
            <span></span>
            <span></span>
        </div>
    </div>

		<!-- Header -->
			<section id="header">
				<header>
					<h1>Скорость ветра в Кыргызстане</h1>
					<p>Статистика</p>
				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly-middle">Посмотреть</a>
				</footer>
			</section>

		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Бишкек</h2>
                    <div id="odometer" class="odometer">30</div>
                    <h1 class="intro">М/C</h1>
                </header>
				<footer>
					<a href="#bishkek" class="button style2 scrolly">Мониторинг</a>
				</footer>
			</section>

		<!-- Feature 1 -->
			<article id="bishkek" class="container box style1 right">
				<a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
				<div class="inner">
					<header>
                        <h2>Бишкек<br/></h2>
						<h2>Статистика на сегодня<br/></h2>
					</header>
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
                <a href="#introtokmok" class="button style2 scrolly-middle">Токмок</a>
			</article>
        </br></br></br></br></br></br></br></br></br></br>
        <!-- Banner -->
        <section id="banner">
            <header>
                <h2>Токмок</h2>
                <div id="odometertokmok" class="odometer">30</div>
                <h1 id="introtokmok">М/C</h1>
            </header>
            <footer>
                <a href="#tokmok" class="button style2 scrolly">Мониторинг</a>
            </footer>
        </section>

        <!-- Feature 1 -->
        <article id="tokmok" class="container box style1 right">
            <div class="inner">
                <header>
                    <h2>Lorem ipsum<br />
                        dolor sit amet</h2>
                </header>
                <p>Tortor faucibus ullamcorper nec tempus purus sed penatibus. Lacinia pellentesque eleifend vitae est elit tristique velit tempus etiam.</p>
            </div>
        </article>



        <section id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Developer <a href="https://www.facebook.com/profile.php?id=100007217865952" target="_blank">Rishat Sultanov.</a></li><li>Open Source: <a href="https://github.com/Rishats" target="_blank">GitHub</a></li>
				</ul>
			</div>
		</section>

        <div><div class="falling-leaves"></div></div>
		<!-- Scripts -->
            <script type="text/javascript" src="js/Chart.js"></script>
            <script type="text/javascript" src="js/bishkek24.js"></script>
            <script src="js/odometer.js"></script>
            <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
            <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>
    <script src="js/index.js"></script>



	</body>
</html>