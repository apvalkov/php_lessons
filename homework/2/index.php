<<?php
//Домашнее задание урока 2

//Входные данные

define ("ADULT","18");	//Возраст совершеннолетия
$age = 23;		//Известный возраст
$alcohol = true;	//Наличие алкоголя в товаре или списке
$ban = false;		//Наличие запрета
$price = 0;		//Стоимость товаров
$balance =0;	//Баланс покупателя

if (($age < ADULT) && ($alcohol = true)){				//
	$ban = true;
	echo 'Вы не можете купить товары содержащие алкоголь!';	//Пункт №1 практ.ч.
}
	else {

	$price = 200;						
	echo 'Сумма покупки:', $price;				//Пункт №2
}

if ($ban !== true) {
	//Внесение денег
	$balance = 200; 						
	$change = $balance - $price;
	if (($change) > 0) {
		echo 'Покупка прошла успешно';			//Пункт №3 полученная сумма больше суммы покупки
		echo 'Ваша сдача: ', $change;				//Пункт №5 полученная сумма больше и не равна сумме покупки
		//Выдаем сдачу
		echo 'Сделка прошла удачно!';				//Пункт №6 удачная сделака, товар оплачен, покупатель получил сдачу
	}
		else {
			if ($change = 0) {
				echo 'Сделка прошла удачно!';			//Пункт №6 удачная сделака, товар оплачен, сдача не требуется
			}
				else {
				echo 'Недостаточно средств для покупки!';	//Пункт №4 недостаточно средств
			}	
	}
}							
?>		