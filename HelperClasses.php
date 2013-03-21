<?php

/**
 * This class describes default methods and properties of object
 * returned after SOAP request.
 */
abstract class AbstractResult {
	/**
	 * @var int Process success only when errorcode == 0.
	 * @see UniPAY Constants with prefix EC_, e.g. EC_SUCCESS.
	 */
	public $errorcode;

	/**
	 * @var string Some text message, on success text == “success”.
	 */
	public $text;
}

class StartAttachAccountResult extends AbstractResult {
	/**
	 * @var int Attachment identifer in unipay system, (Allready must be saved).
	 */
	public $UPAttachID;
}

class ConfirmAttachAccountResult extends AbstractResult {
	/**
	 * @var int Attachment identifer in unipay system, (Allready must be saved).
	 */
	public $UPAttachID;
}

class WalletResult extends AbstractResult {
	/**
	 * @var string $UPOrderID Transaction ID in unipay system, (must be saved !important).
	 */
	public $UPOrderID;
}

class TransitResult extends AbstractResult {
	/**
	 * @var string $UPOrderID Transaction ID in unipay system, (must be saved !important).
	 */
	public $UPOrderID;
}

class GetBankAccountsResult extends AbstractResult {
	/**
	 * @return BankAccount
	 * @throws Exception
	 */
	public function BankAccounts() {}
}

	class BankAccount {
		/**
		 * @var int Bank ID.
		 */
		public $id;

		/**
		 * @var string Bank Name/Title.
		 */
		public $title;

		/**
		 * @var string IBAN number (acc number).
		 */
		public $accountNumber;
	}

class GetCardsResult extends AbstractResult {
	/**
	 * @return Cards
	 * @throws Exception
	 */
	public function Cards() {}
}

	class Cards {
		/**
		 * @var int Card ID.
		 */
		public $id;

		/**
		 * @var string Card title.
		 */
		public $title;
	}

class ConfirmOpFromCardResult extends AbstractResult {
	/**
	 * @var string $UPOrderID Transaction ID in unipay system, (must be saved !important).
	 */
	public $UPOrderID;
}

class GetAllBanksResult extends AbstractResult {
	/**
	 * @return Banks
	 * @throws Exception
	 */
	public function Banks() {}
}

	class Banks {
		/**
		 * @var int Card ID.
		 */
		public $id;

		/**
		 * @var string Card title.
		 */
		public $title;

		/**
		 * @var array array of banks branches (array of string).
		 */
		public $branches;
	}

class AddBankAccountResult extends AbstractResult {}