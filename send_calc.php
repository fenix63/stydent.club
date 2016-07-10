<?php
	header('Content-type: text/html; charset=utf-8');
	//error_reporting(0);   

if(!empty($_POST['send'])) {

	$name = substr(htmlspecialchars(trim($_POST['name'])), 0, 300);
	$tel = substr(htmlspecialchars(trim($_POST['tel'])), 0, 100);
    $email = substr(htmlspecialchars(trim($_POST['email'])), 0, 100);
	
	$ip = $_SERVER['REMOTE_ADDR'];

	$Nzakaz = rand(10000, 99999);

	$mess  = "Имя: <b>".$name."</b><br />";
	$mess .= "Телефон: <b>".$tel."</b><br />";
    $mess .= "Email: <b>".$email."</b><br />";
	
	$theme = "Заявка Z".$Nzakaz;

	//if(mail("youran198824@gmail.com", $theme, $mess, "From: test@учеба.top <test@учеба.top>\nContent-Type: text/html;\n charset=utf-8\nX-Priority: 0"))
	if(mail("pohydey@gmail.com", $theme, $mess,"Content-Type: text/html;\n charset=utf-8\nX-Priority: 0"))
	{
	
		echo "<h3>Данные удачно отправлены.</h3>";
		echo "<p>Заявке присвоен номер Z".$Nzakaz.". Наш менеджер вышлет вам расчёт займа в ближайшее время.</p>";
	}
	else
	{
		echo "error";
	}
        
    }
else {
	
	echo "<h2>Ошибка! Попробуйте еще раз.</h2>";
	
}
	
?>