<?php

	namespace JD\api;
	class ProductIsCodQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $skuIds;
		private $province;
		private $city;
		private $town;
		private $county;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "biz.product.isCod.query";
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

		public function getProvince()
		{
			return $this->apiParas['province'];
		}

		public function setProvince($province)
		{
			$this->apiParas['province'] = $province;
		}

		public function getCity()
		{
			return $this->apiParas['city'];
		}

		public function setCity($city)
		{
			$this->apiParas['city'] = $city;
		}

		public function getTown()
		{
			return $this->apiParas['town'];
		}

		public function setTown($town)
		{
			$this->apiParas['town'] = $town;
		}

		public function getCounty()
		{
			return $this->apiParas['county'];
		}

		public function setCounty($county)
		{
			$this->apiParas['county'] = $county;
		}
	}

	?>