<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Document</title>
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
-->
  <link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" media="all" href="css/animate.css">
</head>
<body>
	 <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
 <!--<span class="hamb-top"></span>
 <span class="hamb-middle"></span>
 <span class="hamb-bottom"></span>-->
 <img src="images/burger.png" alt="">
 </button>
	<!-- Sidebar -->
 <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
 <ul class="nav sidebar-nav">
 <li>
 <img src="images/logo-w.png" alt="">
 </li>
 <li>
 <a href="#">Наши проекты</a>
 </li>
 <li>
 <a href="#">Новости</a>
 </li>
 <li>
 <a href="#">Контакты</a>
 </li>
 <li>
 <a href="#">Галерея</a>
 </li>
 </ul>
 </nav>
 <!-- /#sidebar-wrapper -->
	<section class="header-section animated bounceInDown">
	<header class="m-3 p-2 hidden-sm-down">
			<div class="container">
			<div class="row">
				<div class="col-md-2 align-items-center">
					<img src="images/logo.png" alt="">
				</div>
				<div class="col-md-8 contacts align-items-center d-inline-flex justify-content-end">
					<div><img src="images/map.png" alt="">Татарстан</div>
					<div><img src="images/tel.png" alt="">+7 (927) 927 92 92</div>
				</div>
				<div class="col-md-2 justify-content-around d-inline-flex align-items-center">
					<a href=""><img src="images/soc-insta.png" alt=""></a><a href=""><img src="images/soc-youtube.png" alt=""></a><a href=""><img src="images/soc-vk.png" alt=""></a>
				</div>
				</div>
			</div>
	</header>
	<header class="m-3 p-2 hidden-md-up">
			<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<img src="images/logo.png" alt="">
				</div>
				<div class="col-md-12 contacts align-content-start" style="margin-left: -20px;">
					<div class="text-left"><img src="images/map.png" alt="">Татарстан</div>
					<div class="text-left"><img src="images/tel.png" alt="">+7 (927) 927 92 92</div>
				</div>
				</div>
			</div>
	</header>
	</section>
	<section class="first-section d-flex align-items-center">
			<div class="container animated fadeIn delay-6s">
				<div class="row offset-md-6">
					<div class="col-sm-6 col-xs-12">
						<h1>Мы создадим для вас <br /><span class="red">уют</span></h1>
						<p>Мы берём все трудности по ремонту на себя</p>
						<button class="btn">заказать рассчеты</button>
					</div>
				</div>
				<div class="col-md-2 justify-content-center d-inline-flex align-items-center hidden-md-up">
					<a href=""><img src="images/soc-insta.png" alt=""></a><a href=""><img src="images/soc-youtube.png" alt=""></a><a href=""><img src="images/soc-vk.png" alt=""></a>
				</div>
			</div>
	</section>
	<section class="second-section">
		<div class="container">
			<div class="row">
				<div class="title d-flex justify-content-center">
					<h2>Наши проекты</h2>
				</div>
	      <div class="row p-2">
	        <div class="col-md-4 col-xs-12">
	          <div class="nav flex-column nav-pills wow animated bounceInLeft" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Квартиры</a>
							<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Коттеджи</a>
							<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Офисы</a>
							<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Кафе и ретсораны</a>
						</div>
	        </div>
	        <div class="col-md-8 col-xs-12">
        	  <div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane show active wow animated bounceInRight" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
								<div class="row">
	                    <div class="col-md-4 hidden-sm-down">
											<a data-toggle="modal" data-target="#exampleModalCentered"><img src="images/vid.jpg" alt=""></a>
											<!-- Modal -->
											<div class="modal" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
											  <div class="modal-dialog modal-dialog-centered" role="document">
											    <div class="modal-content">
											      <div class="embed-responsive embed-responsive-16by9">
														  <img class="d-block col-6" src="https://placehold.it/450x280?text=1">
														</div>
											    </div>
											  </div>
											</div>
										</div>
										<div class="col-xs-8 col-md-8">
										<div class="row">
											<div class="col-12 mob-first">
												<h3>Кухня - гостиная</h3>
												<p>Кухня, в современном, мире стала не только местом для приготовлении пищи, но и место где можно првоести время с друзьями и просто отдохнуть.</p>
												<p>Здесь необходимо сочетать высокие технологии и комфорт. Наши дизайнеры сделают проект, полностью отвечающим Вашим потребностям и пожеланиям</p>
											</div>
											<div id="multiCarousel" class="carousel slide col-12 mob-second" data-ride="carousel">
												<div class="carousel-inner" role="listbox">
												  <ol class="carousel-indicators">
												    <li data-target="#carousel" data-slide-to="0" class="active"></li>
												    <li data-target="#carousel" data-slide-to="1"></li>
												    <li data-target="#carousel" data-slide-to="2"></li>
												  </ol>
												  <div class="row">
																    <div class="carousel-item active">
																      <img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=1">
																    </div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=2">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=3">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=4">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=5">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=6">
																		</div>
														</div>
												</div>
																  <a class="carousel-control-prev" href="#multiCarousel" role="button" data-slide="prev">
																    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
																    <span class="sr-only">Предыдущий</span>
																  </a>
																  <a class="carousel-control-next" href="#multiCarousel" role="button" data-slide="next">
																    <span class="carousel-control-next-icon" aria-hidden="true"></span>
																    <span class="sr-only">Cледующий</span>
																  </a>
											</div>

										</div>
									</div>
									</div>
							</div>
							<div class="tab-pane wow animated bounceInRight" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
								<div class="row">
	                    <div class="col-md-4 hidden-sm-down">
											<img src="images/vid.jpg" alt="">
										</div>
										<div class="col-md-8">
											<h3>Кухня - гостиная</h3>
											<p>Кухня, в современном, мире стала не только местом для приготовлении пищи, но и место где можно првоести время с друзьями и просто отдохнуть.</p>
											<p>Здесь необходимо сочетать высокие технологии и комфорт. Наши дизайнеры сделают проект, полностью отвечающим Вашим потребностям и пожеланиям</p>
											<div id="multiCarousel2" class="carousel slide" data-ride="carousel">
												<div class="carousel-inner w-100" role="listbox">
												  <div class="row">
																    <div class="carousel-item active">
																      <img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=1">
																    </div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=2">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=3">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=4">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=5">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=6">
																		</div>
													</div>
												</div>
																  <a class="carousel-control-prev" href="#multiCarousel2" role="button" data-slide="prev">
																    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
																    <span class="sr-only">Предыдущий</span>
																  </a>
																  <a class="carousel-control-next" href="#multiCarousel2" role="button" data-slide="next">
																    <span class="carousel-control-next-icon" aria-hidden="true"></span>
																    <span class="sr-only">Cледующий</span>
																  </a>
											</div>
										</div>
									</div>
							</div>
							<div class="tab-pane wow animated bounceInRight" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
								<div class="row">
	                    <div class="col-md-4 hidden-sm-down">
											<img src="images/vid.jpg" alt="">
										</div>
										<div class="col-md-8">
											<h3>Кухня - гостиная</h3>
											<p>Кухня, в современном, мире стала не только местом для приготовлении пищи, но и место где можно првоести время с друзьями и просто отдохнуть.</p>
											<p>Здесь необходимо сочетать высокие технологии и комфорт. Наши дизайнеры сделают проект, полностью отвечающим Вашим потребностям и пожеланиям</p>
											<div id="multiCarousel3" class="carousel slide" data-ride="carousel">
												<div class="carousel-inner w-100" role="listbox">
																    <div class="carousel-item active">
																      <img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=1">
																    </div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=2">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=3">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=4">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=5">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=6">
																		</div>
												</div>
																  <a class="carousel-control-prev" href="#multiCarousel3" role="button" data-slide="prev">
																    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
																    <span class="sr-only">Предыдущий</span>
																  </a>
																  <a class="carousel-control-next" href="#multiCarousel3" role="button" data-slide="next">
																    <span class="carousel-control-next-icon" aria-hidden="true"></span>
																    <span class="sr-only">Cледующий</span>
																  </a>
											</div>
										</div>
									</div>
							</div>
							<div class="tab-pane wow animated bounceInRight" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
								<div class="row">
	                    <div class="col-md-4 hidden-sm-down">
											<img src="images/vid.jpg" alt="">
										</div>
										<div class="col-md-8">
											<h3>Кухня - гостиная</h3>
											<p>Кухня, в современном, мире стала не только местом для приготовлении пищи, но и место где можно првоести время с друзьями и просто отдохнуть.</p>
											<p>Здесь необходимо сочетать высокие технологии и комфорт. Наши дизайнеры сделают проект, полностью отвечающим Вашим потребностям и пожеланиям</p>
											<div id="multiCarousel4" class="carousel slide" data-ride="carousel">
												<div class="carousel-inner w-100" role="listbox">
																    <div class="carousel-item active">
																      <img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=1">
																    </div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=2">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=3">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=4">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=5">
																		</div>
																		<div class="carousel-item">
																			<img class="d-block col-md-6 col-xs-12" src="https://placehold.it/350x180?text=6">
																		</div>
												</div>
																  <a class="carousel-control-prev" href="#multiCarousel4" role="button" data-slide="prev">
																    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
																    <span class="sr-only">Предыдущий</span>
																  </a>
																  <a class="carousel-control-next" href="#multiCarousel4" role="button" data-slide="next">
																    <span class="carousel-control-next-icon" aria-hidden="true"></span>
																    <span class="sr-only">Cледующий</span>
																  </a>
											</div>
										</div>
									</div>
							</div>
						</div>
      	  </div>
				</div>
				<div class="row col-12 py-5 hidden-sm-down">
					<div class="btn offset-8">Заказать расчеты</div>
				</div>
				<div class="row col-12 hidden-md-up">
					<div class="btn">Заказать расчеты</div>
				</div>
				<div class="row hidden-sm-down">
					<div class="col-md-2 benefits-item-white wow animated shake">
						<img src="images/b1.png" alt="">
						<p class="b-text">Работаем по договору</p>
					</div>
					<div class="col-md-2 benefits-item-white wow animated shake">
						<img src="images/b2.png" alt="">
						<p class="b-text">Опыт работы более 5 лет</p>
					</div>
					<div class="col-md-2 benefits-item-white wow animated shake">
						<img src="images/b3.png" alt="">
						<p class="b-text">Работы проводятся сертифицированными специалистами</p>
					</div>
					<div class="col-md-2 benefits-item-red wow animated shake">
						<img src="images/b4.png" alt="">
						<p class="b-text">Расходы на доставку берем на себя</p>
					</div>
					<div class="col-md-2 benefits-item-red wow animated shake">
						<img src="images/b5.png" alt="">
						<p class="b-text">Сэкономим Ваше время</p>
					</div>
					<div class="col-md-2 benefits-item-red wow animated shake">
						<img src="images/b6.png" alt="">
						<p class="b-text">Материалы, которые мы закладываем, рассчитаны на долгий срок службы</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="third-section">
			<div class="container">
				<div class="row">
					<div class="title d-flex justify-content-center">
						<h2>Новости</h2>
					</div>
				<div class="row hidden-sm-down">
					<div class="col-md-4 news-item wow animated fadeIn">
						<div class="news-item-image">
							<img src="images/news-image.jpg" alt="">
						</div>
						<div class="news-item-date">
							<span>02 февраля 2020</span>
						</div>
						<div class="news-item-title">
							Завершение отделочных работ в офисе "DELCO"
						</div>
					</div>
					<div class="col-md-4 news-item wow animated fadeIn">
						<div class="news-item-image">
							<img src="images/news-image.jpg" alt="">
						</div>
						<div class="news-item-date">
							<span>02 февраля 2020</span>
						</div>
						<div class="news-item-title">
							Завершение отделочных работ в офисе "DELCO"
						</div>
					</div>
					<div class="col-md-4 news-item wow animated fadeIn">
						<div class="news-item-image">
							<img src="images/news-image.jpg" alt="">
						</div>
						<div class="news-item-date">
							<span>02 февраля 2020</span>
						</div>
						<div class="news-item-title">
							Завершение отделочных работ в офисе "DELCO"
						</div>
					</div>
					</div>
					<div id="carouselExampleIndicators" class="carousel slide hidden-md-up wow animated fadeIn" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					  </ol>
					  <div class="carousel-inner" role="listbox">
					  	<div class="row">
					    <div class="carousel-item col-12 active news-item flex-column">
								<div class="news-item-image col-12">
									<img src="images/news-image.jpg" alt="">
								</div>
								<div class="news-item-date col-12">
									<span>02 февраля 2020</span>
								</div>
								<div class="news-item-title col-12">
									Завершение отделочных работ в офисе "DELCO"
								</div>
					    </div>
					    <div class="carousel-item col-12 news-item flex-column">
								<div class="news-item-image col-12">
									<img src="images/news-image.jpg" alt="">
								</div>
								<div class="news-item-date col-12">
									<span>02 февраля 2020</span>
								</div>
								<div class="news-item-title col-12">
									Завершение отделочных работ в офисе "DELCO"
								</div>
					    </div>
					  </div>
					  </div>
					</div>
				<div class="row w-100 my-5">
					<div class="news-more w-100">
						<a href="#" alt="" title="">Все новости</a>
					</div>
				</div>
				</div>
			</div>
	</section>
	<section class="four-section d-flex align-items-center flex-sm-column-reverse">
			<div class="container">
				<div class="row">
					<div class="col-md-6 mob-first wow animated bounceInLeft">
						<form class="form" action="action.php" method="post">
							 <div class="col-xs-12">
							 <div class="form-group">
							 <input type="text" name="name" required class="form-control" placeholder="Имя" />
							 </div>
							 </div>
							 <div class="col-xs-12">
							 <div class="form-group">
							 <input type="text" name="phone" required class="form-control" placeholder="Телефон" />
							 </div>
							 </div>
							 <div class="col-xs-12">
							 <div class="form-group">
							 <input type="text" name="email" class="form-control" placeholder="E-mail" />
							 </div>
							 </div>
							 <div class="text-left col-xs-12">
							 <input type="submit" class="btn btn-default" value="Отправить" />
							 </div>
						</form>
					</div>
					<div class="col-md-6 mob-second wow animated bounceInRight">
						<div class="four-section-title">Остались вопросы?</div>
						<div class="four-section-text">Оставьте заявку на обратный звонок</div>
					</div>
				</div>
			</div>
	</section>
	<footer class="p-4 hidden-sm-down wow animated bounceInUp">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-xs-12 align-items-center">
						<img src="images/logo.png" alt="">
					</div>
					<div class="col-md-8 contacts align-items-center d-inline-flex">
						<div><img src="images/map.png" alt="">Татарстан</div>
						<div><img src="images/tel.png" alt="">+7 (927) 927 92 92</div>
						<div><img src="images/mail.png" alt="">profproect@mail.ru</div>
					</div>
					<div class="col-md-2 col-xs-12 justify-content-around d-inline-flex align-items-center">
						<a href=""><img src="images/soc-insta.png" alt=""></a>
						<a href=""><img src="images/soc-youtube.png" alt=""></a>
						<a href=""><img src="images/soc-vk.png" alt=""></a>
					</div>
				</div>
				<div class="row justify-content-end">
					<img src="images/3x3studio.png" alt="">
				</div>
			</div>
	</footer>
	<footer class="p-4 hidden-md-up">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-xs-12 align-items-center footer-logo">
						<img src="images/logo.png" alt="">
					</div>
					<div class="col-md-2 col-xs-12 justify-content-center d-inline-flex align-items-center footer-soc">
						<a href=""><img src="images/soc-insta.png" alt=""></a>
						<a href=""><img src="images/soc-youtube.png" alt=""></a>
						<a href=""><img src="images/soc-vk.png" alt=""></a>
					</div>
				</div>
				<div class="row justify-content-center footer-3x3studio">
					<img src="images/3x3studio.png" alt="">
				</div>
			</div>
	</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" ></script>
  <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.inputmask.js" charset="UTF-8"></script>

</body>
</html>