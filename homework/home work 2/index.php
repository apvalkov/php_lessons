<?php
	
	define (EIGHTIN_EARS, 18);
	$buyer_age = 37;
	$buyer_cash = 678;
	$amount = 350;
	$alcohol = true or false;
	$change = $buyer_cash - $amount;

	if ($buyer_age < EIGHTIN_EARS and $alcohol == true) {
		echo "���������� ������������������, � ������� ������������ ��������"; //������� �� ����� ��������������� ��������� ���� ���������� ������������������ � � ������� ������������ �������� 
	} 
	else {

		echo "C���� ������� $amount<br>"; //������� ��������� � ����� ������� ���� ��� �������� �� ������� �������
		if ($buyer_cash >= $amount) {
	 	echo '������ ������� �����������'; // ������� ��������� � ������� ������� ���� ����� ���������� �� ���������� ������ ����� �������
		}

		elseif ($buyer_cash < $amount) {
	 	echo '������������ ������� ��� ������ �������'; // ������� ��������� � ������������� ������� ���� git����� ���������� �� ���������� ������ ����� �������
	 	}  

		if ($buyer_cash > $amount) {
		echo "<br>����� ������� $amount, �������� ����� $buyer_cash, �����: $change"; // ������� ��������� � ����� ���� ����� ���������� �� ���������� ������ ����� ������� � �� ����� ����� �������
	
			if ($buyer_cash === $amount + $change) {
			echo "<br>������� �� �������"; // ������� ��������� � ������ ������������ ������ ��� ������� ��� ���������� � ������ ���� ����������� �� ����� � ������� �����( ���� ���� ���������� ) 
			} 
		} 
	} 	
?>
