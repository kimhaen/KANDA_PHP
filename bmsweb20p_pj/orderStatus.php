<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：注文情報の一覧画面
 * 作成日時			：2020/06/16
 * 作成者			：キムへイン
 */

//本の情報一覧を表示

    session_start();
    /*  var_dump($_SESSION['userInfo']); */

    $name = $_SESSION['userInfo']['user'];
    $autho = $_SESSION['userInfo']['authority'];
    if($autho==1){

        $autho = "一般ユーザー";

    }else{

        $autho = "管理者";
}

    require_once("dbprocess.php");

    //全検索SQL文の設定
    $sql = "SELECT o.user, b.title, o.date FROM orderinfo o inner join bookinfo b on o.isbn= b.isbn";

    //dbprocessファイルから「executeQuery」関数を利用してSQLを発行する
    $result = executeQuery($sql);

    //結果セットの行数を取得する
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
	<hr>
	<div class="title">
		<a href="menu.php">【メニュー】</a> <a href="insert.php">【書籍登録】</a>
			<div class="usrid">名前：<?=$name?><br></div>
		<h2>購入品確認</h2>
			<div class="usrps">権限：<?=$autho?></div>
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
<th>ユーザー</th>
<th>書籍名</th>
<th>注文日</th>
</tr>
<?php
if ($rows > 0) {

    while ($row = mysqli_fetch_array($result)) {

        ?>

    <tr>
			<td><?=$row['user']?></td>
			<td><?=$row['title']?></td>
			<td><?=$row['date']?></td>

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