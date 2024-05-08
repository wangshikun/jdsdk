<?php

	namespace JD\api;
	class UnionOpenOauthTestQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $oauthTestReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.oauth.test.query";
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

		public function getOauthTestReq()
		{
			return $this->apiParas['oauthTestReq'];
		}

		public function setOauthTestReq($oauthTestReq)
		{
			$this->apiParas['oauthTestReq'] = $oauthTestReq;
		}
	}

	?>