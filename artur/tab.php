<!DOCTYPE html>
<html lang="ru">
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
         			<a href="#">
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
		
        <style>
    .cardList{
        display: flex;
        flex-wrap: wrap;
    }
    .card{
        margin-left:10px;
        margin-top:40px;
        background-color: white;
        max-width: 600px;
        padding: 20px;
        box-shadow: 7px 7px 5px rgba(0,0,0,0.6);
        border-radius:25px;
    }
    .text{
        text-align:center;
    }
.abc{
    width:500px;
    height:300px;
}
    </style>
	</header>
	<section id="adout" class="adout">
		<div class="container">
        <div class="cardList">
            <div class="card">
    <table border="1" bordercolor="black">
    <thead>
            <tr>
                <th>Название</th>
                <th>Годен до</th>
                <th><a href="tab2.php">внести</a></th>
                
            </tr>
        </thead>
        <tbody>
        <?php
             $bd=mysqli_connect("localhost","root","", "tov");
             $sql=("SELECT * FROM `tov`");
             $result=mysqli_query($bd,$sql);
             foreach($result as $row ):
                ?>
                <tr>
                    <td><?= $row['name']?></td>
                    <td><?= $row['date']?></td>
            </div>
            <?php endforeach; ?>
        </tbody>
 </table>
 </div>        
</div>

		</div>
     </section>
     <footer id="footer" class="footer">
     	<div class="container">
     		

     	</div>
     </footer>
</body>
</html>