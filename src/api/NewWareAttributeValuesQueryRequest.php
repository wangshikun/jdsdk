<?php

	namespace JD\api;
	class NewWareAttributeValuesQueryRequest
	{


		private $apiParas = array();
		private $version;
		private $id;

		public function getApiMethodName()
		{
			return "jingdong.new.ware.AttributeValues.query";
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
			return $this->id;
		}

		public function setId($id)
		{
			$this->id = $id;
			$this->apiParas["id"] = $id;
		}
	}





        
 

