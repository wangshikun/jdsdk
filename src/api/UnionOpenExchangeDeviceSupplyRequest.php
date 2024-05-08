<?php

	namespace JD\api;
	class UnionOpenExchangeDeviceSupplyRequest
	{

		private $apiParas = array();
		private $version;
		private $supplyDeviceReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.exchange.device.supply";
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

		public function getSupplyDeviceReq()
		{
			return $this->apiParas['supplyDeviceReq'];
		}

		public function setSupplyDeviceReq($supplyDeviceReq)
		{
			$this->apiParas['supplyDeviceReq'] = $supplyDeviceReq;
		}
	}

	?>