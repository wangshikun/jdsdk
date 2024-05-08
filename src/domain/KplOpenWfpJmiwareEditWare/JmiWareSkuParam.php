<?php

	namespace JD\domain\KplOpenWfpJmiwareEditWare;
	class JmiWareSkuParam
	{

		private $params = array();
		private $jSkuId;
		private $jWareId;
		private $outerId;
		private $skuPrice;
		private $quantity;
		private $indexOuterId;
		private $saleList;
		private $extSetting;
		private $preStock;
		private $mainVideoId;
		private $infoVideoId;
		private $mainVideoUrl;
		private $infoVideoUrl;
		private $jmiSkuPrices;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.JmiWareSkuParam";
		}

		public function getJSkuId()
		{
			return $this->jSkuId;
		}

		public function setJSkuId($jSkuId)
		{
			$this->params['jSkuId'] = $jSkuId;
		}

		public function getJWareId()
		{
			return $this->jWareId;
		}

		public function setJWareId($jWareId)
		{
			$this->params['jWareId'] = $jWareId;
		}

		public function getOuterId()
		{
			return $this->outerId;
		}

		public function setOuterId($outerId)
		{
			$this->params['outerId'] = $outerId;
		}

		public function getSkuPrice()
		{
			return $this->skuPrice;
		}

		public function setSkuPrice($skuPrice)
		{
			$this->params['skuPrice'] = $skuPrice;
		}

		public function getQuantity()
		{
			return $this->quantity;
		}

		public function setQuantity($quantity)
		{
			$this->params['quantity'] = $quantity;
		}

		public function getIndexOuterId()
		{
			return $this->indexOuterId;
		}

		public function setIndexOuterId($indexOuterId)
		{
			$this->params['indexOuterId'] = $indexOuterId;
		}

		public function setSaleList($saleList)
		{
			$size = count($saleList);
			for ($i = 0; $i < $size; $i++) {
				$saleList [$i] = $saleList [$i]->getInstance();
			}
			$this->params['saleList'] = $saleList;
		}

		function getInstance()
		{
			return $this->params;
		}

		public function setExtSetting($extSetting)
		{
			$size = count($extSetting);
			for ($i = 0; $i < $size; $i++) {
				$extSetting [$i] = $extSetting [$i]->getInstance();
			}
			$this->params['extSetting'] = $extSetting;
		}

		public function getPreStock()
		{
			return $this->preStock;
		}

		public function setPreStock($preStock)
		{
			$this->params['preStock'] = $preStock;
		}

		public function getMainVideoId()
		{
			return $this->mainVideoId;
		}

		public function setMainVideoId($mainVideoId)
		{
			$this->params['mainVideoId'] = $mainVideoId;
		}

		public function getInfoVideoId()
		{
			return $this->infoVideoId;
		}

		public function setInfoVideoId($infoVideoId)
		{
			$this->params['infoVideoId'] = $infoVideoId;
		}

		public function getMainVideoUrl()
		{
			return $this->mainVideoUrl;
		}

		public function setMainVideoUrl($mainVideoUrl)
		{
			$this->params['mainVideoUrl'] = $mainVideoUrl;
		}

		public function getInfoVideoUrl()
		{
			return $this->infoVideoUrl;
		}

		public function setInfoVideoUrl($infoVideoUrl)
		{
			$this->params['infoVideoUrl'] = $infoVideoUrl;
		}

		public function setJmiSkuPrices($jmiSkuPrices)
		{
			$size = count($jmiSkuPrices);
			for ($i = 0; $i < $size; $i++) {
				$jmiSkuPrices [$i] = $jmiSkuPrices [$i]->getInstance();
			}
			$this->params['jmiSkuPrices'] = $jmiSkuPrices;
		}

	}

	?>