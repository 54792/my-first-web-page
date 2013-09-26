<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=Windows-1251" />	
	<meta name="generator" content="Notepad++" />  
	<title>Моя первая WEB страница</title>
</head>
<body>
	<h1>Здравствуй, мир!</h1>
	<p>Сегодня <?php   
	function DateToShow($value) {
		$montharray = array('01' => 'января','02' => 'февраля','03' => 'марта','04' => 'апреля','05' => 'мая','06' => 'июня','07' => 'июля','08' => 'августа','09' => 'сентября','10' => 'октября','11' => 'ноября','12' => 'декабря');
		$monthNumber = substr($value,0,2);
		$month = $montharray[$monthNumber];
		$day = substr($value,3,2);
		if ($day[0] == '0' and strlen($day) > 1) $day = $day[1];
		$year = substr($value,6,4);
		return $day.' '.$month.' '.$year.' года.';
	}      
	$usDate = date('m/d/Y');
	$ruDate = DateToShow($usDate);
	echo $ruDate;
	?>
	</p>
	<p>Замечательный день, правда?</p>
</body>
</html>
