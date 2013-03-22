UniPAY
======

UniPAY PaymentSystem integration library

Usage example:

require_once 'UniPAY.php';

try {
    $unipay = new UniPAY('7030789', 'EX5MVawtbyA6', 'https://www.unipay.ge/API/TESTUPCONNECT/?WSDL');
    $result = $unipay->startAttachAccount(
        mt_rand(),
        '00000000001',
        'someuser112',
        '7007000',
        'TestName',
        'TestSurename'
    );

    var_dump($result);

} catch (SoapFault $e) {
    echo 'Connection Error: ' . $e->getMessage();
} catch (LocalException $e) {
    echo 'Local Error: ' . $e->getMessage();
} catch (Exception $e) {
    echo 'Unknown Error: ' . $e->getMessage();
}
