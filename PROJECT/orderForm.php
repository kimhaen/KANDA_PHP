<?php

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>

		<div align="center">

		<div align="center">
			<a href="./main.php">MAIN</a>
		</div>


		<div align="center">
			<h1>【神田 ユニフォーム】</h1>
		</div>
		<hr>


		<div align="center">
			<form action="./orderForm.php" method="get"><br>
				<table border="1">
					<tr align="center">
						<th>NAME</th>
						<th><input type="text" name ="name" value=""/></th>
					</tr>
					<tr align="center">
						<th>E-MAIL</th>
						<th><input type="text" name ="email" value=""/></th>
					</tr>
					<tr align="center">
						<th>ADDRESS</th>
						<th><input type="text" name ="address" value=""/></th>
					</tr>

					<tr align="center">
						<th>QUANTITY</th>
						<th><input type="text" name ="quantity" value=""/></th>
					</tr>
					<tr align="center">
						<th>ETC</th>
						<th><textarea cols="22" rows="5" name ="etc" value=""/></textarea></th>
					</tr>
				</table>

				<div>
					<br><br>
					<input type="submit" value="注文" name=submitted>
				</div>


			</form>
		</div>

		<br>
		<hr>
		<p>
			<br>
		</p>


	</div>
    </body>
</html>