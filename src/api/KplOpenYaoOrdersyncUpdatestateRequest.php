<?php

	namespace JD\api;
	class KplOpenYaoOrdersyncUpdatestateRequest
	{

		private $apiParas = array();
		private $version;
		private $venderId;
		private $orderId;
		private $deliverInfo;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.yao.ordersync.updatestate";
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

		public function getVenderId()
		{
			return $this->apiParas['venderId'];
		}

		public function setVenderId($venderId)
		{
			$this->apiParas['venderId'] = $venderId;
		}

		public function getOrderId()
		{
			return $this->apiParas['orderId'];
		}

		public function setOrderId($orderId)
		{
			$this->apiParas['orderId'] = $orderId;
		}

		public function getDeliverInfo()
		{
			return $this->apiParas['deliverInfo'];
		}

		public function setDeliverInfo($deliverInfo)
		{
			$this->apiParas['deliverInfo'] = $deliverInfo;
		}
	}

	?>