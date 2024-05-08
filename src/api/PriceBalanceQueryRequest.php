<?php

	namespace JD\api;
	class PriceBalanceQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $payType;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "biz.price.balance.query";
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

		public function getPayType()
		{
			return $this->apiParas['payType'];
		}

		public function setPayType($payType)
		{
			$this->apiParas['payType'] = $payType;
		}
	}

	?>