<?php

	namespace JD\domain\OpenOrderSplitDeliverNew;
	class Attribute2
	{

		private $params = array();
		private $manufactureTime;
		private $validTime;
		private $batchNum;
		private $batchCount;
		private $skuPrice;

		function __construct()
		{
			$this->params["@type"] = "com.jd.gongxiao.kepler.domain.OrderExtSkuBatchInfo";
		}

		public function getManufactureTime()
		{
			return $this->manufactureTime;
		}

		public function setManufactureTime($manufactureTime)
		{
			$this->params['manufactureTime'] = $manufactureTime;
		}

		public function getValidTime()
		{
			return $this->validTime;
		}

		public function setValidTime($validTime)
		{
			$this->params['validTime'] = $validTime;
		}

		public function getBatchNum()
		{
			return $this->batchNum;
		}

		public function setBatchNum($batchNum)
		{
			$this->params['batchNum'] = $batchNum;
		}

		public function getBatchCount()
		{
			return $this->batchCount;
		}

		public function setBatchCount($batchCount)
		{
			$this->params['batchCount'] = $batchCount;
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