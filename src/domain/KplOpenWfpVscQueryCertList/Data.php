<?php

	namespace JD\domain\KplOpenWfpVscQueryCertList;
	class Data
	{

		private $params = array();
		private $pageNum;
		private $pageSize;
		private $queryData;

		function __construct()
		{
			$this->params["@type"] = "com.jd.kpl.PageQuery";
		}

		public function getPageNum()
		{
			return $this->pageNum;
		}

		public function setPageNum($pageNum)
		{
			$this->params['pageNum'] = $pageNum;
		}

		public function getPageSize()
		{
			return $this->pageSize;
		}

		public function setPageSize($pageSize)
		{
			$this->params['pageSize'] = $pageSize;
		}

		public function setQueryData($queryData)
		{
			$this->params['queryData'] = $queryData->getInstance();
		}


		function getInstance()
		{
			return $this->params;
		}

	}

	?>