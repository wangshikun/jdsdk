<?php

	namespace JD\api;
	class UnionOpenCpActivityDeleteRequest
	{

		private $apiParas = array();
		private $version;
		private $cpActivityDeleteReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.cp.activity.delete";
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

		public function getCpActivityDeleteReq()
		{
			return $this->apiParas['cpActivityDeleteReq'];
		}

		public function setCpActivityDeleteReq($cpActivityDeleteReq)
		{
			$this->apiParas['cpActivityDeleteReq'] = $cpActivityDeleteReq;
		}
	}

	?>