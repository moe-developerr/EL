<?php include 'include/head-top.php'; ?>
<head>
	<?php include 'include/head.php'; ?>
	<link rel="stylesheet" href="css/vendor/royalslider.css">
	<link rel="stylesheet" href="css/vendor/royalslider-skin.css">
	<link rel="stylesheet" href="css/pages/index.css">
</head>
<body>
	<?php include 'include/header.php'; ?>
	<main class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="slider rsDefault">
					<div class="slide"><a href="images/image.jpg" class="rsImg"></a></div>
					<div class="slide"><a href="images/image.jpg" class="rsImg"></a></div>
				</div>
			</div>
		</div>
		<section class="bg-gray has-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<a href="#" class="panel box">
							<h4 class="panel-heading">Baladiyat 2016</h4>
						  <div class="panel-body" style="background-image:url(images/image.jpg);">
						  	<div class="box__overlay">Some text on hover</div>
						  </div>
						</a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a href="#" class="panel box">
							<h4 class="panel-heading">Search for your ID card</h4>
						  <div class="panel-body" style="background-image:url(images/image.jpg);">
						  	<div class="box__overlay">Some text on hover</div>
						  </div>
						</a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a href="#" class="panel box">
							<h4 class="panel-heading">Are you a voter?</h4>
						  <div class="panel-body" style="background-image:url(images/image.jpg);">
						  	<div class="box__overlay">Some text on hover</div>
						  </div>
						</a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a href="#" class="panel box">
							<h4 class="panel-heading">Number of lebanese voters</h4>
						  <div class="panel-body" style="background-image:url(images/image.jpg);">
						  	<div class="box__overlay">Some text on hover</div>
						  </div>
						</a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a href="#" class="panel box">
							<h4 class="panel-heading">Make sure of your documents</h4>
						  <div class="panel-body" style="background-image:url(images/image.jpg);">
						  	<div class="box__overlay">Some text on hover</div>
						  </div>
						</a>
					</div>
					<div class="col-sm-6 col-md-4">
						<a href="#" class="panel box">
							<h4 class="panel-heading">HOTELINE 1766</h4>
						  <div class="panel-body" style="background-image:url(images/image.jpg);">
						  	<div class="box__overlay">Some text on hover</div>
						  </div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="has-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-8 articles--highlights">
						<h3 class="articles__title"><span class="fa fa-newspaper-o title-icon"></span>Highlights</h3>
						<a href="#" class="panel article">
							<h4 class="panel-heading article__title">19 Feb 2016</h4>
							<div class="panel-body article__body">May 8 first day of Municipal Elections. May 22 Jezzine Parliamentary Elections</div>
						</a>
						<a href="#" class="panel article">
							<h4 class="panel-heading article__title">19 Feb 2016</h4>
							<div class="panel-body article__body">May 8 first day of Municipal Elections. May 22 Jezzine Parliamentary Elections</div>
						</a>
						<a href="#" class="panel article">
							<h4 class="panel-heading article__title">19 Feb 2016</h4>
							<div class="panel-body article__body">May 8 first day of Municipal Elections. May 22 Jezzine Parliamentary Elections</div>
						</a>
						<a href="#" class="panel article">
							<h4 class="panel-heading article__title">19 Feb 2016</h4>
							<div class="panel-body article__body">May 8 first day of Municipal Elections. May 22 Jezzine Parliamentary Elections</div>
						</a>
					</div>
					<div class="col-md-4 articles--new">
						<h3 class="articles__title"><span class="fa fa-share-square-o title-icon"></span>New on the website</h3>
						<a href="#" class="panel article">
							<h4 class="panel-heading article__title">19 Feb 2016</h4>
							<div class="panel-body article__body">May 8 first day of Municipal Elections. May 22 Jezzine Parliamentary Elections</div>
						</a>
						<a href="#" class="panel article">
							<h4 class="panel-heading article__title">19 Feb 2016</h4>
							<div class="panel-body article__body">May 8 first day of Municipal Elections. May 22 Jezzine Parliamentary Elections</div>
						</a>
						<a href="#" class="panel article">
							<h4 class="panel-heading article__title">19 Feb 2016</h4>
							<div class="panel-body article__body">May 8 first day of Municipal Elections. May 22 Jezzine Parliamentary Elections</div>
						</a>
						<a href="#" class="panel article">
							<h4 class="panel-heading article__title">19 Feb 2016</h4>
							<div class="panel-body article__body">May 8 first day of Municipal Elections. May 22 Jezzine Parliamentary Elections</div>
						</a>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php include 'include/footer.php'; ?>
	<script src="js/vendor/jquery-2.1.4.min.js"></script>
	<script src="js/vendor/jquery.royalslider.min.js"></script>
	<script>
	/*===========
		Init slider
	===========*/
	(function () {
		!function _init() {
			$('.slider').royalSlider({
				autoScaleSlider: false,
				imageScaleMode: 'fill',
				controlNavigation: false
			});
		}();
	})();
	</script>
</body>
</html>