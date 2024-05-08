<?php

	namespace JD\api;
	class UnionOpenCpChannelDeleteRequest
	{

		private $apiParas = array();
		private $version;
		private $cpChannelDeleteReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.cp.channel.delete";
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

		public function getCpChannelDeleteReq()
		{
			return $this->apiParas['cpChannelDeleteReq'];
		}

		public function setCpChannelDeleteReq($cpChannelDeleteReq)
		{
			$this->apiParas['cpChannelDeleteReq'] = $cpChannelDeleteReq;
		}
	}

	?>