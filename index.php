<?php

require_once 'UniPAY.php';

try {
	$unipay = new UniPAY();
	$unipay->setOptions('', '', '');

	$result = $unipay->startAttachAccount(
		'', '00000000001', 'someuser112', '7007000', 'TestName', 'TestSurename'
	);

	var_dump($result);

} catch (SoapFault $e) {
	echo 'UniPAY System Error';
} catch (LocalException $e) {
	echo $e->getMessage();
} catch (Exception $e) {
	echo 'Unknown Error: ' . $e->getMessage();
}
