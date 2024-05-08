<?php

	namespace JD\domain\StockStateAreaStockStateExport;
	class SkuNumParam
	{

		private $params = array();
		private $num;
		private $skuId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.stock.state.export.vo.param.SkuNumParam";
		}

		public function getNum()
		{
			return $this->num;
		}

		public function setNum($num)
		{
			$this->params['num'] = $num;
		}

		public function getSkuId()
		{
			return $this->skuId;
		}

		public function setSkuId($skuId)
		{
			$this->params['skuId'] = $skuId;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>