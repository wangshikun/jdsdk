<?php

	namespace JD\domain\KplOpenWfpVscMakeCertCallback;
	class Data
	{

		private $params = array();
		private $certList;
		private $status;
		private $orderId;
		private $errMsg;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.MakingCertResult";
		}

		public function setCertList($certList)
		{
			$size = count($certList);
			for ($i = 0; $i < $size; $i++) {
				$certList [$i] = $certList [$i]->getInstance();
			}
			$this->params['certList'] = $certList;
		}

		function getInstance()
		{
			return $this->params;
		}

		public function getStatus()
		{
			return $this->status;
		}

		public function setStatus($status)
		{
			$this->params['status'] = $status;
		}

		public function getOrderId()
		{
			return $this->orderId;
		}

		public function setOrderId($orderId)
		{
			$this->params['orderId'] = $orderId;
		}

		public function getErrMsg()
		{
			return $this->errMsg;
		}

		public function setErrMsg($errMsg)
		{
			$this->params['errMsg'] = $errMsg;
		}

	}

	?>