<?php

	namespace JD\api;
	class UnionOpenCpActivityCancelValidateRequest
	{

		private $apiParas = array();
		private $version;
		private $cpVerifyCancelActivityReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.cp.activity.cancel.validate";
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

		public function getCpVerifyCancelActivityReq()
		{
			return $this->apiParas['cpVerifyCancelActivityReq'];
		}

		public function setCpVerifyCancelActivityReq($cpVerifyCancelActivityReq)
		{
			$this->apiParas['cpVerifyCancelActivityReq'] = $cpVerifyCancelActivityReq;
		}
	}

	?>