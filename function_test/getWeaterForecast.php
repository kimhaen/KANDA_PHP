<?php



function getWeatherForecast(){

    $day = array("今日","明日","明後日");
    $weather = array("晴れ","曇り","雨","雪");
    $selected1 = array_rand($day);
    $selected2 = array_rand($weather);

   return "{$day[$selected1]}の天気は、{$weather[$selected2]}でしょう。";
}

echo getWeatherForecast();
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
    <body>

    </body>
</html>