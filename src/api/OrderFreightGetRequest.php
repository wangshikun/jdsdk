<?php

	namespace JD\api;
	class OrderFreightGetRequest
	{

		private $apiParas = array();
		private $version;
		private $sku;
		private $province;
		private $city;
		private $county;
		private $town;
		private $paymentType;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "biz.order.freight.get";
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

		public function getCounty()
		{
			return $this->apiParas['county'];
		}

		public function setCounty($county)
		{
			$this->apiParas['county'] = $county;
		}

		public function getTown()
		{
			return $this->apiParas['town'];
		}

		public function setTown($town)
		{
			$this->apiParas['town'] = $town;
		}

		public function getPaymentType()
		{
			return $this->apiParas['paymentType'];
		}

		public function setPaymentType($paymentType)
		{
			$this->apiParas['paymentType'] = $paymentType;
		}
	}

	?>