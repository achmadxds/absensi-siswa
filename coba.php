<?php  
	$a = file_get_contents('https://kalenderindonesia.com/api/APIHPnFCegVK2/libur/masehi/2021');
	pr(json_decode($a, 1), __FILE__.':'.__LINE__);
?>