<?php

	namespace JD\api;
	class KplOpenAreaCheckareaRequest
	{

		private $apiParas = array();
		private $version;
		private $provinceId;
		private $cityId;
		private $countyId;
		private $townId;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.area.checkarea";
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

		public function getProvinceId()
		{
			return $this->apiParas['provinceId'];
		}

		public function setProvinceId($provinceId)
		{
			$this->apiParas['provinceId'] = $provinceId;
		}

		public function getCityId()
		{
			return $this->apiParas['cityId'];
		}

		public function setCityId($cityId)
		{
			$this->apiParas['cityId'] = $cityId;
		}

		public function getCountyId()
		{
			return $this->apiParas['countyId'];
		}

		public function setCountyId($countyId)
		{
			$this->apiParas['countyId'] = $countyId;
		}

		public function getTownId()
		{
			return $this->apiParas['townId'];
		}

		public function setTownId($townId)
		{
			$this->apiParas['townId'] = $townId;
		}
	}

	?>