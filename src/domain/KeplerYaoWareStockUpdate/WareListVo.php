<?php

	namespace JD\domain\KeplerYaoWareStockUpdate;
	class WareListVo
	{

		private $params = array();
		private $venderSku;
		private $skuStock;
		private $skuPrice;

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

		function getInstance()
		{
			return $this->params;
		}

	}

	?>