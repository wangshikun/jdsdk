<?php

	namespace JD\api;
	class UnionOpenGoodsCombinationpageGetRequest
	{

		private $apiParas = array();
		private $version;
		private $combinationGoodsPageReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.goods.combinationpage.get";
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

		public function getCombinationGoodsPageReq()
		{
			return $this->apiParas['combinationGoodsPageReq'];
		}

		public function setCombinationGoodsPageReq($combinationGoodsPageReq)
		{
			$this->apiParas['combinationGoodsPageReq'] = $combinationGoodsPageReq;
		}
	}

	?>