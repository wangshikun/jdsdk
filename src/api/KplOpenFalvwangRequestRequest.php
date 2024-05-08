<?php

	namespace JD\api;
	class KplOpenFalvwangRequestRequest
	{

		private $apiParas = array();
		private $version;
		private $wrapJson;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.falvwang.request";
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

		public function getWrapJson()
		{
			return $this->apiParas['wrapJson'];
		}

		public function setWrapJson($wrapJson)
		{
			$this->apiParas['wrapJson'] = $wrapJson;
		}
	}

	?>