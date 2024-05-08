<?php

	namespace JD\domain\OrderPromiseCalendarGet;
	class SkuVo
	{

		private $params = array();
		private $skuId;
		private $num;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.SkuVo";
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

		function getInstance()
		{
			return $this->params;
		}

	}

	?>