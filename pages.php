<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			$database = [
				[
					"title"=>"Статья 1",
					"short_text"=>"lorem",
					"img"=>"img/1.jpg",
					"users"=>"user12",
				],
				[
					"title"=>"Статья 2",
					"short_text"=>"lorem",
					"img"=>"img/2.jpg",
					"users"=>"user30",
				],
				[
					"title"=>"Статья 3",
					"short_text"=>"lorem",
					"img"=>"img/3.jpg",
					"users"=>"user50",
				],
				[
					"title"=>"Статья 4",
					"short_text"=>"lorem",
					"img"=>"img/4.jpg",
					"users"=>"user90",
				],
				[
					"title"=>"Статья 5",
					"short_text"=>"lorem",
					"img"=>"img/5.jpg",
					"users"=>"user25",
				],
			];
		 ?>
	</div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class='text-center'>БЛОГ</h1>
		<hr>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
			 	echo "<a href='admin.php'>Админ-панель</a>";
			 	echo "<h1>Привет, ".$_GET["login"]."</h1>";
			 	echo "<h1 class='bg-success'>".$_GET["title"]."</h1>";
				echo "<p>".$_GET["text"]."</p>";
				echo "<p>Автор: ".$_GET["author"]."</p>";
				echo "<hr>";



			 	for ($i=0; $i < count($database); $i++) { 
			 		# code...
			 		echo "<h1 class='bg-success'>".$database[$i]["title"]."</h1>";
					echo "<p>".$database[$i]["short_text"]."</p>";
					echo "<img class = 'w-100' src='".$database[$i]["img"]."'>";
					echo "<p>Автор: ".$database[$i]["users"]."</p>";
					setlocale(LC_ALL ,"RUSSIAN");
					echo "<p>Дата публикации: ".strftime("%c")."</p>";
					echo "<a href='p1.php?id='".$i.">Подробнее</a>";
					echo "<hr>";
			 	}
			 ?>
			 <?php 
				$con = mysqli_connect('127.0.0.1', 'root', '', 'blog');
					$q = mysqli_query($con, "SELECT * FROM pages");
					for ($i=0; $i < 6; $i++) { 
						# code...
						$result = $q->fetch_assoc();
						echo "<h1 class='bg-success'>".$result["title"]."</h1>";
						echo "<p>".$result["text"]."</p>";
						echo "<img class = 'w-100' src='".$result["image"]."'>";
						echo "<p>Автор: ".$result["author"]."</p>";				
						echo "<hr>";
					}
			 ?>
		</div>
	</div>
</body>
</html>