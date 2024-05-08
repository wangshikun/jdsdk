<?php

	namespace JD\domain\AfterSaleAfsApplyCreate;
	class AsPickwareDto
	{

		private $params = array();
		private $pickwareType;
		private $pickwareProvince;
		private $pickwareCity;
		private $pickwareCounty;
		private $pickwareVillage;
		private $pickwareAddress;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.AfterSalePickwareDto";
		}

		public function getPickwareType()
		{
			return $this->pickwareType;
		}

		public function setPickwareType($pickwareType)
		{
			$this->params['pickwareType'] = $pickwareType;
		}

		public function getPickwareProvince()
		{
			return $this->pickwareProvince;
		}

		public function setPickwareProvince($pickwareProvince)
		{
			$this->params['pickwareProvince'] = $pickwareProvince;
		}

		public function getPickwareCity()
		{
			return $this->pickwareCity;
		}

		public function setPickwareCity($pickwareCity)
		{
			$this->params['pickwareCity'] = $pickwareCity;
		}

		public function getPickwareCounty()
		{
			return $this->pickwareCounty;
		}

		public function setPickwareCounty($pickwareCounty)
		{
			$this->params['pickwareCounty'] = $pickwareCounty;
		}

		public function getPickwareVillage()
		{
			return $this->pickwareVillage;
		}

		public function setPickwareVillage($pickwareVillage)
		{
			$this->params['pickwareVillage'] = $pickwareVillage;
		}

		public function getPickwareAddress()
		{
			return $this->pickwareAddress;
		}

		public function setPickwareAddress($pickwareAddress)
		{
			$this->params['pickwareAddress'] = $pickwareAddress;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>