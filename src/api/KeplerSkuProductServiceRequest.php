<?php

	namespace JD\api;
	class KeplerSkuProductServiceRequest
	{

		private $apiParas = array();
		private $version;
		private $skuIdSet;
		private $extFieldSet;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kepler.sku.ProductService";
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

		public function getSkuIdSet()
		{
			return $this->apiParas['skuIdSet'];
		}

		public function setSkuIdSet($skuIdSet)
		{
			$this->apiParas['skuIdSet'] = $skuIdSet;
		}

		public function getExtFieldSet()
		{
			return $this->apiParas['extFieldSet'];
		}

		public function setExtFieldSet($extFieldSet)
		{
			$this->apiParas['extFieldSet'] = $extFieldSet;
		}
	}

	?>