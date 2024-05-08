<?php

	namespace JD\api;
	class WareProductbigfieldGetRequest
	{

		private $apiParas = array();
		private $version;
		private $wid;
		private $fields;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jingdong.ware.productbigfield.get";
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

		public function getWid()
		{
			return $this->apiParas['wid'];
		}

		public function setWid($wid)
		{
			$this->apiParas['wid'] = $wid;
		}

		public function getFields()
		{
			return $this->apiParas['fields'];
		}

		public function setFields($fields)
		{
			$this->apiParas['fields'] = $fields;
		}
	}

	?>