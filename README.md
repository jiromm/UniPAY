UniPAY
======

UniPAY PaymentSystem integration library

Usage example:

```php
require_once 'UniPAY.php';

try {
    $unipay = new UniPAY('', '', '');
    $result = $unipay->startAttachAccount(
        '', '', '', '', '', ''
    );

    var_dump($result);

} catch (SoapFault $e) {
    echo 'Connection Error: ' . $e->getMessage();
} catch (LocalException $e) {
    echo 'Local Error: ' . $e->getMessage();
} catch (Exception $e) {
    echo 'Unknown Error: ' . $e->getMessage();
}
```
