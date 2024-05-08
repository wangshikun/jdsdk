<?php

	namespace JD\domain\StockOpenApiUpdateVenderStockNum;
	class VenderStockDetailParam
	{

		private $params = array();
		private $num;
		private $skuId;
		private $sid;

		function __construct()
		{
			$this->params["@type"] = "com.jd.stock.bk.export.param.VenderStockDetailParam";
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

		public function getSid()
		{
			return $this->sid;
		}

		public function setSid($sid)
		{
			$this->params['sid'] = $sid;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>