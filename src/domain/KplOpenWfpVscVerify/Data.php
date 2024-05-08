<?php

	namespace JD\domain\KplOpenWfpVscVerify;
	class Data
	{

		private $params = array();
		private $transactionId;
		private $verifyingCertList;
		private $keepReserve;
		private $erpOrderId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.VerifyCerts";
		}

		public function getTransactionId()
		{
			return $this->transactionId;
		}

		public function setTransactionId($transactionId)
		{
			$this->params['transactionId'] = $transactionId;
		}

		public function setVerifyingCertList($verifyingCertList)
		{
			$size = count($verifyingCertList);
			for ($i = 0; $i < $size; $i++) {
				$verifyingCertList [$i] = $verifyingCertList [$i]->getInstance();
			}
			$this->params['verifyingCertList'] = $verifyingCertList;
		}

		function getInstance()
		{
			return $this->params;
		}

		public function getKeepReserve()
		{
			return $this->keepReserve;
		}

		public function setKeepReserve($keepReserve)
		{
			$this->params['keepReserve'] = $keepReserve;
		}

		public function getErpOrderId()
		{
			return $this->erpOrderId;
		}

		public function setErpOrderId($erpOrderId)
		{
			$this->params['erpOrderId'] = $erpOrderId;
		}

	}

	?>