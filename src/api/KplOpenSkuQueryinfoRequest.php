<?php

	namespace JD\api;
	class KplOpenSkuQueryinfoRequest
	{

		private $apiParas = array();
		private $version;
		private $skuQuery;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.sku.queryinfo";
		}

		public function getApiParas()
		{
			if (empty($this->apiParas)) {
				return "{}";
			}
			return json_encode($this->apiParas);
		}

		public function check()
		{

		}

		public function putOtherTextParam($key, $value)
		{
			$this->apiParas[$key] = $value;
			$this->$key = $value;
		}

		public function getVersion()
		{
			return $this->version;
		}

		public function setVersion($version)
		{
			$this->version = $version;
		}

		public function getSkuQuery()
		{
			return $this->apiParas['skuQuery'];
		}

		public function setSkuQuery($skuQuery)
		{
			$this->apiParas['skuQuery'] = $skuQuery;
		}
	}

	?>