<?php

	namespace JD\domain\KplOpenPolcenterSubscribeorder;
	class Request
	{

		private $params = array();
		private $orderNum;
		private $mobile;
		private $factoryId;
		private $androidId;
		private $imei;
		private $wifiMac;
		private $clientIp;
		private $bussName;

		function __construct()
		{
			$this->params["@type"] = "com.jd.polcenter.manager.entity.CommonRequest";
		}

		public function getOrderNum()
		{
			return $this->orderNum;
		}

		public function setOrderNum($orderNum)
		{
			$this->params['orderNum'] = $orderNum;
		}

		public function getMobile()
		{
			return $this->mobile;
		}

		public function setMobile($mobile)
		{
			$this->params['mobile'] = $mobile;
		}

		public function getFactoryId()
		{
			return $this->factoryId;
		}

		public function setFactoryId($factoryId)
		{
			$this->params['factoryId'] = $factoryId;
		}

		public function getAndroidId()
		{
			return $this->androidId;
		}

		public function setAndroidId($androidId)
		{
			$this->params['androidId'] = $androidId;
		}

		public function getImei()
		{
			return $this->imei;
		}

		public function setImei($imei)
		{
			$this->params['imei'] = $imei;
		}

		public function getWifiMac()
		{
			return $this->wifiMac;
		}

		public function setWifiMac($wifiMac)
		{
			$this->params['wifiMac'] = $wifiMac;
		}

		public function getClientIp()
		{
			return $this->clientIp;
		}

		public function setClientIp($clientIp)
		{
			$this->params['clientIp'] = $clientIp;
		}

		public function getBussName()
		{
			return $this->bussName;
		}

		public function setBussName($bussName)
		{
			$this->params['bussName'] = $bussName;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>