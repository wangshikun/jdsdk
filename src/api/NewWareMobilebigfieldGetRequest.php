<?php

	namespace JD\api;
	class NewWareMobilebigfieldGetRequest
	{

		private $apiParas = array();
		private $version;
		private $skuId;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jingdong.new.ware.mobilebigfield.get";
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

		public function getSkuId()
		{
			return $this->apiParas['skuId'];
		}

		public function setSkuId($skuId)
		{
			$this->apiParas['skuId'] = $skuId;
		}
	}

	?>