<?php

	namespace JD\api;
	class KplOpenRegularPlanCompletedorderRequest
	{

		private $apiParas = array();
		private $version;
		private $venderId;
		private $planId;
		private $orderId;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.regular.plan.completedorder";
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

		public function getPlanId()
		{
			return $this->apiParas['planId'];
		}

		public function setPlanId($planId)
		{
			$this->apiParas['planId'] = $planId;
		}

		public function getOrderId()
		{
			return $this->apiParas['orderId'];
		}

		public function setOrderId($orderId)
		{
			$this->apiParas['orderId'] = $orderId;
		}
	}

	?>