<?php

	namespace JD\api;
	class KplOpenYaoMultipriceUpdateRequest
	{

		private $apiParas = array();
		private $version;
		private $venderId;
		private $list;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.kpl.open.yao.multiprice.update";
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

		public function getVenderId()
		{
			return $this->apiParas['venderId'];
		}

		public function setVenderId($venderId)
		{
			$this->apiParas['venderId'] = $venderId;
		}

		public function getList()
		{
			return $this->apiParas['list'];
		}

		public function setList($list)
		{
			$this->apiParas['list'] = $list;
		}
	}

	?>