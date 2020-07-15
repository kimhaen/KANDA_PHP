<?php
$url = "localhost";
$user = "root";
$pass = "root123";
$db = "testdb";

$link = mysqli_connect($url, $user, $pass) or die("Mysqlサーバへの連結に失敗しました。");

mysqli_select_db($link, $db) or die($db . "の選択失敗");

$sql = "SELECT id,name,age,store FROM employeeinfo";

$result = mysqli_query($link, $sql) or die("SQL文「" . $sql . "」の発行に失敗しました。");

$rows = mysqli_num_rows($result);

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>
<body>

<a href="index.php">index.phpに戻る</a><br>
	<h2>従業員一覧</h2>
	<table border-right:none border-left:none border-top:none border-bottom:none >

		<tr>
			<th>ID</th>
			<th>名前</th>
			<th>年齢</th>
			<th>店舗</th>
		</tr>
<?php
if ($rows > 0) {

    while ($row = mysqli_fetch_array($result)) {

        ?>

    <tr>
			<td><?=$row['id']?></td>
			<td><?=$row['name']?></td>
			<td><?=$row['age']?></td>
			<td><?=$row['store']?></td>
		</tr>
    <?php
    }
} else {

    ?>

<tr>
			<td colspan="3">検索データを見つかりませんでした。</td>
		</tr>
	</table>

<?php
}

mysqli_free_result($result);

mysqli_close($link) or die("$Mysql切断に失敗");

?>
    </body>
</html>