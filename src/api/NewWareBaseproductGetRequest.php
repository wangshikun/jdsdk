<?php

	namespace JD\api;
	class NewWareBaseproductGetRequest
	{


		private $apiParas = array();
		private $version;
		private $ids;
		private $basefields;

		public function getApiMethodName()
		{
			return "jingdong.new.ware.baseproduct.get";
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

		public function getIds()
		{
			return $this->ids;
		}

		public function setIds($ids)
		{
			$this->ids = $ids;
			$this->apiParas["ids"] = $ids;
		}

		public function getBasefields()
		{
			return $this->basefields;
		}

		public function setBasefields($basefields)
		{
			$this->basefields = $basefields;
			$this->apiParas["basefields"] = $basefields;
		}
	}





        
 

