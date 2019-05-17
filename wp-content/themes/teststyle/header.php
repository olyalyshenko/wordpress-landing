<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700&amp;subset=cyrillic" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <title><?php the_title(); ?></title>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/main.js"></script>
	<?php wp_head(); ?>
  </head>
  <body>
  <header>
		<div class="container">
			<div class="header__top">
				<div class="header__logo">
					<img src="<?php echo T_IMG_DIR; ?>/logo.png" width="163" height="53" alt="Fintelect"">
				</div>
				<div class="header__date">
					<p>Дата: <br><span class="text-yellow"> 16, 17, 18 Мая</span></p>
				</div>
				<div class="header__time">
					<p>Время: <br><span class="text-yellow"> в 20:00 Мск/Киев</span></p>
				</div>
				<div><a class="header__part" href="#">Принять участие</a></div>
				
			</div>
			<div class="header__content">
				<p>Серия из 3-х бесплатных онлайн мастер-классов <br> 
				от <span class="text-yellow">долларового миллионера с Wall Street</span></p>
				<p class="header__content--big">6 Необходимых Шагов 
					к Финансовой Свободе</p>
				<p class="header__content--bold">Получите алгоритмы, которые используют наилучшие 
					инвесторы с Wall Street, чтобы создать пассивный доход 
					в долларах без рисков</p>
			</div>
			<div class="header__clients">
				<p>Наши <br>клиенты:</p>
					<img src="<?php echo T_IMG_DIR; ?>/log1.png"  alt="1">
					<img src="<?php echo T_IMG_DIR; ?>/log2.png"  alt="2">
					<img src="<?php echo T_IMG_DIR; ?>/log3.png"  alt="3">
					<img src="<?php echo T_IMG_DIR; ?>/log4.png"  alt="4">
					<img src="<?php echo T_IMG_DIR; ?>/log5.png"  alt="5">
					<img src="<?php echo T_IMG_DIR; ?>/log6.png"  alt="6">
			</div>
			<div class="header-arrow">
				<a  class="header-arrow--img" id="arrow" href="#video"></a>
			</div>
		</div>
	</header>