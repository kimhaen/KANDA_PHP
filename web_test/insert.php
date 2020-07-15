<?php
if(isset($_POST['id'])){

    $url = "localhost";
    $user = "root";
    $pass = "root123";
    $db = "testdb";

    $link = mysqli_connect($url, $user, $pass) or die("Mysqlサーバへの連結に失敗しました。");

    mysqli_select_db($link, $db) or die($db . "の選択失敗");

    $sql = "INSERT INTO employeeinfo VALUES('{$_POST['id']}','{$_POST['name']}','{$_POST['age']}','{$_POST['store']}')";


    $result = mysqli_query($link, $sql) or die("SQL文「" . $sql . "」の発行に失敗しました。");

    mysqli_close($link) or die("$Mysql切断に失敗");

    header('Location:insert2.php');
    exit;
}


?>


<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>
<a href="index.php">index.phpに戻る</a><br>
	<h2>従業員の登録</h2>
	<form action="insert.php" method="POST">
	ID <input type="text" name="id" value=""><br><br>
	名前 <input type="text" name="name" value=""><br><br>
	年齢 <input type="text" name="age" value=""><br><br>
	店舗 <input type="radio" name="store" value="神田店">神田店
		<input type="radio" name="store" value="東京店">東京店<br><br>
	<input type="submit" value="登録"><br>
	</form>
    </body>
</html>

