<?php

	namespace JD\domain\KplOpenYaoShelfstateBatchupdate;
	class WareListVo
	{

		private $params = array();
		private $venderSku;
		private $status;
		private $skuStock;
		private $skuPrice;
		private $validTime;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.WareListVo";
		}

		public function getVenderSku()
		{
			return $this->venderSku;
		}

		public function setVenderSku($venderSku)
		{
			$this->params['venderSku'] = $venderSku;
		}

		public function getStatus()
		{
			return $this->status;
		}

		public function setStatus($status)
		{
			$this->params['status'] = $status;
		}

		public function getSkuStock()
		{
			return $this->skuStock;
		}

		public function setSkuStock($skuStock)
		{
			$this->params['skuStock'] = $skuStock;
		}

		public function getSkuPrice()
		{
			return $this->skuPrice;
		}

		public function setSkuPrice($skuPrice)
		{
			$this->params['skuPrice'] = $skuPrice;
		}

		public function getValidTime()
		{
			return $this->validTime;
		}

		public function setValidTime($validTime)
		{
			$this->params['validTime'] = $validTime;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>