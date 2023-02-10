<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FlixGo.tk</title>

</head>

<?php include "header.php"; ?>

	<!-- home -->
	<section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg2.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg3.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg4.jpg"></div>
		</div>
		<!-- end home bg -->

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>YENI SEZON</b> FILMLERI</h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

				<div class="col-12">
					<div class="owl-carousel home__carousel">
					<?php
					$sec=mysqli_query($con,"SELECT * FROM film ORDER BY id DESC LIMIT 10");
					while($info=mysqli_fetch_array($sec))
				{
				   echo'
						<div class="item">
							<!-- card -->
							<div class="card card--big">
								<div class="card__cover">
									<img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$info['poster'].'" height="380" alt="">
									<a href="single.php?id='.$info['id'].'" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="single.php?id='.$info['id'].'">'.$info['title'].'</a></h3>
									<span class="card__category">
										<a href="category.php?genres='.$info['genres'].'">'.$info['genres'].'</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>'.$info['vote_average'].'</span>
								</div>
							</div>
						</div>';}
							?>
							<!-- end card -->
						</div>

					
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end home -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Filmler</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Yeni filmler</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Filmler</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Seriallar</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Cizgi filmler</a>
							</li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="New items">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Yeniler</a></li>

									<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Filmler</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Seriallar</a></li>

									<li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Cizgi filmler</a></li>
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">
						<!-- card -->                                           <!-- TAB 1 -->
						<?php
                    $sec = mysqli_query($con,"SELECT * FROM film ORDER BY id DESC LIMIT 10,8");
                    while($info = mysqli_fetch_array($sec))
                    {
                        echo'
						<div class="col-6 col-sm-12 col-lg-6">
							<div class="card card--list">
								<div class="row">
									<div class="col-12 col-sm-4">
										<div class="card__cover">
											<img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$info['poster'].'" height="270" alt="">
											<a href="single.php?id='.$info['id'].'" class="card__play">
												<i class="icon ion-ios-play"></i>
											</a>
										</div>
									</div>

									<div class="col-12 col-sm-8">
										<div class="card__content">
											<h3 class="card__title"><a href="single.php?id='.$info['id'].'">'.$info['title'].'</a></h3>
											<span class="card__category">
												<a href="category.php?genres='.$info['genres'].'">'.$info['genres'].'</a> 
											</span>

											<div class="card__wrap">
												<span class="card__rate"><i class="icon ion-ios-star"></i>'.$info['vote_average'].'</span>

												<ul class="card__list">
													<li>HD</li>
													<li>'.$info['language'].'</li>
												</ul>
											</div>

											<div class="card__description">
												<p>'.$info['overview'].'</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>';
                    }
                    ?>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->                                       <!-- TAB 2 -->
						<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
					<div class="row">
						<!-- card -->
	        <?php
                    $sec = mysqli_query($con,"SELECT * FROM film WHERE genres NOT IN('Animation') ORDER BY id DESC LIMIT 18,24");
                    while($info = mysqli_fetch_array($sec))
                    {
                        echo'
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$info['poster'].'" height="240" alt="">
									<a href="single.php?id='.$info['id'].'" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="single.php?id='.$info['id'].'">'.$info['title'].'</a></h3>
									<span class="card__category">
										<a href="category.php?genres='.$info['genres'].'">'.$info['genres'].'</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>'.$info['vote_average'].'</span>
								</div>
							</div>
						</div>';}
					?>
						<!-- end card -->
					</div>
				</div>
						
                                    <!--  TAB-3  -->
                      
				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
					<div class="row">
						<!-- card -->
			<?php
                    $sec = mysqli_query($con,"SELECT * FROM film WHERE genres NOT IN('Animation') ORDER BY id DESC LIMIT 42,18 ");
                    while($info = mysqli_fetch_array($sec))
                    {
                        echo'
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$info['poster'].'" height="240" alt="">
									<a href="single.php?id='.$info['id'].'" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="single.php?id='.$info['id'].'">'.$info['title'].'</a></h3>
									<span class="card__category">
										<a href="category.php?genres='.$info['genres'].'">'.$info['genres'].'</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>'.$info['vote_average'].'</span>
								</div>
							</div>
						</div>';}
				?>
						<!-- end card -->
					</div>
				</div>
				

				                                        <!--  TAB-4  -->

				<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
					<div class="row">
						<!-- card -->
			<?php
                    $sec = mysqli_query($con,"SELECT * FROM film WHERE genres IN('Animation') ORDER BY id DESC LIMIT 18");
                    while($info = mysqli_fetch_array($sec))
                    {
                        echo'
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card">
								<div class="card__cover">
									<img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$info['poster'].'" height="240" alt="">
									<a href="single.php?id='.$info['id'].'" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="single.php?id='.$info['id'].'">'.$info['title'].'</a></h3>
									<span class="card__category">
										<a href="category.php?genres='.$info['genres'].'">'.$info['genres'].'</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>'.$info['vote_average'].'</span>
								</div>
							</div>
						</div>';}
				?>
						<!-- end card -->
					</div>
				</div>
			</div>
			<!-- end content tabs -->
		</div>
	</section>
	<!-- end content -->

<?php include "premyera.php"; ?>


	<!-- partners -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--no-margin">Our Partners</h2>
				</div>
				<!-- end section title -->

				<!-- section text -->
				<div class="col-12">
					<p class="section__text section__text--last-with-margin">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
				</div>
				<!-- end section text -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/themeforest-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/audiojungle-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/codecanyon-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/photodune-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/activeden-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="img/partners/3docean-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->
			</div>
		</div>
	</section>
	<!-- end partners -->

<?php include"footer.php"; ?>

	<!-- JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>


</html>