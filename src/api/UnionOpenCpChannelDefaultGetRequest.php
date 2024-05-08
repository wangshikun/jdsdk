<?php

	namespace JD\api;
	class UnionOpenCpChannelDefaultGetRequest
	{

		private $apiParas = array();
		private $version;
		private $cpDefaultChannelGetReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.cp.channel.default.get";
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

		public function getCpDefaultChannelGetReq()
		{
			return $this->apiParas['cpDefaultChannelGetReq'];
		}

		public function setCpDefaultChannelGetReq($cpDefaultChannelGetReq)
		{
			$this->apiParas['cpDefaultChannelGetReq'] = $cpDefaultChannelGetReq;
		}
	}

	?>