<?php

	namespace JD\api;
	class UnionOpenCouponQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $couponUrls;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.coupon.query";
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

		public function getCouponUrls()
		{
			return $this->apiParas['couponUrls'];
		}

		public function setCouponUrls($couponUrls)
		{
			$this->apiParas['couponUrls'] = $couponUrls;
		}
	}

	?>