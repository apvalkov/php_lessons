<?php
/**
 *
 */



echo $months[$month]['monthName'];

$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40]; 
$i=0;

While ($i <= 39) {
	echo $a[$i] . " ";
	$i++;
}

$month = 4;

	switch ($month) {
		case 1:
			echo "������";
			break;
		case 2:
			echo "�������";
			break;
		case 3:
			echo "����";
			break;
		case 4:
			echo "������";
			break;
		case 5:
			echo "���";
			break;
		case 6:
			echo "����";
			break;	
		case 7:
			echo "����";
			break;	
		case 8:
			echo "������";
			break;
		case 9:
			echo "��������";
			break;
		case 10:
			echo "�������";
			break;
		case 11:
			echo "������";
			break;
		case 12:
			echo "�������";
			break;							
		default:
			echo "�� �������";
			break;
	}