<?php

	namespace JD\domain\StockStateAreaStockStateExport;
	class AreaParam
	{

		private $params = array();
		private $stateId;
		private $provinceId;
		private $cityId;
		private $countyId;
		private $townId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.stock.state.export.vo.param.AreaParam";
		}

		public function getStateId()
		{
			return $this->stateId;
		}

		public function setStateId($stateId)
		{
			$this->params['stateId'] = $stateId;
		}

		public function getProvinceId()
		{
			return $this->provinceId;
		}

		public function setProvinceId($provinceId)
		{
			$this->params['provinceId'] = $provinceId;
		}

		public function getCityId()
		{
			return $this->cityId;
		}

		public function setCityId($cityId)
		{
			$this->params['cityId'] = $cityId;
		}

		public function getCountyId()
		{
			return $this->countyId;
		}

		public function setCountyId($countyId)
		{
			$this->params['countyId'] = $countyId;
		}

		public function getTownId()
		{
			return $this->townId;
		}

		public function setTownId($townId)
		{
			$this->params['townId'] = $townId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>