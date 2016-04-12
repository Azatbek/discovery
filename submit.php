<?php 
if(isset($_POST['OrderToDiscount'])){
	 /* Здесь проверяется существование переменных */
	if (isset($_POST['dep_date'])) {$dep_date = $_POST['dep_date'];}
	if (isset($_POST['arriv_date'])) {$arriv_date = $_POST['arriv_date'];}
	if (isset($_POST['userName'])) {$name = $_POST['userName'];}
	if (isset($_POST['phoneNumber'])) {$phone = $_POST['phoneNumber'];}

	$type = "Заявка на получение скидки";
	/* Сюда впишите свою эл. почту */
	$address = "info@discoverytour.kz";

	/* А здесь прописывается текст сообщения, \n - перенос строки */
	$mes = "Тема: $type\nТелефон: $phone\nИмя: $name\nДата выезда: $dep_date\nДата приезда: $arriv_date";

	/* А эта функция как раз занимается отправкой письма на указанный вами email */
	$sub='Заявка на получение скидки;';//сабж
	$email='<discoverytour.kz>'; // от кого
	$send = mail($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
	header("location:/");
}

if(isset($_POST['OrderToReserv'])){
	/* Здесь проверяется существование переменных */
	if (isset($_POST['name'])) {$name = $_POST['userName'];}
	if (isset($_POST['phoneNumber'])) {$phone = $_POST['phoneNumber'];}

	$type = "Заявка на бронирование";
	/* Сюда впишите свою эл. почту */
	$address = "info@discoverytour.kz";

	/* А здесь прописывается текст сообщения, \n - перенос строки */
	$mes = "Тема: $type\nТелефон: $phone\nИмя: $name";

	/* А эта функция как раз занимается отправкой письма на указанный вами email */
	$sub='Заявка бронирование '; //сабж
	$email='<discoverytour.kz>'; // от кого
	$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
	header("location:/");
}
if(isset($_POST['OrderToCall'])){
 /* Здесь проверяется существование переменных */
	if (isset($_POST['phoneNumber'])) {$phone = $_POST['phoneNumber'];}
	if (isset($_POST['userName'])) {$name = $_POST['userName'];}

	$type = "Заявка на звонок";
	/* Сюда впишите свою эл. почту */
	 $address = "info@discoverytour.kz";

	/* А здесь прописывается текст сообщения, \n - перенос строки */
	$mes = "Тема: $type\nТелефон: $phone\nИмя: $name";

	/* А эта функция как раз занимается отправкой письма на указанный вами email */
	$sub='Заявка на звонок'; //сабж
	$email='<discoverytour.kz>'; // от кого
	$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
		header("location:/");
}
if(isset($_POST['GetConsult'])){
	/* Здесь проверяется существование переменных */
	if (isset($_POST['phoneNumber'])) {$phone = $_POST['phoneNumber'];}
	if (isset($_POST['name'])) {$name = $_POST['name'];}

	$type = "Получить консультацию по зонам отдыха";
	/* Сюда впишите свою эл. почту */
	$address = "info@discoverytour.kz";

	/* А здесь прописывается текст сообщения, \n - перенос строки */
	$mes = "Тема: $type\nТелефон: $phone\nИмя: $name";

	/* А эта функция как раз занимается отправкой письма на указанный вами email */
	$sub="Получить консультацию по зонам отдыха"; //сабж
	$email='<discoverytour.kz>'; // от кого
	$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
	header("location:/");
}
if(isset($_POST['KnowMore'])){
	/* Здесь проверяется существование переменных */
	if (isset($_POST['phoneNumber'])) {$phone = $_POST['phoneNumber'];}
	if (isset($_POST['name'])) {$name = $_POST['name'];}

	$type = "Узнать подробнее по зонам отдыха";
	/* Сюда впишите свою эл. почту */
	$address = "info@discoverytour.kz";

	/* А здесь прописывается текст сообщения, \n - перенос строки */
	$mes = "Тема: $type\nТелефон: $phone\nИмя: $name";

	/* А эта функция как раз занимается отправкой письма на указанный вами email */
	$sub='Узнать подробнее по зонам отдыха'; //сабж
	$email='<discoverytour.kz>'; // от кого
	$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
	header("location:/");
}
?>