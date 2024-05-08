<?php

	namespace JD\domain\StockStateAreaStockStateExport;
	class AreaStockStateSpuGlobalParamextMap
	{

		private $params = array();
		private $AreaStockStateSpuGlobalParamkey;
		private $AreaStockStateSpuGlobalParamvalue;

		function __construct()
		{
			$this->params["@type"] = "java.util.Map";
		}

		public function getAreaStockStateSpuGlobalParamkey()
		{
			return $this->AreaStockStateSpuGlobalParamkey;
		}

		public function setAreaStockStateSpuGlobalParamkey($AreaStockStateSpuGlobalParamkey)
		{
			$this->params['AreaStockStateSpuGlobalParamkey'] = $AreaStockStateSpuGlobalParamkey;
		}

		public function getAreaStockStateSpuGlobalParamvalue()
		{
			return $this->AreaStockStateSpuGlobalParamvalue;
		}

		public function setAreaStockStateSpuGlobalParamvalue($AreaStockStateSpuGlobalParamvalue)
		{
			$this->params['AreaStockStateSpuGlobalParamvalue'] = $AreaStockStateSpuGlobalParamvalue;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>