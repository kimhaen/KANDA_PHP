<?php
$num = $_POST['num'];
$total = 0;

if ($num < 1 || $num > 100) {

    echo "不正な値が入力されました。";

} else {

    for ($i = 1; $i <= $num; $i ++) {

        $total += $i;
    }
    echo "1~{$num}までの合計は{$total}です。";
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

</body>
</html>