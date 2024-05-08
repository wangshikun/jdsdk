<?php

	namespace JD\api;
	class KplOpenAlphashoppingconfSaveinfoRequest
	{

		private $apiParas = array();
		private $version;
		private $dataJson;
		private $ptKey;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.alphashoppingconf.saveinfo";
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

		public function getDataJson()
		{
			return $this->apiParas['dataJson'];
		}

		public function setDataJson($dataJson)
		{
			$this->apiParas['dataJson'] = $dataJson;
		}

		public function getPtKey()
		{
			return $this->apiParas['ptKey'];
		}

		public function setPtKey($ptKey)
		{
			$this->apiParas['ptKey'] = $ptKey;
		}
	}

	?>