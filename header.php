<?php
$con=mysqli_connect('localhost','ulduz','777','kinom');
$tarix=date('Y-m-d H:i:s');
error_reporting(0);
?>
<body class="body">
	
	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="index.php" class="header__logo">
							<img src="#">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a href="index.php" class="header__nav-link">Ana səhifə</a>
								</li>

								<li class="header__nav-item">
									<a href="category.php" class="header__nav-link">Kateqoriya</a>
								</li>

								<li class="header__nav-item">
									<a href="about.php" class="header__nav-link">Haqqımızda</a>
								</li>
								
								<li class="header__nav-item">
									<a href="faq.php" class="header__nav-link">Dəstək</a>
								</li>

								<!-- dropdown -->
								<li class="dropdown header__nav-item">
									<a class="dropdown-toggle header_nav-link header_nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
										<li><a href="signin.php">Daxil ol</a></li>
										<li><a href="signup.php">Qeydiyyatdan keç</a></li>
										<li><a href="contact.php">Əlaqə</a></li>
										<li><a href="404.php">404</a></li>
									</ul>
								</li>
								<!-- end dropdown -->
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

								<a href="signin.php" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>Daxil ol</span>
								</a>
							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

            		<?php
                    if(isset($_POST['axtar']) && !empty($_POST['sorgu']))
                    {$axtar = " AND (film.title LIKE '%".$_POST['sorgu']."%') ";
                        
                        $yoxlama=mysqli_query($con,"SELECT * FROM film WHERE title='".$_POST['sorgu']."' ");
                        
                        $say=mysqli_num_rows($yoxlama);
                      
                    }  else
                     {echo'';}
                    ?>

		<!-- header search -->
		<form method="post" action="search.php" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
						    
							<input type="text" name="sorgu" placeholder="Film və seriallar üçün axtarın . . .">

							<button type="submit" name="axtar">Axtar</button>
							
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->