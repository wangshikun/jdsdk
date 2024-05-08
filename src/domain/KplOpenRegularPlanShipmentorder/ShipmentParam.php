<?php

	namespace JD\domain\KplOpenRegularPlanShipmentorder;
	class ShipmentParam
	{

		private $params = array();
		private $venderId;
		private $planId;
		private $orderId;
		private $logiCoprId;
		private $logiNo;
		private $installId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.purchase.regular.api.domain.plan.ShipmentParam";
		}

		public function getVenderId()
		{
			return $this->venderId;
		}

		public function setVenderId($venderId)
		{
			$this->params['venderId'] = $venderId;
		}

		public function getPlanId()
		{
			return $this->planId;
		}

		public function setPlanId($planId)
		{
			$this->params['planId'] = $planId;
		}

		public function getOrderId()
		{
			return $this->orderId;
		}

		public function setOrderId($orderId)
		{
			$this->params['orderId'] = $orderId;
		}

		public function getLogiCoprId()
		{
			return $this->logiCoprId;
		}

		public function setLogiCoprId($logiCoprId)
		{
			$this->params['logiCoprId'] = $logiCoprId;
		}

		public function getLogiNo()
		{
			return $this->logiNo;
		}

		public function setLogiNo($logiNo)
		{
			$this->params['logiNo'] = $logiNo;
		}

		public function getInstallId()
		{
			return $this->installId;
		}

		public function setInstallId($installId)
		{
			$this->params['installId'] = $installId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>