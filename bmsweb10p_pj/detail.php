<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：本のタイトルをクリックすると詳細情報出力
 * 作成日時			：2020/06/09
 * 作成者			：キムへイン
 */

//GET送信された情報で詳細情報を確認する機能を実行

require_once ("dbprocess.php");

$sql = "SELECT * FROM bookinfo where isbn = '{$_GET['isbn']}'";

$result = executeQuery($sql);

$rows = mysqli_num_rows($result);

if ($rows > 0) {

    while ($row = mysqli_fetch_array($result)) {
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
.fm{
    text-align:center;}

form{display:inline}

</style>
</head>
<body>
	<h1>書籍販売システムWeb版 Ver1.0</h1>
	<hr>
	<div class="title">
		<a href="menu.php">【メニュー】</a> <a href="list.php">【書籍登録】</a> <a href="list.php">【書籍一覧】</a>
		<h2>書籍詳細情報</h2>
	</div>
	<hr>
	<br>
<div class="fm">
		<form action="update.php?isbn=<?=$row['isbn']?>" method="POST">
		<input type="submit" value="変更">&nbsp&nbsp
		<input type="hidden" name="isbn" value="<?=$row['isbn']?>">
		</form>

		<form action="delete.php?isbn=<?=$row['isbn']?>" method="POST">
		<input type="submit" value="削除">
		<input type="hidden" name="isbn" value="<?=$row['isbn']?>">
		</form>
</div>
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
					<td class="ctn"><?=$row['price']?>円</td>
				</tr>

    <?php
    }
} else {

    ?>

<tr>
			<td colspan="3">検索データを見つかりませんでした。</td>
		</tr>
	</table>
<br><br>
<?php
}

?>

	</div>



</body>
</html>