<?php

	namespace JD\api;
	class SearchWareRequest
	{


		private $apiParas = array();
		private $version;
		private $key;
		private $filtType;
		private $areaIds;
		private $sortType;
		private $page;
		private $charset;
		private $urlencode;

		public function getApiMethodName()
		{
			return "jingdong.search.ware";
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

		public function getKey()
		{
			return $this->key;
		}

		public function setKey($key)
		{
			$this->key = $key;
			$this->apiParas["key"] = $key;
		}

		public function getFiltType()
		{
			return $this->filtType;
		}

		public function setFiltType($filtType)
		{
			$this->filtType = $filtType;
			$this->apiParas["filt_type"] = $filtType;
		}

		public function getAreaIds()
		{
			return $this->areaIds;
		}

		public function setAreaIds($areaIds)
		{
			$this->areaIds = $areaIds;
			$this->apiParas["area_ids"] = $areaIds;
		}

		public function getSortType()
		{
			return $this->sortType;
		}

		public function setSortType($sortType)
		{
			$this->sortType = $sortType;
			$this->apiParas["sort_type"] = $sortType;
		}

		public function getPage()
		{
			return $this->page;
		}

		public function setPage($page)
		{
			$this->page = $page;
			$this->apiParas["page"] = $page;
		}

		public function getCharset()
		{
			return $this->charset;
		}

		public function setCharset($charset)
		{
			$this->charset = $charset;
			$this->apiParas["charset"] = $charset;
		}

		public function getUrlencode()
		{
			return $this->urlencode;
		}

		public function setUrlencode($urlencode)
		{
			$this->urlencode = $urlencode;
			$this->apiParas["urlencode"] = $urlencode;
		}

	}





        
 

