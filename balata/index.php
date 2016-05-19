<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homepage</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="col-lg-3">
				<div class="main-logo">
					<a href="index.html">
						<img src="img/main-logo.png" alt="">
					</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="head-title">Магазин спортивного харчування</div>
			</div>
			<div class="col-lg-3">
			<?php

if (empty($_SESSION['login']) or empty($_SESSION['id']))
{

echo "Ви війшли як гість<br><a class='buy' data-toggle='modal' data-target='#myModal2'>Уввійти</a>
<a class='buy' data-toggle='modal' data-target='#myModal3'>Зареєструватись</a>";
}
else
   {
  
    echo "Ви війшли на сайт як ".$_SESSION['login']."<br><a href='exit.php'>Вийти</a>";
   }
?>
				
			</div>
		</div>
	</header>
	<article class="main-content">
		<div class="container">
			<div class="col-lg-6 col-sm-6 col-md-6">
				<div class="item-wrap clearfix">
					<div class="item-img">
						<img src="img/item1.png" alt="" />
					</div>
					<div class="item-info">
						<div class="item-title">Creatine Monohydrate</div>
						<div class="item-price">379 грн</div>
						<div class="btn-add-to-cart"></div>
						<p class="text">
							Scitec Nutrition креатин 1000 грамів Стимулює анаболізм , значно сприяє зростанню м'язової маси
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-md-6">
				<div class="item-wrap clearfix">
					<div class="item-img">
						<img src="img/item2.png" alt="" />
					</div>
					<div class="item-info">
						<div class="item-title">Nutrition Elite XT</div>
						<div class="item-price">749 грн</div>
						<div class="btn-add-to-cart"></div>
						<p class="text">
							Dymatize Nutrition Elite XT
							Потужний науково-технічний прогрес 
							вперед в пролонгації дії білкових
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-md-6">
				<div class="item-wrap clearfix">
					<div class="item-img">
						<img src="img/item3.png" alt="" />
					</div>
					<div class="item-info">
						<div class="item-title">Z-Force 90 </div>
						<div class="item-price">289 грн</div>
						<div class="btn-add-to-cart"></div>
						<p class="text">
							 Z-Force Сприяють збільшенню фізичної
							сили, а також нарощування м'язової маси.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-md-6">
				<div class="item-wrap clearfix">
					<div class="item-img">
						<img src="img/item4.png" alt="" />
					</div>
					<div class="item-info">
						<div class="item-title">Fat Burners E / S</div>
						<div class="item-price">199 грн</div>
						<div class="btn-add-to-cart"></div>
						<p class="text">
							at Burners E / S
							Призначений для боротьби з підшкірним
							жиром і втратою ваги.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-md-6">
				<div class="item-wrap clearfix">
					<div class="item-img">
						<img src="img/item5.png" alt="" />
					</div>
					<div class="item-info">
						<div class="item-title">BCAA Xpress  </div>
						<div class="item-price">699 грн</div>
						<div class="btn-add-to-cart"></div>
						<p class="text">
							100% комплекс амінокислот BCAA в
							порошку для підтримки і зростання 
							м'язової маси.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-md-6">
				<div class="item-wrap clearfix">
					<div class="item-img">
						<img src="img/item6.png" alt="" />
					</div>
					<div class="item-info">
						<div class="item-title">Massit 3000</div>
						<div class="item-price">449 грн</div>
						<div class="btn-add-to-cart"></div>
						<p class="text">
							Потужна білково вуглеводна суміш.Сприяє росту м’язів, і є гарним
							стимулятором до чогось більшого.
						</p>
					</div>
				</div>
			</div>
		</div>
	</article>
	<footer>
		<div class="container">
			<div class="total-price">
				<span class="lbl">Загальна ціна:</span>
				<span class="price">3000 <span class="sign">грн</span></span>
				<button class="buy" data-toggle="modal" data-target="#myModal">зАМОВИТИ</button>
			</div>
		</div>
	</footer>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h2>ДЯкую за покупку, арні одобряє)</h2>
        <img src="img/arni.png" alt="">
        <h5>Вартість замовлення: <span class="modal-price">6.98 грн.</span></h5>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	       <h2>Хто ти тварь?</h2>
		   <img src="img/arni.png" alt="">
        <?php 
		   include("form.php");
		?>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  <h2>А ти зареєструвався?</h2>
		   <img src="img/arni.png" alt="">
        <?php 
		   
		   include("reg.php");
		?>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	jQuery(document).ready(function($) {
		$('.btn-add-to-cart').click(function() {
			$(this).toggleClass('selected');
		})
	});
</script>
<script src="js/app.js"></script>
</body>
</html>