	<!-- expected premiere -->
	<section class="section section--bg" data-bg="img/section/section.jpg">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title">En mehsur filmler</h2>
				</div>
				<!-- end section title -->

				<!-- card -->
				<?php
                    $sec = mysqli_query($con,"SELECT * FROM film WHERE vote_average > 8.0 ORDER BY id DESC LIMIT 6");
                    while($info = mysqli_fetch_array($sec))
                    {echo'
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
    								<a href="category.php?genres='.$info['genres'].'">'.$info['genres'].'</a>
    							</span>
    							<span class="card__rate"><i class="icon ion-ios-star"></i>'.$info['vote_average'].'</span>
    						</div>
    					</div>
    				</div>';
                    }
                    ?>
				<!-- end card -->

				<!-- section btn -->
				<div class="col-12">
					<a href="#" class="section__btn">Show more</a>
				</div>
				<!-- end section btn -->
			</div>
		</div>
	</section>
	<!-- end expected premiere -->
