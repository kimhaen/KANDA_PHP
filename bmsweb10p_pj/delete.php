<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：本の情報を削除
 * 作成日時			：2020/06/10
 * 作成者			：キムへイン
 */

//GET送信された情報で削除機能実行

require_once ("dbprocess.php");




$sql2 = "SELECT isbn,title,price FROM bookinfo WHERE isbn='{$_GET['isbn']}'";
$result2 = executeQuery($sql2);
$rows = mysqli_num_rows($result2);

if ($rows > 0) {

    while ($row = mysqli_fetch_array($result2)) {



?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<style>
h1 {
	text-align: center;
}

h2 {
	text-align: center;
	margin-top: -15px;
}

.view {
	text-align: center;
}

table {
	margin: 0 auto;
}

td {
	text-align: center;
	background-color: thistle;
}

.ctn{
    background: none;
}
.dtb{
    width: 25%;
    padding: 20px;
}
.btn{
    text-align:center;

}
</style>
</head>
<body>
	<h1>書籍販売システムWeb版 Ver1.0</h1>
	<hr>
	<div class="title">
		<a href="menu.php">【メニュー】</a> <a href="list.php">【書籍登録】</a> <a href="list.php">【書籍一覧】</a>
		<h2>書籍削除</h2>
	</div>
	<hr>
	<br>

	<div class="view">
			<table class="dtb">

				<tr>
					<td>ISBN</td>
					<td class="ctn"><?=$row['isbn']?></td>

				</tr>
				<tr>
					<td>TITLE</td>
					<td class="ctn"><?=$row['title']?></td>
				</tr>
				<tr>
					<td>価格</td>
					<td class="ctn"><?=$row['price']?></td>
				</tr>

</table>
	<div class="btn">
	上記のデータを削除しました。<br><br>
				<a href="list.php">書籍一覧に戻る</a>
				</div>

    <?php
    }
} else {

    ?><table>

			<tr>
				<td colspan="3">検索データを見つかりませんでした。</td>
			</tr>
</table>
	</div>
<?php }

$sql = "Delete From bookinfo WHERE isbn='{$_GET['isbn']}'";
$result = executeQuery($sql);
?>

<br><br><br><br><br>
</body>
</html>