<?php

	namespace JD\api;
	class BizProductGetcategorysRequest
	{

		private $apiParas = array();
		private $version;
		private $pageNo;
		private $pageSize;
		private $parentId;
		private $catClass;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.biz.product.getcategorys";
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

		public function getPageNo()
		{
			return $this->apiParas['pageNo'];
		}

		public function setPageNo($pageNo)
		{
			$this->apiParas['pageNo'] = $pageNo;
		}

		public function getPageSize()
		{
			return $this->apiParas['pageSize'];
		}

		public function setPageSize($pageSize)
		{
			$this->apiParas['pageSize'] = $pageSize;
		}

		public function getParentId()
		{
			return $this->apiParas['parentId'];
		}

		public function setParentId($parentId)
		{
			$this->apiParas['parentId'] = $parentId;
		}

		public function getCatClass()
		{
			return $this->apiParas['catClass'];
		}

		public function setCatClass($catClass)
		{
			$this->apiParas['catClass'] = $catClass;
		}
	}

	?>