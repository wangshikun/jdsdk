<?php

	namespace JD\api;
	class UnionOpenPositionCreateRequest
	{

		private $apiParas = array();
		private $version;
		private $positionReq;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.union.open.position.create";
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

		public function getPositionReq()
		{
			return $this->apiParas['positionReq'];
		}

		public function setPositionReq($positionReq)
		{
			$this->apiParas['positionReq'] = $positionReq;
		}
	}

	?>