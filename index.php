<?php
	include('includes/header.php');
?>
<body>
	<!-- header-section-starts -->

	<div class="full">

		<?php include('includes/menu.php');?>

		<div class="main">
		<div class="header">
			<div class="top-header">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>

				<form action="" class="navbar-form">
					<div class="search">
						<input type="text"  value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</div>
				</form>

				<?php
					include('includes/log-in.php');
				?>

				<?php
				include('includes/register.php');
				?>

				<div class="clearfix"></div>
		</div>
			<div class="header-info">
				<h2>ГОРОД ГЕРОЕВ 6</h2>
				<p class="age"><a href="#">All Age</a> Don Hall, Chris Williams</p>
				<p class="review">Рейтинг	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;  8,5/10</p>
				<p class="review reviewgo">Жанр	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp; Animation, Action, Comedy</p>
				<p class="review">Release &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp; 7 November 2014</p>
				<p class="special">The special bond that develops between plus-sized inflatable robot Baymax, and prodigy Hiro Hamada, who team up with a group of friends to form a band of high-tech heroes.</p>
				<a class="video" href="#"><i class="video1"></i>ПОСМОТРЕТЬ ТРЕЙЛЕР</a>
				<a class="book" right onclick="show1('block')" name="zakaz"><i class="book1" ></i>КУПИТЬ БИЛЕТ</a>
			</div>
		</div>
			<script type="text/javascript">
				function show1(state){
					document.getElementById('window1').style.display = state;
					document.getElementById('wrap1').style.display = state;
				}
			</script>
			<!-- Задний прозрачный фон-->
			<div onclick="show1('none')" id="wrap1"></div>
			<!-- Само окно-->
			<div id="window1">
				<div class="jumbotron">
					<form action="" method="post">
						<p class="text">Выберите зал и ряд</p>
						<div class="form-group">
							<label for="Film_film">Выберите фильм</label>
							<select name="film" class="form-control" id="Film_film">
								<option value="time" selected="selected">Время</option>
								<option value="bigHero">Город героев 6</option>
								<option value="escapePlan">План побега</option>
								<option value="Interstellar-film">Интерстеллар</option>
							</select>
						</div>

						<div class="form-group">
							<label for="film_hall">Выберите зал</label>
							<select name="Hall" class="form-control" id="film_hall">
								<option value="3D" selected="selected">3D зала</option>
								<option value="Big_hall">Большой зал</option>
								<option value="small_hall">Малой зал</option>
							</select>
						</div>

							<div class="radio">
								<label for="first_fifth">1-5 ряд</label>
								<input type="radio" name="row_hall" value="from_the_first_to_the_fifth" id="first_fifth" class="row_film">
							</div>
							<div class="radio">
								<label for="sixth_ninth">6-10 ряд</label>
								<input type="radio" name="row_hall" value="from_sixth_to_ninth" id="sixth_ninth" class="row_film">
							</div>
							<div class="radio">
								<label for="fifth_fifteenth">10-15 ряд</label>
								<input type="radio" name="row_hall" value="from_the_fifth_to_the_fifteenth" id="fifth_fifteenth" class="row_film">
							</div>
								<div class="form-group">
								<label for="ticket_quantity">Количество билетов</label>
								<input type="text" class="form-control" name="quantity" id="ticket_quantity">
								</div>
						<div>
							<label for="cinema_ticket">Заказать доставку</label>
							<input type="checkbox" name="ticket" id="cinema_ticket" value="on">
						</div>
						<div id="result">

						</div>
						<button class="btn btn-primary" value="Заказать"  onclick="submitOrder(); return false;">Замовити</button>
						<button class="btn btn-primary" value="Отмена">Отмена</button>
					</form>
				</div>

			</div>


		<div class="review-slider">
			 <ul id="flexiselDemo1">
			<li><img src="images/r1.jpg" alt=""/></li>
			<li><img src="images/r2.jpg" alt=""/></li>
			<li><img src="images/r3.jpg" alt=""/></li>
			<li><a href="Interstellar.php"><img src="images/r4.jpg" alt=""/></a></li>
			<li><a href="planet of the apes.php"><img src="images/r5.jpg" alt=""/></a></li>
			<li><a href="Big Hero 6.php"><img src="images/r6.jpg" alt=""/></a></li>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 4
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
		<div class="news">
			<div class="col-md-6 news-left-grid">
				<h3>Don’t be late,</h3>
				<h2>Book your ticket now!</h2>
				<h4>Easy, simple & fast.</h4>
				<a href="#"><i class="book"></i>BOOK TICKET</a>
				<p>Get Discount up to <strong>10%</strong> if you are a member!</p>
			</div>
			<div class="col-md-6 news-right-grid">
				<h3>News</h3>
				<div class="news-grid">
					<h5>Lorem Ipsum Dolor Sit Amet</h5>
					<label>Nov 11 2014</label>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				</div>
				<div class="news-grid">
					<h5>Lorem Ipsum Dolor Sit Amet</h5>
					<label>Nov 11 2014</label>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				</div>
				<a class="more" href="#">MORE</a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="more-reviews">
			 <ul id="flexiselDemo2">
			<li><img src="images/m1.jpg" alt=""/></li>
			<li><img src="images/m2.jpg" alt=""/></li>
			<li><img src="images/m3.jpg" alt=""/></li>
			<li><img src="images/m4.jpg" alt=""/></li>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo2").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>	
		</div>
	</div>
	<div class="clearfix"></div>
	<!-- Bootstrap core JavaScript
        ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery-1.12.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	<script src="js/prices.js"></script>
	<script src="js/main.js"></script>
</body>
</html>