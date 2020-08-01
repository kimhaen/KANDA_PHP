<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：本をカートに入れる
 * 作成日時			：2020/06/15
 * 作成者			：キムへイン
 */


//GET送信された情報がある場合登録機能実行

        session_start();
        /*  var_dump($_SESSION['userInfo']); */

        $name = $_SESSION['userInfo']['user'];
        $autho = $_SESSION['userInfo']['authority'];
        if($autho==1){

            $autho = "一般ユーザー";

        }else{

            $autho = "管理者";
        }

        $isbn = $_GET["isbn"];

        require_once ("dbprocess.php");

        $isbn=$_GET['isbn'];

        if(isset($isbn)){


        $sql = "SELECT * FROM bookinfo WHERE isbn='{$isbn}'";

        $result = executeQuery($sql);
        $rows = mysqli_num_rows($result);

        }else{

            header('Location:error.php');
    }
           /*  var_dump($row); */

      /*   var_dump($_SESSION); */

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

td {
	text-align: center;
	background-color: thistle;
}

.kaku {
	background: none;
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
		<h2>書籍登録</h2>
			<div class="usrps">権限：<?=$autho?></div>
	</div>
	<hr>
	<br>
	<div class="new">

	<h2>下記の書籍をカートに追加しました。</h2>
		<form action="showCart.php" method="POST">
			<table>
<?php     if ($rows > 0) {

    while ($row = mysqli_fetch_array($result)) {?>
				<tr>
					<td>ISBN</td>
                <td class="kaku">
                <?=$row['isbn']?></td>
			</tr>
				<tr>
					<td>TITLE</td>
			<td class="kaku">
			<?=$row['title']?>&nbsp&nbsp&nbsp</td></td>
				</tr>
				<tr>
					<td>価格</td>
            <td class="kaku">
            <?=$row['price']?>円&nbsp&nbsp&nbsp</td>
			</tr>
				<tr>

				</tr>

			</table>

	<?php

	$_SESSION['cartinfo'][] = $row;

    }?>

		<br><input type="submit"value="カート確認">


		</form>
	</div>
<?php

}



?>
</body>
</html>