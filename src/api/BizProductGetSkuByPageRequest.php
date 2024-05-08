<?php

	namespace JD\api;
	class BizProductGetSkuByPageRequest
	{

		private $apiParas = array();
		private $version;
		private $pageNum;
		private $pageNo;

		public function __construct()
		{
			$this->version = "1.0";
		}

		public function getApiMethodName()
		{
			return "jd.biz.product.getSkuByPage";
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

		public function getPageNum()
		{
			return $this->apiParas['pageNum'];
		}

		public function setPageNum($pageNum)
		{
			$this->apiParas['pageNum'] = $pageNum;
		}

		public function getPageNo()
		{
			return $this->apiParas['pageNo'];
		}

		public function setPageNo($pageNo)
		{
			$this->apiParas['pageNo'] = $pageNo;
		}
	}

	?>