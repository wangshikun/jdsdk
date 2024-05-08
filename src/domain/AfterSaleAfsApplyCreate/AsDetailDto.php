<?php

	namespace JD\domain\AfterSaleAfsApplyCreate;
	class AsDetailDto
	{

		private $params = array();
		private $skuId;
		private $skuNum;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.AfterSaleDetailDto";
		}

		public function getSkuId()
		{
			return $this->skuId;
		}

		public function setSkuId($skuId)
		{
			$this->params['skuId'] = $skuId;
		}

		public function getSkuNum()
		{
			return $this->skuNum;
		}

		public function setSkuNum($skuNum)
		{
			$this->params['skuNum'] = $skuNum;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>