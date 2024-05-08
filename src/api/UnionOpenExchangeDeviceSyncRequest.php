<?php

	namespace JD\api;
	class UnionOpenExchangeDeviceSyncRequest
	{

		private $apiParas = array();
		private $version;
		private $deviceReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.exchange.device.sync";
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

		public function getDeviceReq()
		{
			return $this->apiParas['deviceReq'];
		}

		public function setDeviceReq($deviceReq)
		{
			$this->apiParas['deviceReq'] = $deviceReq;
		}
	}

	?>