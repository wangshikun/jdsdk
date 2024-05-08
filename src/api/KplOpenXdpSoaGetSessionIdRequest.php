<?php

	namespace JD\api;
	class KplOpenXdpSoaGetSessionIdRequest
	{

		private $apiParas = array();
		private $version;
		private $deviceId;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.xdp.soa.getSessionId";
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

		public function getDeviceId()
		{
			return $this->apiParas['deviceId'];
		}

		public function setDeviceId($deviceId)
		{
			$this->apiParas['deviceId'] = $deviceId;
		}
	}

	?>