<?php

	namespace JD\api;
	class UnionOpenCpActivityGoodsQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $cpActivityGoodsReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.cp.activity.goods.query";
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

		public function getCpActivityGoodsReq()
		{
			return $this->apiParas['cpActivityGoodsReq'];
		}

		public function setCpActivityGoodsReq($cpActivityGoodsReq)
		{
			$this->apiParas['cpActivityGoodsReq'] = $cpActivityGoodsReq;
		}
	}

	?>