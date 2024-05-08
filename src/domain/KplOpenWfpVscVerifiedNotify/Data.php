<?php

	namespace JD\domain\KplOpenWfpVscVerifiedNotify;
	class Data
	{

		private $params = array();
		private $recordList;
		private $transactionId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.VerifyNotify";
		}

		public function setRecordList($recordList)
		{
			$size = count($recordList);
			for ($i = 0; $i < $size; $i++) {
				$recordList [$i] = $recordList [$i]->getInstance();
			}
			$this->params['recordList'] = $recordList;
		}

		function getInstance()
		{
			return $this->params;
		}

		public function getTransactionId()
		{
			return $this->transactionId;
		}

		public function setTransactionId($transactionId)
		{
			$this->params['transactionId'] = $transactionId;
		}

	}

	?>