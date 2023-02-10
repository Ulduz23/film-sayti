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
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Faiq Rəhimov">
	<title>Kateqoriya</title>

</head>
<?php include"header.php"; ?>
	<!-- page title -->
	<section class="section section--first section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">Kateqoriya</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="index.php">Baş səhifə</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Kateqoriya</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->
    <!-- filter -->
	<div class="filter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="filter__content">
						<div class="filter__items">
							<!-- filter item -->
							<div class="filter__item" id="filter__genre">
								<span class="filter__item-label">Janrlar:</span>

								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="A / Z">
									<span></span>
								</div>

								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
							<?php
                            $sec = mysqli_query($con,"SELECT * FROM film WHERE genres IN('Adventure','Fantasy','Action','Family','Comedy','Science Fiction','Drama','Horror','Thriller','Crime','Mystery','War','Romance') GROUP BY genres");
                            while($info = mysqli_fetch_array($sec))
                            {echo'<a href="category2.php?genres='.$info['genres'].'" class="filter__items">'.$info['genres'].'</a>';}
                    		?>
								</ul>
							</div>
							<!-- end filter item -->

							<!-- filter item -->
							<div class="filter__item" id="filter__rate">
								<span class="filter__item-label">IMBd:</span>

								<div class="filter__item-btn dropdown-toggle" role="button" id="filter-rate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="filter__range">
										<div id="filter__imbd-start"></div>
										<div id="filter__imbd-end"></div>
									</div>
									<span></span>
								</div>

								<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-rate">
									<div id="filter__imbd"></div>
								</div>
							</div>
							<!-- end filter item -->

							<!-- filter item -->
							<div class="filter__item" id="filter__year">
								<span class="filter__item-label">Yayınlanma tarixi:</span>

								<div class="filter__item-btn dropdown-toggle" role="button" id="filter-year" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="filter__range">
										<div id="filter__years-start"></div>
										<div id="filter__years-end"></div>
									</div>
									<span></span>
								</div>

								<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-year">
									<div id="filter__years"></div>
								</div>
							</div>
							<!-- end filter item -->
						</div>
						
						<!-- filter btn -->
						<button class="filter__btn" name="filt" type="button">Filtrlə</button>
						<!-- end filter btn -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end filter -->


	<!-- catalog -->
	<div class="catalog">
		<div class="container">
			<div class="row">
				<!-- card -->
		<?php
                    
                    $sec = mysqli_query($con,"SELECT * FROM film WHERE genres = '".$_GET['genres']."' ");
                    while($info = mysqli_fetch_array($sec))
                    {
                        echo'
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="card">
						<div class="card__cover">
							<img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$info['poster'].'" alt="">
							<a href="single.php?id='.$info['id'].'" class="card__play">
								<i class="icon ion-ios-play"></i>
							</a>
						</div>
						<div class="card__content">
							<h3 class="card__title"><a href="single.php?id='.$info['id'].'">'.$info['title'].'</a></h3>
							<span class="card__category">
								<a href="category2.php?genres='.$info['genres'].'">'.$info['genres'].'</a>
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
	<!-- end catalog -->

<?php include"premyera.php"; ?> 

<?php include"footer.php"; ?> 

</html>