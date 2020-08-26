<?php
	require_once('include/head.php');
?>

	<title>ATMA | Home</title>
</head>

<body>

	<?php include_once('include/header.php'); ?>

	<content>

		<div id="carouselsite" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselsite" data-slide-to="0" class="active"></li>
				<li data-target="#carouselsite" data-slide-to="1"></li>
				<li data-target="#carouselsite" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
			 		<img class="d-block w-100" src="media/img/temp/carousel01.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="media/img/temp/carousel02.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="media/img/temp/carousel03.jpeg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselsite" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#carouselsite" role="button" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>

		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-12 bg-warning">
						content
					</div>
				</div>
			</div>
		</div>
	</content>

	<?php require_once('include/footer.php'); ?>

	<?php require_once('include/foot.php'); ?>