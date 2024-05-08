<?php

	namespace JD\api;
	class KplOpenYaoOrdersyncGetorderlistRequest
	{


		private $apiParas = array();
		private $version;
		private $venderId;
		private $orderId;

		public function getApiMethodName()
		{
			return "jingdong.kpl.open.yao.ordersync.getorderlist";
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
			return $this->venderId;
		}

		public function setVenderId($venderId)
		{
			$this->venderId = $venderId;
			$this->apiParas["venderId"] = $venderId;
		}

		public function getOrderId()
		{
			return $this->orderId;
		}

		public function setOrderId($orderId)
		{
			$this->orderId = $orderId;
			$this->apiParas["orderId"] = $orderId;
		}
	}





        
 

