<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">

</head>
	<style type="text/css">
		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<form action="pages.php" method="GET" class="col-9 row mx-auto p-0 rounded pt-3" style="background-color: white; margin-top: 25px">
		<div class="col-3">
			<?php 
				$con = mysqli_connect('127.0.0.1', 'root', '', 'blog');
				$q = mysqli_query($con, "SELECT * FROM users");
				for ($i=0; $i < 4; $i++) { 
					# code...
					$result = $q->fetch_assoc();
					echo "<div class='rounded mb-3 bg-info p-3'><h4>".$result["name"]."</h4><p>".$result["email"]."</p><p>".$result["phone"]."</p><button class='btn btn-primary'>Написать</button></div>";
				}
			 ?>
		</div>
		<div class="col-9">
			<div class="form-group">
				<strong>Заголовок:</strong>
	    		<input type="" class="form-control" name="title">
			</div>
			<div class="form-group">
				<strong>Текст статьи:</strong>
	    		<textarea class="form-control" style="height: 400px" name="text"></textarea>
			</div>
			<div class="form-group">
				<strong>Автор:</strong>
	    		<input type="" class="form-control" name="author">
			</div>
			<button class="btn-success btn">Создать пост</button>
		</div>
		
	</form>
</body>
</html>