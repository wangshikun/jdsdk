<?php

	namespace JD\api;
	class KplOpenGetsellpriceQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $sku;
		private $containsTax;
		private $queryExts;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.getsellprice.query";
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

		public function getSku()
		{
			return $this->apiParas['sku'];
		}

		public function setSku($sku)
		{
			$this->apiParas['sku'] = $sku;
		}

		public function getContainsTax()
		{
			return $this->apiParas['containsTax'];
		}

		public function setContainsTax($containsTax)
		{
			$this->apiParas['containsTax'] = $containsTax;
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