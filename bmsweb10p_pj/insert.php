<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：新しい本の情報を登録
 * 作成日時			：2020/06/09
 * 作成者			：キムへイン
 */


//POST送信された情報がある場合登録機能実行

if (isset($_POST['isbn'])||isset($_POST['title'])||isset($_POST['price'])){

    if(!isset($_POST['isbn'])){

        header('Location:error.php');
        exit;

    }else if(!isset($_POST['title'])){

        header('Location:error.php');
        exit;

    }else if(!isset($_POST['price'])){
        header('Location:error.php');

        exit;

    }else{

        require_once ("dbprocess.php");

        $sql = "INSERT INTO bookinfo VALUES('{$_POST['isbn']}','{$_POST['title']}',{$_POST['price']})";

        $result = executeQuery($sql);
    }

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

td {
	text-align: center;
	background-color: thistle;
}

.kaku {
	background: none;
}
</style>
</head>

<!-- html画面で情報を入力してもらい、formで送信 -->

<body>
	<h1>書籍販売システムWeb版 Ver1.0</h1>
	<hr>
	<div class="title">
		<a href="menu.php">【メニュー】</a> <a href="list.php">【書籍一覧】</a>
		<h2>書籍登録</h2>
	</div>
	<hr>
	<br>
	<div class="new">
		<form action="insert.php" method="POST">
			<table>

				<tr>
					<td>ISBN</td>
					<td>
				<?php if(!isset($_POST['isbn'])){  ?>
			<input type="text" name="isbn" value="">
                <?php } else { ?>
                <td class="kaku">
                <?php echo $_POST['isbn'];}   ?></td>
			</tr>
				<tr>
					<td>TITLE</td>
					<td><?php if(!isset($_POST['title'])){  ?>
			<input type="text" name="title" value="">
            <?php } else { ?>
			<td class="kaku">
			<?php echo $_POST['title'];} ?></td>
				</tr>
				<tr>
					<td>価格</td>
					<td><?php if(!isset($_POST['price'])){  ?>
			<input type="text" name="price" value="">
            <?php } else {?>
            <td class="kaku">
            <?php echo $_POST['price'];} ?></td>
			</tr>
				<tr>

				</tr>

			</table>

				<?php if(!isset($_POST['isbn'])){  ?>


					<input type="submit"value="登録"></td>
					<?php }else{?>
					<br><br>上記のデータを登録しました。<br><br>
					<a href="list.php">書籍一覧に戻る</a>&nbsp
					<a href="insert.php">続けて登録する</a>

					<?php }?>
		</form>
	</div>

</body>
</html>