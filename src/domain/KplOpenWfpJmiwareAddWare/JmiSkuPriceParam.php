<?php

	namespace JD\domain\KplOpenWfpJmiwareAddWare;
	class JmiSkuPriceParam
	{

		private $params = array();
		private $jSkuId;
		private $dateDay;
		private $stock;
		private $price;
		private $settingList;
		private $extPropertyList;
		private $preStock;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.JmiSkuPriceParam";
		}

		public function getJSkuId()
		{
			return $this->jSkuId;
		}

		public function setJSkuId($jSkuId)
		{
			$this->params['jSkuId'] = $jSkuId;
		}

		public function getDateDay()
		{
			return $this->dateDay;
		}

		public function setDateDay($dateDay)
		{
			$this->params['dateDay'] = $dateDay;
		}

		public function getStock()
		{
			return $this->stock;
		}

		public function setStock($stock)
		{
			$this->params['stock'] = $stock;
		}

		public function getPrice()
		{
			return $this->price;
		}

		public function setPrice($price)
		{
			$this->params['price'] = $price;
		}

		public function setSettingList($settingList)
		{
			$size = count($settingList);
			for ($i = 0; $i < $size; $i++) {
				$settingList [$i] = $settingList [$i]->getInstance();
			}
			$this->params['settingList'] = $settingList;
		}

		function getInstance()
		{
			return $this->params;
		}

		public function setExtPropertyList($extPropertyList)
		{
			$size = count($extPropertyList);
			for ($i = 0; $i < $size; $i++) {
				$extPropertyList [$i] = $extPropertyList [$i]->getInstance();
			}
			$this->params['extPropertyList'] = $extPropertyList;
		}

		public function getPreStock()
		{
			return $this->preStock;
		}

		public function setPreStock($preStock)
		{
			$this->params['preStock'] = $preStock;
		}

	}

	?>