<?php

require_once 'UniPAY.php';

try {
	$unipay = new UniPAY();
	$unipay->setOptions('m1', 'm2', 'm3');

	$result = $unipay->startAttachAccount(
		'x1', 'x2', 'x3', 'x4', 'x5', 'x6'
	);

	var_dump($result);

} catch (SoapFault $e) {
	echo 'UniPAY System Error';
} catch (LocalException $e) {
	echo $e->getMessage();
} catch (Exception $e) {
	echo 'Unknown Error: ' . $e->getMessage();
}
