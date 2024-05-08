<?php

	namespace JD\domain\OpenOrderSplitDeliverNew;
	class DeliverInfo
	{

		private $params = array();
		private $deliveryId;
		private $shipmentType;
		private $logiCompany;
		private $customerCode;
		private $logiNo;

		function __construct()
		{
			$this->params["@type"] = "com.jd.gongxiao.kepler.domain.DeliverInfo";
		}

		public function getDeliveryId()
		{
			return $this->deliveryId;
		}

		public function setDeliveryId($deliveryId)
		{
			$this->params['deliveryId'] = $deliveryId;
		}

		public function getShipmentType()
		{
			return $this->shipmentType;
		}

		public function setShipmentType($shipmentType)
		{
			$this->params['shipmentType'] = $shipmentType;
		}

		public function getLogiCompany()
		{
			return $this->logiCompany;
		}

		public function setLogiCompany($logiCompany)
		{
			$this->params['logiCompany'] = $logiCompany;
		}

		public function getCustomerCode()
		{
			return $this->customerCode;
		}

		public function setCustomerCode($customerCode)
		{
			$this->params['customerCode'] = $customerCode;
		}

		public function getLogiNo()
		{
			return $this->logiNo;
		}

		public function setLogiNo($logiNo)
		{
			$this->params['logiNo'] = $logiNo;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>