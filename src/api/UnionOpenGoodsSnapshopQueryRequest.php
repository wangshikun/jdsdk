<?php

	namespace JD\api;
	class UnionOpenGoodsSnapshopQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $SnapShopGoodsReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.goods.snapshop.query";
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

		public function getSnapShopGoodsReq()
		{
			return $this->apiParas['SnapShopGoodsReq'];
		}

		public function setSnapShopGoodsReq($SnapShopGoodsReq)
		{
			$this->apiParas['SnapShopGoodsReq'] = $SnapShopGoodsReq;
		}
	}

	?>