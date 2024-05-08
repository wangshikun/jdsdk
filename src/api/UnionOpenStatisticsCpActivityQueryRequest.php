<?php

	namespace JD\api;
	class UnionOpenStatisticsCpActivityQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $cpActivityEffectDataReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.statistics.cp.activity.query";
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

		public function getCpActivityEffectDataReq()
		{
			return $this->apiParas['cpActivityEffectDataReq'];
		}

		public function setCpActivityEffectDataReq($cpActivityEffectDataReq)
		{
			$this->apiParas['cpActivityEffectDataReq'] = $cpActivityEffectDataReq;
		}
	}

	?>