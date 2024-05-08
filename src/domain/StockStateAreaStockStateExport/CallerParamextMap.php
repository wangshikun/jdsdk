<?php

	namespace JD\domain\StockStateAreaStockStateExport;
	class CallerParamextMap
	{

		private $params = array();
		private $CallerParamKey;
		private $CallerParamValue;

		function __construct()
		{
			$this->params["@type"] = "java.util.Map";
		}

		public function getCallerParamKey()
		{
			return $this->CallerParamKey;
		}

		public function setCallerParamKey($CallerParamKey)
		{
			$this->params['CallerParamKey'] = $CallerParamKey;
		}

		public function getCallerParamValue()
		{
			return $this->CallerParamValue;
		}

		public function setCallerParamValue($CallerParamValue)
		{
			$this->params['CallerParamValue'] = $CallerParamValue;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>