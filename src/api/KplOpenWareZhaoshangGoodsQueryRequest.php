<?php

	namespace JD\api;
	class KplOpenWareZhaoshangGoodsQueryRequest
	{


		private $apiParas = array();
		private $version;
		private $pageIndex;
		private $pageSize;

		public function getApiMethodName()
		{
			return "jingdong.kpl.open.ware.zhaoshang.goods.query";
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

		public function getPageIndex()
		{
			return $this->pageIndex;
		}

		public function setPageIndex($pageIndex)
		{
			$this->pageIndex = $pageIndex;
			$this->apiParas["pageIndex"] = $pageIndex;
		}

		public function getPageSize()
		{
			return $this->pageSize;
		}

		public function setPageSize($pageSize)
		{
			$this->pageSize = $pageSize;
			$this->apiParas["pageSize"] = $pageSize;
		}

	}





        
 

