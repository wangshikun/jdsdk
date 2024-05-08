<?php

	namespace JD\api;
	class ProductSkuCheckRequest
	{

		private $apiParas = array();
		private $version;
		private $skuIds;
		private $queryExts;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "biz.product.sku.check";
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

		public function getSkuIds()
		{
			return $this->apiParas['skuIds'];
		}

		public function setSkuIds($skuIds)
		{
			$this->apiParas['skuIds'] = $skuIds;
		}

		public function getQueryExts()
		{
			return $this->apiParas['queryExts'];
		}

		public function setQueryExts($queryExts)
		{
			$this->apiParas['queryExts'] = $queryExts;
		}
	}

	?>