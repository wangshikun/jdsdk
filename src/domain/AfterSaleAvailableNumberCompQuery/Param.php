<?php

	namespace JD\domain\AfterSaleAvailableNumberCompQuery;
	class Param
	{

		private $params = array();
		private $jdOrderId;
		private $skuId;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.AvailableNumComQueParamReqVo";
		}

		public function getJdOrderId()
		{
			return $this->jdOrderId;
		}

		public function setJdOrderId($jdOrderId)
		{
			$this->params['jdOrderId'] = $jdOrderId;
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