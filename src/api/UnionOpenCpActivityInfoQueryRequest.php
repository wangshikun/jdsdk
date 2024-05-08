<?php

	namespace JD\api;
	class UnionOpenCpActivityInfoQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $cpActivityInfoQueryReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.cp.activity.info.query";
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

		public function getCpActivityInfoQueryReq()
		{
			return $this->apiParas['cpActivityInfoQueryReq'];
		}

		public function setCpActivityInfoQueryReq($cpActivityInfoQueryReq)
		{
			$this->apiParas['cpActivityInfoQueryReq'] = $cpActivityInfoQueryReq;
		}
	}

	?>