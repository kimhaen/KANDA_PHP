<?php
/* プログラム名：BMI計算プログラムstep5;
 作成者：金海仁 キムへイン
 作成日：2020年5月11日
 */

$height = $_POST['height'];
$weight = $_POST['weight'];
$bmi = $weight / (($height*0.01) * ($height*0.01)) ;

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
※※BMI計算プログラム開始します※※<br><br>
<?php
echo "身長：",$height,"cm <br>";
echo "体重：",$weight,"kg <br>";
echo "BMI：",$bmi,"<br>";

if($bmi > 25){
    echo "⇒太り気味です。";
}else if($bmi < 18.5){
    echo "⇒やせ気味です。";
}else{
    echo "⇒正常値です。";
}
?>
<br><br>
※※BMI計算プログラム終了します※※

</body>
</html>