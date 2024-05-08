<?php

	namespace JD\api;
	class KplOpenRegularPlanShipmentorderRequest
	{

		private $apiParas = array();
		private $version;
		private $shipmentParam;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.regular.plan.shipmentorder";
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

		public function getShipmentParam()
		{
			return $this->apiParas['shipmentParam'];
		}

		public function setShipmentParam($shipmentParam)
		{
			$this->apiParas['shipmentParam'] = $shipmentParam;
		}
	}

	?>