<?php

	namespace JD\api;
	class UnionOpenGoodsQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $goodsReqDTO;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.goods.query";
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

		public function getGoodsReqDTO()
		{
			return $this->apiParas['goodsReqDTO'];
		}

		public function setGoodsReqDTO($goodsReqDTO)
		{
			$this->apiParas['goodsReqDTO'] = $goodsReqDTO;
		}
	}

	?>