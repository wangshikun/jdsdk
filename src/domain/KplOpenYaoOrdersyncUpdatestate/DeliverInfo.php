<?php

	namespace JD\domain\KplOpenYaoOrdersyncUpdatestate;
	class DeliverInfo
	{

		private $params = array();
		private $shipmentType;
		private $customerCode;
		private $deliveryId;
		private $logiNo;
		private $logiCompany;

		function __construct()
		{
			$this->params["@type"] = "com.jd.gongxiao.kepler.domain.DeliverInfo";
		}

		public function getShipmentType()
		{
			return $this->shipmentType;
		}

		public function setShipmentType($shipmentType)
		{
			$this->params['shipmentType'] = $shipmentType;
		}

		public function getCustomerCode()
		{
			return $this->customerCode;
		}

		public function setCustomerCode($customerCode)
		{
			$this->params['customerCode'] = $customerCode;
		}

		public function getDeliveryId()
		{
			return $this->deliveryId;
		}

		public function setDeliveryId($deliveryId)
		{
			$this->params['deliveryId'] = $deliveryId;
		}

		public function getLogiNo()
		{
			return $this->logiNo;
		}

		public function setLogiNo($logiNo)
		{
			$this->params['logiNo'] = $logiNo;
		}

		public function getLogiCompany()
		{
			return $this->logiCompany;
		}

		public function setLogiCompany($logiCompany)
		{
			$this->params['logiCompany'] = $logiCompany;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>