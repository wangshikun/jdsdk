<?php

	namespace JD\api;
	class AddressTownsByCountyIdQueryRequest
	{

		private $apiParas = array();
		private $version;
		private $id;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "biz.address.townsByCountyId.query";
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

		public function getId()
		{
			return $this->apiParas['id'];
		}

		public function setId($id)
		{
			$this->apiParas['id'] = $id;
		}
	}

	?>