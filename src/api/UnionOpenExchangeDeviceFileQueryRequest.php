<?php

	namespace JD\api;
	class UnionOpenExchangeDeviceFileQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $deviceFileQueryReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.exchange.device.file.query";
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

		public function getDeviceFileQueryReq()
		{
			return $this->apiParas['deviceFileQueryReq'];
		}

		public function setDeviceFileQueryReq($deviceFileQueryReq)
		{
			$this->apiParas['deviceFileQueryReq'] = $deviceFileQueryReq;
		}
	}

	?>