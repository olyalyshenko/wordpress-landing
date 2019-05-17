<?= get_header(); ?>

<div class="video" id="video">
		<div class="container">
			<div class="video__wrapper">
				<div class="video__frame">
					<div class="video__frame--ratio">	</div>
					<iframe class="video__frame--content" src="https://www.youtube.com/embed/NvryolGa19A" allowfullscreen></iframe>
				</div>
				<form class="form" method="post" action="#">
					<p class="form__title">Забронируйте участие прямо 
						сейчас и получите PDF-отчет <span>“Источники пассивного дохода”</span> </p>
					<input type="text" class="form-name" placeholder="Ваше имя" required="required">
					<input type="text" class="form-email" placeholder="Ваш основной e-mail" required="required">
					<input type="text" class="form-number" placeholder="Ваш номер телефона" required="required">
					<button class="form__btn" type="submit">Забронировать участие</button>
				</form>
			</div>

		</div>
	</div>
	<div class="items">
		<div class="container">
			<div class="items__header">
				<p>
					Что вы узнаете на онлайн мастер-классах
				</p>
			</div>
			<div class="items__wrapper">
				<div class="items__block-1">
					<p class="item__1"> —  6 шагов, которые позволят вам создать пассивный доход</p>
					<p class="item__2">—  Как инвестировать в зарубежные фонды и получать 8-20% в долларах </p>
					<p class="item__3">—  Как грамотно управлять личными финансами </p>
					<p class="item__4">—  Мой спор с Р. Кийосаки в самолете по пути на выступление в +2000 человек </p>
					
				</div>
				<div class="items__block-2">
					<p class="item__5">—  Как избежать рисков потерять все сбережения в кризис </p>
					<p class="item__6">—  Пошаговые техники, как создать капитал на всю жизнь</p>
					<p class="item__7">—  Минимальная сумма для надежных  инвестиций </p>
					<p class="item__8">—  Куда лучше вкладывать деньги,  чтобы они работали на вас с минимальными рисками </p>
				</div>
			</div>
		</div>
	</div>
	<div class="biography">
		<div class="container">
			<div class="biography__quote">
				<p>“За 20 лет в мире крупных финансов и инвестиций я создал уникальную систему из 6 шагов, которая позволит любому человеку сделать капитал и стать финансово свободным”</p>
			</div>
			<div class="biography__items">
				<p>
					Эдвард  Дубинский
				</p>
				<ul>
					<li>В 2008 купил убыточный банк “Кубань банк” в России и в 2011 продал с прибылью</li>
					<li>7 лет работы в Нью Йорке на Wall Street с глобальными и паевыми фондами </li>
					<li>Экс-директор департамента по ценным бумагам в Credit Suisse, New York </li>
					<li>Во время работы в Нью Йорке получал 1 000 000$ в качестве бонусов </li>
					<li>9 стран входило под его руководство во время пребывания на должности директора в ТОП-9 инвестиционных банков мира</li>
					<li>Участвовал в проведении около 50 IPO на общую сумму около 50 млрд. долларов</li>
					<li>Публичный спикер. Выступает на живых мероприятиях на 500-2000 участников </li>
					<li> К опыту и знаниям Эдварда Дубинского обращались мировые компании как Fidelity, The Capital Group, Morgan Stanley Investment Management и другие</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-form">
		<div class="container">
			<p class="form__title form__title--footer">Забронируйте участие прямо сейчас и получите PDF-отчет <span>“Источники пассивного дохода”</span> </p>
			<p class="footer-form__text">
				в котором вы узнаете рабочие методики по созданию капитала с полного нуля
			</p>
			<form class="form form--bottom" method="post" action="#">
					
					<input type="text" class="form-name" placeholder="Ваше имя" required="required">
					<input type="text" class="form-email" placeholder="Ваш основной e-mail" required="required">
					<input type="text" class="form-number" placeholder="Ваш номер телефона" required="required">
					<button class="form__btn form__btn--footer" type="submit">Забронировать участие</button>
				</form>
		</div>
	</div>
	<div class="info">
		<div class="container">
			<a href="#">Политика конфиденциальности</a>
			<a href="#">Дисклеймер</a>
			<a href="#">Согласие с рассылкой</a>
			<a href="#">Пользовательское соглашение</a>
		</div>
	</div>
	<div class="info__bottom">
		<div class="container">
			<p class="info__bottom--1">Все права защищены © fintelect.me  </p>
			<p class="info__bottom--2">ИП Котина О.И. ОГРН 317366800021343</p>
		</div>
	</div>



   <script>
	$(document).ready(function(){
	$("#arrow").on("click", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),

		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;
		
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1500);
	});
	});
      
   </script>
   <?php wp_footer() ?>
</body>
</html>