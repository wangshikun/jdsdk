<?php

	namespace JD\domain\UnionOpenGoodsCombinationpageGet;
	class CombinationGoodsPageReq
	{

		private $params = array();
		private $skuInfo;
		private $couponUrls;

		function __construct()
		{
			$this->params["@type"] = "com.jd.union.open.gateway.api.dto.goods.combination.CombinationGoodsPageReq";
		}

		public function getSkuInfo()
		{
			return $this->skuInfo;
		}

		public function setSkuInfo($skuInfo)
		{
			$this->params['skuInfo'] = $skuInfo;
		}

		public function getCouponUrls()
		{
			return $this->couponUrls;
		}

		public function setCouponUrls($couponUrls)
		{
			$this->params['couponUrls'] = $couponUrls;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>