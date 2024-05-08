<?php

	namespace JD\domain\KplOpenSkuQueryinfo;
	class SkuQuery
	{

		private $params = array();
		private $venderId;
		private $skuAlias;
		private $pageSize;
		private $currentPage;
		private $wareState;

		function __construct()
		{
			$this->params["@type"] = "com.jd.gongxiao.kepler.domain.SkuQueryReq";
		}

		public function getVenderId()
		{
			return $this->venderId;
		}

		public function setVenderId($venderId)
		{
			$this->params['venderId'] = $venderId;
		}

		public function getSkuAlias()
		{
			return $this->skuAlias;
		}

		public function setSkuAlias($skuAlias)
		{
			$this->params['skuAlias'] = $skuAlias;
		}

		public function getPageSize()
		{
			return $this->pageSize;
		}

		public function setPageSize($pageSize)
		{
			$this->params['pageSize'] = $pageSize;
		}

		public function getCurrentPage()
		{
			return $this->currentPage;
		}

		public function setCurrentPage($currentPage)
		{
			$this->params['currentPage'] = $currentPage;
		}

		public function getWareState()
		{
			return $this->wareState;
		}

		public function setWareState($wareState)
		{
			$this->params['wareState'] = $wareState;
		}

		function getInstance()
		{
			return $this->params;
		}

	}

	?>