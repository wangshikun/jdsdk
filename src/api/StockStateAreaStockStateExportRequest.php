<?php

	namespace JD\api;
	class StockStateAreaStockStateExportRequest
	{


		private $apiParas = array();
		private $version;
		private $CallerParam;
		private $AreaStockStateSpuGlobalParam;

		public function getApiMethodName()
		{
			return "jingdong.stock.state.areaStockStateExport";
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

		public function getCallerParam()
		{
			return $this->apiParas['CallerParam'];
		}

		public function setCallerParam($CallerParam)
		{
			$this->apiParas['CallerParam'] = $CallerParam;
		}

		public function getAreaStockStateSpuGlobalParam()
		{
			return $this->apiParas['AreaStockStateSpuGlobalParam'];
		}

		public function setAreaStockStateSpuGlobalParam($AreaStockStateSpuGlobalParam)
		{
			$this->apiParas['AreaStockStateSpuGlobalParam'] = $AreaStockStateSpuGlobalParam;
		}
	}

	?>