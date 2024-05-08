<?php

	namespace JD\api;
	class KplOpenXimalayaGetresourceRequest
	{

		private $apiParas = array();
		private $version;
		private $wrap;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.ximalaya.getresource";
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

		public function getWrap()
		{
			return $this->apiParas['wrap'];
		}

		public function setWrap($wrap)
		{
			$this->apiParas['wrap'] = $wrap;
		}
	}

	?>