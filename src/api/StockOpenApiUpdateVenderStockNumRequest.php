<?php

	namespace JD\api;
	class StockOpenApiUpdateVenderStockNumRequest
	{


		private $apiParas = array();
		private $version;
		private $venderStockParam;
		private $callerParam;

		public function getApiMethodName()
		{
			return "jingdong.stock.open.api.updateVenderStockNum";
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

		public function getVenderStockParam()
		{
			return $this->apiParas['venderStockParam'];
		}

		public function setVenderStockParam($venderStockParam)
		{
			$this->apiParas['venderStockParam'] = $venderStockParam;
		}

		public function getCallerParam()
		{
			return $this->apiParas['callerParam'];
		}

		public function setCallerParam($callerParam)
		{
			$this->apiParas['callerParam'] = $callerParam;
		}
	}

	?>