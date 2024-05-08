<?php

	namespace JD\api;
	class UnionOpenGoodsSeckillQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $goodsReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.goods.seckill.query";
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

		public function getGoodsReq()
		{
			return $this->apiParas['goodsReq'];
		}

		public function setGoodsReq($goodsReq)
		{
			$this->apiParas['goodsReq'] = $goodsReq;
		}
	}

	?>