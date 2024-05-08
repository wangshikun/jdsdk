<?php

	namespace JD\domain\OrderUniteSubmit;
	class Sku
	{

		private $params = array();
		private $skuId;
		private $num;
		private $bNeedAnnex;
		private $bNeedGift;

		function __construct()
		{
			$this->params["@type"] = "com.jd.SkuInfo";
		}

		public function getSkuId()
		{
			return $this->skuId;
		}

		public function setSkuId($skuId)
		{
			$this->params['skuId'] = $skuId;
		}

		public function getNum()
		{
			return $this->num;
		}

		public function setNum($num)
		{
			$this->params['num'] = $num;
		}

		public function getBNeedAnnex()
		{
			return $this->bNeedAnnex;
		}

		public function setBNeedAnnex($bNeedAnnex)
		{
			$this->params['bNeedAnnex'] = $bNeedAnnex;
		}

		public function getBNeedGift()
		{
			return $this->bNeedGift;
		}

		public function setBNeedGift($bNeedGift)
		{
			$this->params['bNeedGift'] = $bNeedGift;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>