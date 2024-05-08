<?php

	namespace JD\domain\StockStateAreaStockStateExport;
	class CoordnateParam
	{

		private $params = array();
		private $longtitude;
		private $latitude;
		private $coordType;

		function __construct()
		{
			$this->params["@type"] = "com.jd.stock.state.export.vo.param.CoordnateParam";
		}

		public function getLongtitude()
		{
			return $this->longtitude;
		}

		public function setLongtitude($longtitude)
		{
			$this->params['longtitude'] = $longtitude;
		}

		public function getLatitude()
		{
			return $this->latitude;
		}

		public function setLatitude($latitude)
		{
			$this->params['latitude'] = $latitude;
		}

		public function getCoordType()
		{
			return $this->coordType;
		}

		public function setCoordType($coordType)
		{
			$this->params['coordType'] = $coordType;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>