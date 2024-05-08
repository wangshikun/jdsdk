<?php

	namespace JD\api;
	class UnionOpenCpActivityGoodsValidateRequest
	{

		private $apiParas = array();
		private $version;
		private $cpActivityGoodsVerifyReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.cp.activity.goods.validate";
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

		public function getCpActivityGoodsVerifyReq()
		{
			return $this->apiParas['cpActivityGoodsVerifyReq'];
		}

		public function setCpActivityGoodsVerifyReq($cpActivityGoodsVerifyReq)
		{
			$this->apiParas['cpActivityGoodsVerifyReq'] = $cpActivityGoodsVerifyReq;
		}
	}

	?>