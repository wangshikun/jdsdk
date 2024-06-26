<?php

	namespace JD\api;
	class KplOpenDingdongProtocolConvertRequest
	{

		private $apiParas = array();
		private $version;
		private $inputStr;
		private $appId;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.dingdong.protocol.convert";
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

		public function getInputStr()
		{
			return $this->apiParas['inputStr'];
		}

		public function setInputStr($inputStr)
		{
			$this->apiParas['inputStr'] = $inputStr;
		}

		public function getAppId()
		{
			return $this->apiParas['appId'];
		}

		public function setAppId($appId)
		{
			$this->apiParas['appId'] = $appId;
		}
	}

	?>