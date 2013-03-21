<?php

interface IUniPAY {
	public function setOptions($merchantId, $secretKey, $wsdl);

	public function startAttachAccount($attachID, $privateNumber, $pin, $upid, $name, $surname);

	public function confirmAttachAccount($UPAttachID, $code);

	public function wallet($UPAttachID, $attachID, $orderId, $amount, $currency, $token);

	public function getBankAccounts($UPAttachID, $attachID);

	public function transit($UPAttachID, $attachID, $orderId, $amount, $currency, $bankAccountId, $token);

	public function getCards($UPAttachID, $attachID);

	public function confirmOpFromCard($UPAttachID, $attachID, $orderId, $cardId, $amount, $currency, $cvc, $token);

	public function getAllBanks($UPAttachID, $attachID);

	public function addBankAccount($UPAttachID, $attachID, $bankId, $branch, $fullname, $bankAccount, $bankAccountName);
}
