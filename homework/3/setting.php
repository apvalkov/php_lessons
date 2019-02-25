<?php  

$shop = [
	requisites => [
    		'name'	    => 'Магазин "5-копеек"',
		'address'   => 'г.Донецк, ул.Кирова, д.888/б',
		'idNumber'  => 'Свидетельство ЕРСГР №1234567891011',
		'direction' => 'Босс'
	],
    	alcoholSection => [
	    	'name' => 'Отдел алкогольных напитков',
        		SectionSize => [
        			'allSize' => 'размеры отдела ХХ*ХХ*ХХ',
        			'windows' => 'колличество витрин 10',
              			'square'  => "1200"
        		],
	       	Workers => [
    	    		'manager' => 'Ф.И.О №1',
        		'seller1' => 'Ф.И.О №2',
        		'seller2' => 'Ф.И.О №3',
        		'seller3' => 'Ф.И.О №4',
        		'cleaner' => 'Баба Глаша'
        	],
     	   	TimeOfWork => [
     			'monday' => 'Понедельник с 9:00- до 21:00',
    	    		'tuesday' => 'Вторник с 9:00- до 21:00',
      	 		'wednesday' => 'Среда с 9:00- до 21:00',
     	   		'thursday' => 'Четверг с 9:00- до 21:00',
   		  	'friday' => 'Пятница с 9:00- до 21:00',
      			'saturday' => 'Суббота с 8:00- до 23:00',
      			'sunday' => 'Воскресенье с 8:00- до 23:00'
      		],
      	],	
      	meatSection => [
        	'name' => 'Мясной отдел',     
            		SectionSize => [
              			'allSize' => 'размеры отдела ХХ*ХХ*ХХ',
              			'windows' => 'колличество витрин 5',
              			'square' => "1450"
        ],
         	 Workers => [
            		'manager' => 'Ф.И.О №1',
            		'seller1' => 'Ф.И.О №2',
            		'seller2' => 'Ф.И.О №3',
           		'seller3' => 'Ф.И.О №4',
            		'cleaner' => 'Баба Дуся'
          	],
         	TimeOfWork => [
            		'monday' => 'Понедельник с 7:00- до 18:00',
            		'tuesday' => 'Вторник с 7:00- до 18:00',
            		'wednesday' => 'Среда с 7:00- до 18:00',
            		'thursday' => 'Четверг с 7:00- до 18:000',
            		'friday' => 'Пятница с с 7:00- до 18:00',
            		'saturday' => 'Суббота с 8:00- до 19:00',
            		'sunday' => 'Воскресенье с 8:00- до 19:00'
         	],
      ],  
];

$cards = [
    '1' =>[
      'number' => 'cart № 0001',
      'buyer' => 'Семёнов И.К',
      'dateOfReciept' => '15.09.2015',
      'ban' => TRUE
    ],
    '2' =>[
      'number' => 'cart № 0002',
      'buyer' => 'Деточкин А.А.',
      'dateOfReciept' => '29.12.2017',
      'ban' => FALSE
    ],
    '3' =>[
      'number' => 'cart № 0003',
      'buyer' => 'Сергеев B.А.',
      'dateOfReciept' => '05.03.2018',
      'ban' => FALSE
    ],
];
?>