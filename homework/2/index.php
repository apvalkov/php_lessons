<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Домашняя работа №2</title>
</head>
<body>
<?php
//Вывести на экран предупреждающее сообщение если покупатель несовершеннолетний и в товарах присутствует алкоголь
//Вывести сообщение о сумме покупки если нет запретов на продажу товаров
//Вывести сообщение о удачной покупке если сумма полученная от покупателя больше суммы покупки
//Вывести сообщение о недостаточном балансе если сумма полученная от покупателя меньше суммы покупки
//Вывести сообщение о сдаче если сумма полученная от покупателя больше суммы покупки и не равна сумме покупки
//Вывести сообщение о удачно состоявшейся сделке при условии что покупатель в полной мере расплатился за товар и //получил сдачу( если было необходимо )

define("ADULT","18");	
$age = 30;		    //Возраст покупателя
$alcohol = true;	//Наличие алкоголя в списке товаров
$price = 800;		//Стоимость товаров
$balance =1530;	    //Баланс покупателя
$change=0;        //Сдача покупателя
if (($age < ADULT) && ($alcohol = true)){				
    	echo 'Вы не можете купить товары содержащие алкоголь!';	
}
	else {
	   echo 'Сумма покупки:', $price,'<br>';		
       $change = $balance - $price;
       if (($change) >0) {
		   echo 'Покупка прошла успешно','<br>';			
		   echo 'Ваша сдача: ', $change,'<br>';				
	       echo 'Сделка прошла удачно!';				
	     }
		else {
			if ($change = 0) {
				echo 'Сделка прошла удачно!';			
			}
				else {
				echo 'Недостаточно средств для покупки!';	
			}	
	}
}
?>
</body>
</html>