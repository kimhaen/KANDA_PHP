<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：本の情報の一覧画面
 * 作成日時			：2020/06/09
 * 作成者			：キムへイン
 */

//本の情報一覧を表示

/*     session_start(); */

    require_once("dbprocess.php");

    //全検索SQL文の設定
    $sql = "SELECT * FROM bookinfo ORDER BY isbn";

    //dbprocessファイルから「executeQuery」関数を利用してSQLを発行する
    $result = executeQuery($sql);

    //結果セットの行数を取得する
    $rows = mysqli_num_rows($result);

    session_start();
   /*  var_dump($_SESSION['userInfo']); */

    $name = $_SESSION['userInfo']['user'];
    $autho = $_SESSION['userInfo']['authority'];

if($autho==1){

    $autho = "一般ユーザー";

}else{

    $autho = "管理者";
}
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
    margin-top: -100px;
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
.usrid{
    text-align: end;
    margin-top: -15px;
    margin-right: 79px;
    }
.usrps{
    text-align: end;
    margin-top: -15px;
    margin-right: 10px;
    }

</style>
</head>
<body>
	<h1>書籍販売システムWeb版 Ver1.0</h1>
<hr style="border:solid 2px lightgray;">
	<div class="title">
		<a href="menu.php">【メニュー】</a> <a href="insert.php">【書籍登録】</a>
				<div class="usrid">名前：<?=$name?><br></div>
		<h2>書籍一覧</h2>

		<div class="usrps">権限：<?=$autho?></div>
	</div>

	<hr>
	<div class="menubar"><br><br>
	<form action="search.php" method="POST">
	ISBN <input type="text" name="isbn" value="">
	TITLE <input type="text" name="title" value="">
	価格 <input type="text" name="price" value="">
	<input type="submit" value="検索">
	<input type="submit"value="全件表示"><br><br>
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
			<td><a href="detail.php?isbn=<?=$row['isbn']?>"><?=$row['isbn']?></a>&nbsp&nbsp&nbsp</td>
			<td><?=$row['title']?>&nbsp&nbsp&nbsp</td>
			<td><?=$row['price']?>円&nbsp&nbsp&nbsp</td>
			<td><a href="update.php?isbn=<?=$row['isbn']?>">変更</a> &nbsp <a href="delete.php?isbn=<?=$row['isbn']?>">削除</a> &nbsp <a href="insertIntoCart.php?isbn=<?=$row['isbn']?>">カートに入れる</a></td>
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


</body>

</html>

<div class="ftr">
<?php include_once'footer.html';?></div>
