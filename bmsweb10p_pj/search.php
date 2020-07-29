<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：本の情報で検索
 * 作成日時			：2020/06/11
 * 作成者			：キムへイン
 */

//POST送信された情報で検索機能実行

require_once("dbprocess.php");

$isbn = $_POST['isbn'];
$title = $_POST['title'];
$price = $_POST['price'];

if(isset($isbn)){

    $sql = "SELECT * FROM Bookinfo Where isbn LIKE '%{$isbn}%'";

}else if(isset($title)){

    $sql = "SELECT * FROM Bookinfo Where title LIKE '%{$title}%'";

}else if(isset($price)){

    $sql = "SELECT * FROM Bookinfo Where price LIKE '%{$price}%'";

}else{

    $sql = "SELECT * FROM Bookinfo";
}

$result = executeQuery($sql);
$rows = mysqli_num_rows($result);


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

.new {
	text-align: center;
}

.tb {
	border-right: none;
    margin: 0 auto;
    width: 80%;
    border-right:none;
}

td {
	text-align: center;

}

th{
background-color: thistle;
}
.menubar{
    text-align:center;

}


</style>
</head>
<body>
	<h1>書籍販売システムWeb版 Ver1.0</h1>
	<hr>
	<div class="title">
		<a href="menu.php">【メニュー】</a> <a href="list.php">【書籍一覧】</a>
		<h2>書籍一覧</h2>
	</div>
	<hr>
	<div class="menubar">
		<form action="search.php" method="POST">
	ISBN <input type="text" name="isbn" value="">
	TITLE <input type="text" name="title" value="">
	価格 <input type="text" name="price" value="">
	<input type="submit" value="検索">
	<input type="submit"value="全件表示">
			</form>
	</div>
	<hr>
	<br>
	<table class="tb" >
<tr>
<th>ISBN</th>
<th>書籍名</th>
<th>価格</th>
<th></th>
</tr>
<?php
if ($rows > 0) {

    while ($row = mysqli_fetch_array($result)) {

        ?>

    <tr>
			<td><a href="detail.php?isbn=<?=$row['isbn']?>"><?=$row['isbn']?></a></td>
			<td><?=$row['title']?></td>
			<td><?=$row['price']?></td>
			<td><a href="update.php?isbn=<?=$row['isbn']?>">変更</a>  <a href="delete.php?isbn=<?=$row['isbn']?>">削除</a></td>
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

?>


</body>
</html>