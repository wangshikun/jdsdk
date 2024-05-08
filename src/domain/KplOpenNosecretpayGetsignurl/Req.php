<?php

	namespace JD\domain\KplOpenNosecretpayGetsignurl;
	class Req
	{

		private $params = array();
		private $deviceId;
		private $returnUrl;
		private $macAddress;
		private $imei;
		private $appType;

		function __construct()
		{
			$this->params["@type"] = "com.jd.alpha.config.wrap.NosecretPaySignUrlReq";
		}

		public function getDeviceId()
		{
			return $this->deviceId;
		}

		public function setDeviceId($deviceId)
		{
			$this->params['deviceId'] = $deviceId;
		}

		public function getReturnUrl()
		{
			return $this->returnUrl;
		}

		public function setReturnUrl($returnUrl)
		{
			$this->params['returnUrl'] = $returnUrl;
		}

		public function getMacAddress()
		{
			return $this->macAddress;
		}

		public function setMacAddress($macAddress)
		{
			$this->params['macAddress'] = $macAddress;
		}

		public function getImei()
		{
			return $this->imei;
		}

		public function setImei($imei)
		{
			$this->params['imei'] = $imei;
		}

		public function getAppType()
		{
			return $this->appType;
		}

		public function setAppType($appType)
		{
			$this->params['appType'] = $appType;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>