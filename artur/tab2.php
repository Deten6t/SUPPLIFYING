<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SUPPLIFYING</title>
	<link rel="stylesheet" href="css/main.css">

</head>
<body>
	<header id="header" class="header">
		<div class="container"> 
         <div class="nav">
         	<img src="img/logo.svg" alt="SUPPLIFYING" class="logo">
         	<ul class="Главная">
         		<li>
				 <a href="index.php">
         				Главная
         			</a>
         		</li>
                <li>
         			<a href="#">
         				Форум
         			</a>
         		</li> 
         		<li>
         			<a href="tab.php">
         				Блокнот
         			</a>
         		</li>
         		<li>
         			<a href="#">
         				Мой профиль
         			</a>
         		</li>

         	</ul>

         </div>
                  	<div class="offer">
                <p>Мы заботимся о каждом!</p>
                <h1>Получи .... прямо сейчас! (получи че-то здесь)</h1> 
                <h2>По всему дальнему востоку</h2>        		
         	</div>
		</div>
		
	</header>
	<section id="adout" class="adout">
		<div class="container">
			

		</div>
     </section>
     <footer id="footer" class="footer">
     	<div class="container">
         <form action="tab3.php" method="post">
<p>
    <label>Введите название товара:<br></label>
    <input name="name" type="text" size="50" maxlength="50">
    </p>
<p>
    <label>Годен до:<br></label>
    <input name="date" type="date" size="50" maxlength="10">
    </p>
<p>
    <input type="submit" name="submit" value="Добавить">
</p></form>

     	</div>
     </footer>
</body>
</html>