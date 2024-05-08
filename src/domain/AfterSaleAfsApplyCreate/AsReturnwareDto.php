<?php

	namespace JD\domain\AfterSaleAfsApplyCreate;
	class AsReturnwareDto
	{

		private $params = array();
		private $returnwareType;
		private $returnwareProvince;
		private $returnwareCity;
		private $returnwareCounty;
		private $returnwareVillage;
		private $returnwareAddress;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.AfterSaleReturnwareDto";
		}

		public function getReturnwareType()
		{
			return $this->returnwareType;
		}

		public function setReturnwareType($returnwareType)
		{
			$this->params['returnwareType'] = $returnwareType;
		}

		public function getReturnwareProvince()
		{
			return $this->returnwareProvince;
		}

		public function setReturnwareProvince($returnwareProvince)
		{
			$this->params['returnwareProvince'] = $returnwareProvince;
		}

		public function getReturnwareCity()
		{
			return $this->returnwareCity;
		}

		public function setReturnwareCity($returnwareCity)
		{
			$this->params['returnwareCity'] = $returnwareCity;
		}

		public function getReturnwareCounty()
		{
			return $this->returnwareCounty;
		}

		public function setReturnwareCounty($returnwareCounty)
		{
			$this->params['returnwareCounty'] = $returnwareCounty;
		}

		public function getReturnwareVillage()
		{
			return $this->returnwareVillage;
		}

		public function setReturnwareVillage($returnwareVillage)
		{
			$this->params['returnwareVillage'] = $returnwareVillage;
		}

		public function getReturnwareAddress()
		{
			return $this->returnwareAddress;
		}

		public function setReturnwareAddress($returnwareAddress)
		{
			$this->params['returnwareAddress'] = $returnwareAddress;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>