<?php

	namespace JD\api;
	class UnionOpenCpChannelGetRequest
	{

		private $apiParas = array();
		private $version;
		private $cpChannelGetReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.cp.channel.get";
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

		public function getCpChannelGetReq()
		{
			return $this->apiParas['cpChannelGetReq'];
		}

		public function setCpChannelGetReq($cpChannelGetReq)
		{
			$this->apiParas['cpChannelGetReq'] = $cpChannelGetReq;
		}
	}

	?>