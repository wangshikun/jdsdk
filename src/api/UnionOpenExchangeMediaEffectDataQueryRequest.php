<?php

	namespace JD\api;
	class UnionOpenExchangeMediaEffectDataQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $effectDataQueryReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.exchange.media.effect.data.query";
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

		public function getEffectDataQueryReq()
		{
			return $this->apiParas['effectDataQueryReq'];
		}

		public function setEffectDataQueryReq($effectDataQueryReq)
		{
			$this->apiParas['effectDataQueryReq'] = $effectDataQueryReq;
		}
	}

	?>