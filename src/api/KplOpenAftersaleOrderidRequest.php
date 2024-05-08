<?php

	namespace JD\api;
	class KplOpenAftersaleOrderidRequest
	{

		private $apiParas = array();
		private $version;
		private $refId;
		private $orderId;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.aftersale.orderid";
		}

		public function getApiParas()
		{
			if (empty($this->apiParas)) {
				return "{}";
			}
			return json_encode($this->apiParas);
		}

		public function check()
		{

		}

		public function putOtherTextParam($key, $value)
		{
			$this->apiParas[$key] = $value;
			$this->$key = $value;
		}

		public function getVersion()
		{
			return $this->version;
		}

		public function setVersion($version)
		{
			$this->version = $version;
		}

		public function getRefId()
		{
			return $this->apiParas['refId'];
		}

		public function setRefId($refId)
		{
			$this->apiParas['refId'] = $refId;
		}

		public function getOrderId()
		{
			return $this->apiParas['orderId'];
		}

		public function setOrderId($orderId)
		{
			$this->apiParas['orderId'] = $orderId;
		}
	}

	?>