<?php
/*
* Вывести на экран предупреждающее сообщение если покупатель несовершеннолетний и в товарах присутствует алкоголь
* Вывести сообщение о сумме покупки если нет запретов на продажу товаров

* Вывести сообщение о удачной покупке если сумма полученная от покупателя больше суммы покупки
* Вывести сообщение о недостаточном балансе если сумма полученная от покупателя меньше суммы покупки

* Вывести сообщение о сдаче если сумма полученная от покупателя больше суммы покупки и не равна сумме покупки
* Вывести сообщение о удачно состоявшейся сделке при условии что покупатель в полной мере расплатился за товар и получил сдачу( если было необходимо )
*/

define("MAJORITY", 18); // Возраст совершеннолетия
//Данные для обработки
$ageShopper = 32; // Возраст покупателя
$moneyShopper = 1201; // Наличные покупателя
$alcohol = true; // Наличе алкоголя в корзине покупателя TRUE, либо FALSE
$purchase = 1202; // Сумма покупки

if ($alcohol === true && $ageShopper < MAJORITY) {           // Вывести на экран предупреждающее сообщение если покупатель несовершеннолетний и в товарах присутствует алкоголь
	die("Продажа алкоголя несовершеннолетним запрещена.");
}
echo "Сумма Вашей покупки состовляет $purchase руб. <br>";   // Вывести сообщение о сумме покупки если нет запретов на продажу товаров

if ($moneyShopper >= $purchase ) {							 // Вывести сообщение о удачной покупке если сумма полученная от покупателя больше суммы покупки
	echo "Ваши $moneyShopper руб. <br>";
	if ($moneyShopper > $purchase) {						 // Вывести сообщение о сдаче если сумма полученная от покупателя больше суммы покупки и не равна сумме покупки
		$cashBack = $moneyShopper - $purchase;
		echo "Ваша сдача $cashBack руб.<br>";
	}
	echo "Спасибо за покупку!"; 							 // Вывести сообщение о удачно состоявшейся сделке при условии что покупатель в полной мере расплатился за товар и получил сдачу( если было необходимо )
}else {
	echo "У Вас недостаточно средств для покупки! ";		 // Вывести сообщение о недостаточном балансе если сумма полученная от покупателя меньше суммы покупки
}