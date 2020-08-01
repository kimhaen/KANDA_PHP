<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：初期データ登録
 * 作成日時			：2020/06/17
 * 作成者			：キムへイン
 */

session_start();

require_once ("dbprocess.php");

$sql = "SELECT * FROM bookinfo ORDER BY isbn";


    if(!file_exists("./file/initial_data.csv")){}
    $fp = fopen("./file/initial_data.csv");
    $book = fgetcsv($fp);
    $sql="INSERT INTO bookinfo values('[$book[0]]','$book[1]','$book[2]')";
    executeQuery($sql);



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

table {
    margin: 0 auto;
    width: 30%;

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
.kaku {
	background: none;
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

<!-- html画面で情報を入力してもらい、formで送信 -->

<body>
	<h1>書籍販売システムWeb版 Ver1.0</h1>
	<hr>
	<div class="title">
		<a href="menu.php">【メニュー】</a> <a href="list.php">【書籍一覧】</a>
						<div class="usrid">名前：<?=$name?><br></div>
		<h2>初期データ登録</h2>
				<div class="usrps">権限：<?=$autho?></div>
	</div>
	<hr>
	<br>
	<div class="new">
		<form action="insert.php" method="POST">
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
