<?php

	namespace JD\api;
	class KplOpenMigumusicChannelkeyRequest
	{

		private $apiParas = array();
		private $version;
		private $dataJson;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.migumusic.channelkey";
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
	}

	?>