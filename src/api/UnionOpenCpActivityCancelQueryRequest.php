<?php

	namespace JD\api;
	class UnionOpenCpActivityCancelQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $cpCancelActivityQueryReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.cp.activity.cancel.query";
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

		public function getCpCancelActivityQueryReq()
		{
			return $this->apiParas['cpCancelActivityQueryReq'];
		}

		public function setCpCancelActivityQueryReq($cpCancelActivityQueryReq)
		{
			$this->apiParas['cpCancelActivityQueryReq'] = $cpCancelActivityQueryReq;
		}
	}

	?>