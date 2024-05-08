<?php

	namespace JD\api;
	class PriceSellPriceGetRequest
	{

		private $apiParas = array();
		private $version;
		private $sku;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "biz.price.sellPrice.get";
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

		public function getSku()
		{
			return $this->apiParas['sku'];
		}

		public function setSku($sku)
		{
			$this->apiParas['sku'] = $sku;
		}
	}

	?>