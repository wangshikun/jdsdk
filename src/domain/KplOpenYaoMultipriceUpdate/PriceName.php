<?php

	namespace JD\domain\KplOpenYaoMultipriceUpdate;
	class PriceName
	{

		private $params = array();
		private $price;
		private $priceNameEnum;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.PriceName";
		}

		public function getPrice()
		{
			return $this->price;
		}

		public function setPrice($price)
		{
			$this->params['price'] = $price;
		}

		public function getPriceNameEnum()
		{
			return $this->priceNameEnum;
		}

		public function setPriceNameEnum($priceNameEnum)
		{
			$this->params['priceNameEnum'] = $priceNameEnum;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>