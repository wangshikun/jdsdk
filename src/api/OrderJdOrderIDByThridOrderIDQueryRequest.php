<?php

	namespace JD\api;
	class OrderJdOrderIDByThridOrderIDQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $thirdOrder;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "biz.order.jdOrderIDByThridOrderID.query";
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

		public function getThirdOrder()
		{
			return $this->apiParas['thirdOrder'];
		}

		public function setThirdOrder($thirdOrder)
		{
			$this->apiParas['thirdOrder'] = $thirdOrder;
		}
	}

	?>