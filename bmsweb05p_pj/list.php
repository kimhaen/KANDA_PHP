<?php
$url = "localhost";
$user = "root";
$pass = "root123";
$db = "mybookdb";

$link = mysqli_connect($url, $user, $pass) or die("Mysqlサーバへの連結に失敗しました。");

mysqli_select_db($link, $db) or die($db . "の選択失敗");

$sql = "SELECT isbn,title,price FROM bookinfo";

$result = mysqli_query($link, $sql) or die("SQL文「" . $sql . "」の発行に失敗しました。");

$rows = mysqli_num_rows($result);

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>

	</head>
    <body>
<h2>書籍一覧画面</h2>


書籍一覧を表示しました。
<hr>

<table style= border-right:none border-left:none border-top:none border-bottom:none >
<tr>
<th>ISBN</th>
<th>書籍名</th>
<th>価格</th>
</tr>
<?php
if ($rows > 0) {

    while ($row = mysqli_fetch_array($result)) {

        ?>

    <tr>
			<td><?=$row['isbn']?></td>
			<td><?=$row['title']?></td>
			<td><?=$row['price']?></td>
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