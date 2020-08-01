<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：本のタイトルをクリックすると詳細情報出力
 * 作成日時			：2020/06/09
 * 作成者			：キムへイン
 */

//GET送信された情報で詳細情報を確認する機能を実行

session_start();
/*  var_dump($_SESSION['userInfo']); */

$name = $_SESSION['userInfo']['user'];
$autho = $_SESSION['userInfo']['authority'];
if($autho==1){

    $autho = "一般ユーザー";

}else{

    $autho = "管理者";
}
require_once ("dbprocess.php");

if(isset($_GET['isbn'])){

$sql = "SELECT * FROM bookinfo where isbn = '{$_GET['isbn']}'";

$result = executeQuery($sql);

$rows = mysqli_num_rows($result);

}else{

    header('Location:error.php');

}

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
    margin-top: -100px;
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
		<a href="menu.php">【メニュー】</a> <a href="list.php">【書籍登録】</a> <a href="list.php">【書籍一覧】</a>

					<div class="usrid">名前：<?=$name?><br></div>
		<h2>書籍詳細情報</h2>

		<div class="usrps">権限：<?=$autho?></div>
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
include_once'footer.html';?>

	</div>



</body>
</html>