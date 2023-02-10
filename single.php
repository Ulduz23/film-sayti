<?php
include"header.php";

if(!empty($_GET['id']))
{
    $id = (int)$_GET['id'];
    $tsec = mysqli_query($con,"SELECT * FROM film WHERE id='".$id."'");
    
    if(mysqli_num_rows($tsec)>0)
    {$tinfo = mysqli_fetch_array($tsec);}
    else
    {echo'<meta http-equiv="refresh" content="0; URL=index.php">'; exit;}
}

?>


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
	<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>

<?php  include"header.php"; ?>

	<!-- details -->
	<section class="section details">
		<!-- details background -->
		<div class="details__bg" data-bg="img/home/home__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="details__title"><?=$tinfo['title']?></h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-12 col-xl-6">
					<div class="card card--details">
						<div class="row">
							<!-- card cover -->
							<div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
								<div class="card__cover">
                                    <?php echo'	<div class="card__cover">
									 <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$tinfo['poster'].'" alt="">
								</div> 
							 ';	?>
							 </div>
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
								<div class="card__content">
									<div class="card__wrap">
										<span class="card__rate"><i class="icon ion-ios-star"></i><?=$tinfo['vote_average']?></span>

										<ul class="card__list">
											<li>HD</li>
											<li><?=$tinfo['language']?></li>
										</ul>
									</div>

									<ul class="card__meta">
										<li><span>Genre:</span> <a href="category.php?genres=<?=$tinfo['genres']?>"><?=$tinfo['genres']?></a>
										<li><span>Release year:</span> <?=$tinfo['release_date']?></li>
										<li><span>Running time:</span> <?=$tinfo['runtime']?></li>
										<li><span>Country:</span><?=$tinfo['country']?></li>
									</ul>

									<div class="card__description card__description--details"><?=$tinfo['overview']?></div>
								</div>
							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->

				<!-- player -->
				<div class="col-12 col-xl-6">
				<iframe width="600" height="300" src="https://www.youtube.com/embed/<?=$tinfo['video']?>?list=RD11vg9_3FBAo" title="<?=$tinfo['title']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<!-- end player -->

				<div class="col-12">
					<div class="details__wrap">
						<!-- availables -->
						<div class="details__devices">
							<span class="details__devices-title">Available on devices:</span>
							<ul class="details__devices-list">
								<li><i class="icon ion-logo-apple"></i><span>IOS</span></li>
								<li><i class="icon ion-logo-android"></i><span>Android</span></li>
								<li><i class="icon ion-logo-windows"></i><span>Windows</span></li>
								<li><i class="icon ion-md-tv"></i><span>Smart TV</span></li>
							</ul>
						</div>
						<!-- end availables -->

						<!-- share -->
						<div class="details__share">
							<span class="details__share-title">Share with friends:</span>

							<ul class="details__share-list">
								<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
								<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
								<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
								<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
							</ul>
						</div>
						<!-- end share -->
					</div>
				</div>
			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Kesf et</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Comments</a>
							</li>

						
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Comments">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Comments</a></li>

									
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

<?php

if(isset($_POST['d']))
{
        $ad=mysqli_real_escape_string($con,htmlspecialchars(strip_tags(trim($_POST['ad']))));
		$soyad=mysqli_real_escape_string($con,htmlspecialchars(strip_tags(trim($_POST['soyad']))));
		$email=mysqli_real_escape_string($con,htmlspecialchars(strip_tags(trim($_POST['email']))));
		$mesaj=mysqli_real_escape_string($con,htmlspecialchars(strip_tags(trim($_POST['mesaj']))));
		
    if(!empty($ad) && !empty($soyad) && !empty($email) && !empty($mesaj))
    {
		
    $daxil=mysqli_query($con,"INSERT INTO comments(mid,ad,soyad,email,mesaj) VALUES('".$id."','".$ad."','".$soyad."','".$email."','".$mesaj."')");
}

}
?>

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 col-xl-8">
					<!-- content tabs -->
					<div class="tab-content" id="#comments">
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
							<div class="row">
								<!-- comments -->
								<div class="col-12">
									<div class="comments">
										<ul class="comments__list">
											<li class="comments__item">
							
							<?php		
							
							        $csec=mysqli_query($con,"SELECT * FROM comments WHERE mid = '".$id."' ORDER BY id DESC");
							        
							        if(mysqli_num_rows($csec)>0)
							        {
							            while($cinfo = mysqli_fetch_array($csec))
							            {echo'
												<div class="comments__autor">
													<img class="comments__avatar" src="profile.jfif" alt="">
													<span class="comments__name">'.$cinfo['ad'].' '.$cinfo['soyad'].'</span>
													<span class="comments__time">'.$cinfo['tarix'].'</span>
												</div>
												<p class="comments__text">'.$cinfo['mesaj'].'</p>
												<div class="comments__actions">
													<div class="comments__rate">
														<button type="button"><i class="icon ion-md-thumbs-up"></i>12</button>
														<button type="button">7<i class="icon ion-md-thumbs-down"></i></button>
													</div>
													<button type="button"><i class="icon ion-ios-share-alt"></i>Reply</button>
													<button type="button"><i class="icon ion-ios-quote"></i>Quote</button>
												</div>';}
							        }
							        else
							              {echo'
												<div class="comments__autor">
												<p class="comments__text">Filmin ilk şərhini siz yaza bilərsiniz . . . </p>
										     </div>
										';}
								?>
											</li>
										</ul>
								<form method="post" action="#comments" class="form">
        							<input id="ad" type="text" class="form__input" name="ad" placeholder="Adınız">
        							<input id="soyad"type="text" class="form__input" name="soyad" placeholder="Soyadınız">
        							<input id="email" type="text" class="form__input" name="email" placeholder="Emailiniz">
        							<textarea id="text" name="mesaj" class="form__textarea" placeholder="Şərhinizi əlavə edin . . ."></textarea>
									<button type="submit" class="form__btn" name="d">Göndər</button>
										</form>
									</div>
								</div>
								<!-- end comments -->
							</div>
						</div>

					</div>
					<!-- end content tabs -->
				</div>

				<!-- sidebar -->
				<div class="col-12 col-lg-4 col-xl-4">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title section__title--sidebar">Bəyənə biləcəkləriniz . . .</h2>
						</div>
						<!-- end section title -->
   
						<!-- card -->
			  <?php
			        $sec = mysqli_query($con,"SELECT * FROM film ORDER BY id DESC LIMIT 4");
                    while($info = mysqli_fetch_array($sec))
				    {echo'
				        <div class="col-6 col-sm-4 col-lg-6">
							<div class="card">
								<div class="card__cover">
									<img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$info['poster'].'"" alt="">
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
				<!-- end sidebar -->
			</div>
		</div>
	</section>
	<!-- end content -->
<?php  include"footer.php"; ?>

	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>

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