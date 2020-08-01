<?php
/* プログラム名		：bmsweb10p
 * プログラム説明	：本の情報を更新
 * 作成日時			：2020/06/10
 * 作成者			：キムへイン
 */

//GET送信された情報で更新機能実行

require_once ("dbprocess.php");

$isbn=$_GET['isbn'];

if(isset($isbn)){

        $sql = "SELECT * FROM bookinfo where isbn = '{$isbn}'";
        $result = executeQuery($sql);
        $rows = mysqli_num_rows($result);



        if(isset($_POST['newtitle'])||$_POST['newprice']){

            $sql2 = "UPDATE bookinfo SET title='{$_POST['newtitle']}', price={$_POST['newprice']} WHERE isbn='{$_POST['isbn']}'";
            $sql3 = "SELECT * FROM bookinfo where isbn = '{$_POST['isbn']}'";
            $result2 = executeQuery($sql2);

            $result3 = executeQuery($sql3);
            $rows2 = mysqli_num_rows($result3);

        }else{


        }
}else{

    header('Location:error.php');
}
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
    width: 40%;
    padding-top: 20px;
}
.tb1{
margin-right: -10px;
}
.tb2{
margin-right: 505px;
}
.btn2{
text-align:center;
    padding-top: 90px;
}
.btn{
text-align:center;
    padding-top: 90px;
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
		<a href="menu.php">【メニュー】</a> <a href="list.php">【書籍登録】</a> <a href="list.php">【書籍一覧】</a>
						<div class="usrid">名前：<?=$name?><br></div>
		<h2>書籍変更</h2>

	<div class="usrps">権限：<?=$autho?></div>
	</div>

	<hr>
	<br>
	<form action="update.php?isbn=<?=$isbn?>" method="POST">
	<div class="view">

<?php     if ($rows > 0) {

    while ($row = mysqli_fetch_array($result)) {?>
<div style="width:50%;float:left">
	<table class="tb1">

			<tr>
			<td></td>
			<td><<変更前の情報>></td>
			</tr>
				<tr>
					<td>ISBN</td>
					<td class="ctn"><?=$row['isbn']?></td>

					<input type="hidden" name="isbn" value="<?=$row['isbn']?>">

				</tr>
				<tr>
					<td>TITLE</td>
					<td class="ctn"><?=$row['title']?></td>

				</tr>
				<tr>
					<td>価格</td>
					<td class="ctn"><?=$row['price']?>円</td>

				</tr>
				</table>
				</div>


				<?php
    }
}
				        ?>


		<?php


		      if ($rows2 > 0) {

                  while ($rows = mysqli_fetch_array($result3)) {?>

   <div style="width:50%;float:right">

         <table class="tb2">

         		<tr><td><<変更後の情報>></td>

				<tr>
					<td class="ctn"><?=$rows['isbn']?></td>

				</tr>
				<tr>
					<td class="ctn"><?=$rows['title']?></td>
				</tr>
				<tr>
					<td class="ctn"><?=$rows['price']?>円</td>

				</tr>

</table>
</div>
<br><br>
<div class="btn2">
上記内容でデータを更新しました。<br><br>
<a href="list.php">書籍一覧に戻る</a>
</div>
		<?php }
		}else{ ?>
   <div style="width:50%;float:right">

         <table class="tb2">
         		<tr><td><<変更後の情報>></td>
    			<tr><td style="background:none;"><?=$_GET['isbn']?></td></tr>
                <tr><td><input type="text" name="newtitle"></td></tr>
                <tr><td><input type="text" name="newprice"></td></tr>

</table>
</div>
<br><br>
<div class="btn">

<input type="submit" value="変更完了">
</div>
	</form>
<?php }

include_once'footer.html';?>

</body>
</html>