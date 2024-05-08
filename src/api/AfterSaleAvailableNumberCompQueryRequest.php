<?php

	namespace JD\api;
	class AfterSaleAvailableNumberCompQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $param;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "biz.afterSale.availableNumberComp.query";
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

		public function getParam()
		{
			return $this->apiParas['param'];
		}

		public function setParam($param)
		{
			$this->apiParas['param'] = $param;
		}
	}

	?>