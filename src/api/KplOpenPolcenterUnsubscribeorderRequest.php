<?php

	namespace JD\api;
	class KplOpenPolcenterUnsubscribeorderRequest
	{


		private $apiParas = array();
		private $version;
		private $factoryId;
		private $clientIp;
		private $mobile;
		private $orderNum;
		private $imei;
		private $wifiMac;
		private $bussName;
		private $androidId;

		public function getApiMethodName()
		{
			return "jingdong.kpl.open.polcenter.unsubscribeorder";
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

		public function getFactoryId()
		{
			return $this->factoryId;
		}

		public function setFactoryId($factoryId)
		{
			$this->factoryId = $factoryId;
			$this->apiParas["factoryId"] = $factoryId;
		}

		public function getClientIp()
		{
			return $this->clientIp;
		}

		public function setClientIp($clientIp)
		{
			$this->clientIp = $clientIp;
			$this->apiParas["clientIp"] = $clientIp;
		}

		public function getMobile()
		{
			return $this->mobile;
		}

		public function setMobile($mobile)
		{
			$this->mobile = $mobile;
			$this->apiParas["mobile"] = $mobile;
		}

		public function getOrderNum()
		{
			return $this->orderNum;
		}

		public function setOrderNum($orderNum)
		{
			$this->orderNum = $orderNum;
			$this->apiParas["orderNum"] = $orderNum;
		}

		public function getImei()
		{
			return $this->imei;
		}

		public function setImei($imei)
		{
			$this->imei = $imei;
			$this->apiParas["imei"] = $imei;
		}

		public function getWifiMac()
		{
			return $this->wifiMac;
		}

		public function setWifiMac($wifiMac)
		{
			$this->wifiMac = $wifiMac;
			$this->apiParas["wifiMac"] = $wifiMac;
		}

		public function getBussName()
		{
			return $this->bussName;
		}

		public function setBussName($bussName)
		{
			$this->bussName = $bussName;
			$this->apiParas["bussName"] = $bussName;
		}

		public function getAndroidId()
		{
			return $this->androidId;
		}

		public function setAndroidId($androidId)
		{
			$this->androidId = $androidId;
			$this->apiParas["androidId"] = $androidId;
		}

	}





        
 

